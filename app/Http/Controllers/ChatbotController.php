<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function createConversation(Request $request)
    {
        $baseUrl = rtrim(env('FASTAPI_CHATBOT_URL', 'https://fast-api-g0de.onrender.com'), '/');
        $apiKey = env('FASTAPI_API_KEY', 'fastapichatbotbackend@2026');

        $response = Http::withHeaders([
            'X-API-Key' => $apiKey,
            'Content-Type' => 'application/json',
        ])->post("{$baseUrl}/api/v1/conversations");

        if ($response->successful()) {
            return response()->json($response->json(), $response->status());
        }

        return response()->json([
            'error' => 'Gagal membuat sesi obrolan',
            'detail' => $response->json('detail') ?? $response->body()
        ], $response->status());
    }

    public function sendMessage(Request $request)
    {
        $baseUrl = rtrim(env('FASTAPI_CHATBOT_URL', 'https://fast-api-g0de.onrender.com'), '/');
        $apiKey = env('FASTAPI_API_KEY', 'fastapichatbotbackend@2026');

        $payload = [
            'message' => $request->input('message'),
        ];

        if ($request->filled('conversation_id')) {
            $payload['conversation_id'] = $request->input('conversation_id');
        }

        if ($request->filled('previous_response_id')) {
            $payload['previous_response_id'] = $request->input('previous_response_id');
        }

        $response = Http::withHeaders([
            'X-API-Key' => $apiKey,
            'Content-Type' => 'application/json',
        ])->post("{$baseUrl}/api/v1/chat", $payload);

        if ($response->successful()) {
            return response()->json($response->json(), $response->status());
        }

        return response()->json([
            'error' => 'Gagal terhubung ke chatbot backend',
            'detail' => $response->json('detail') ?? $response->body()
        ], $response->status());
    }

    public function streamMessage(Request $request)
    {
        $baseUrl = rtrim(env('FASTAPI_CHATBOT_URL', 'https://fast-api-g0de.onrender.com'), '/');
        $apiKey = env('FASTAPI_API_KEY', 'fastapichatbotbackend@2026');

        $payload = [
            'message' => $request->input('message'),
        ];

        if ($request->filled('conversation_id')) {
            $payload['conversation_id'] = $request->input('conversation_id');
        }

        if ($request->filled('previous_response_id')) {
            $payload['previous_response_id'] = $request->input('previous_response_id');
        }

        return response()->stream(function () use ($baseUrl, $apiKey, $payload) {
            @ini_set('output_buffering', 'off');
            @ini_set('zlib.output_compression', false);
            while (ob_get_level() > 0) {
                @ob_end_clean();
            }

            $opts = [
                'http' => [
                    'method' => 'POST',
                    'header' => "Content-Type: application/json\r\n" .
                                "X-API-Key: {$apiKey}\r\n",
                    'content' => json_encode($payload),
                    'timeout' => 120,
                ],
            ];

            $context = stream_context_create($opts);
            $stream = @fopen("{$baseUrl}/api/v1/chat/stream", 'rb', false, $context);

            if ($stream === false) {
                echo "Gagal terhubung ke stream chatbot backend.";
                return;
            }

            while (!feof($stream)) {
                $buffer = fread($stream, 64);
                if ($buffer !== false && strlen($buffer) > 0) {
                    echo $buffer;
                    if (ob_get_level() > 0) {
                        @ob_flush();
                    }
                    @flush();
                }
            }

            fclose($stream);
        }, 200, [
            'Content-Type' => 'text/plain; charset=utf-8',
            'Cache-Control' => 'no-cache, no-transform',
            'X-Accel-Buffering' => 'no',
            'Connection' => 'keep-alive',
        ]);
    }
}
