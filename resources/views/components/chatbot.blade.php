<!-- FLOATING AI CHATBOT COMPONENT (Figma Design Implementation) -->
<div id="chatbotComponentRoot" class="fixed bottom-4 sm:bottom-6 right-4 sm:right-6 z-[9999] flex flex-col items-end max-w-[calc(100vw-32px)] font-sans select-none pointer-events-none [&>*]:pointer-events-auto">
    
    <!-- Chat Window Card -->
    <div id="chatbotWindow" 
         class="hidden w-[380px] sm:w-[400px] h-[560px] max-h-[calc(100vh-100px)] max-sm:w-[calc(100vw-32px)] max-sm:h-[500px] bg-white rounded-[22px] shadow-[0_12px_45px_rgba(0,0,0,0.18)] mb-3 flex flex-col overflow-hidden origin-bottom-right scale-0 opacity-0 pointer-events-none transition-all duration-300 ease-[cubic-bezier(0.16,1,0.3,1)] [&.active]:scale-100 [&.active]:opacity-100 [&.active]:pointer-events-auto border border-[#e9eaeb]">
        
        <!-- Header Bar -->
        <div class="bg-[#052753] text-white px-4 py-3.5 flex items-center justify-between shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-[46px] h-[46px] rounded-full bg-white flex items-center justify-center shrink-0 p-0.5 overflow-hidden shadow-sm">
                    <img src="{{ asset('assets/chatbot/avatar.png') }}" class="w-full h-full object-cover rounded-full" alt="IDN AI Mascot">
                </div>
                <div>
                    <h4 class="font-semibold text-[16px] text-white leading-tight mb-0.5 tracking-tight">IDN AI Assistant</h4>
                    <p class="text-[13px] text-[#d5d7da] font-normal leading-tight">@idn.sch.id</p>
                </div>
            </div>
            <button type="button" 
                    onclick="toggleChatbot()" 
                    class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-white/15 text-white/80 hover:text-white transition-colors cursor-pointer" 
                    title="Tutup Chat">
                <img src="{{ asset('assets/chatbot/icon-close.svg') }}" class="w-3.5 h-3.5" alt="Close">
            </button>
        </div>

        <!-- Messages Area -->
        <div id="chatbotMessages" class="flex-1 bg-[#f5f5f5] p-4 overflow-y-auto flex flex-col gap-3.5 [scrollbar-width:thin] [scrollbar-color:#cbd5e1_transparent]">
            <!-- Welcome Bot Message -->
            <div class="flex gap-2.5 max-w-[88%] animate-fade-in self-start">
                <div class="w-7 h-7 rounded-full bg-[#052753] text-white flex items-center justify-center text-xs shrink-0 shadow-sm mt-0.5 overflow-hidden">
                    <img src="{{ asset('assets/chatbot/avatar.png') }}" class="w-full h-full object-cover" alt="AI">
                </div>
                <div class="p-3 px-4 rounded-2xl rounded-tl-xs text-[14px] leading-[20px] break-words bg-white text-[#181d27] shadow-sm border border-[#e9eaeb]">
                    Halo Kak, selamat datang! Saya adalah Asisten AI IDN yang siap membantu memberikan informasi seputar pendaftaran, program sekolah, fasilitas, dan pertanyaan lainnya. Silakan tanyakan apa saja!
                </div>
            </div>
        </div>

        <!-- Floating Input Card -->
        <div class="p-3.5 bg-[#f5f5f5] shrink-0 border-t border-slate-200/50">
            <div id="chatbotInputWrapper" class="bg-white border border-[#e9eaeb] rounded-[18px] px-4 py-2 flex items-center justify-between gap-2 shadow-sm transition-all focus-within:border-[#0c61cf] focus-within:ring-2 focus-within:ring-[#0c61cf]/20">
                <input type="text" 
                       id="chatbotUserInput" 
                       class="flex-1 bg-transparent text-[#181d27] text-[14px] placeholder-[#717680] outline-none border-none py-1.5" 
                       placeholder="Tanya apa saja!" 
                       autocomplete="off">
                
                <div class="flex items-center gap-2 shrink-0">
                    <!-- Microphone Button
                    <button type="button" 
                            id="chatbotMicBtn" 
                            onclick="toggleVoiceInput()" 
                            class="w-8 h-8 rounded-full flex items-center justify-center text-[#717680] hover:text-[#0c61cf] hover:bg-slate-100 transition-all cursor-pointer relative" 
                            title="Input Suara">
                        <img src="{{ asset('assets/chatbot/icon-mic.svg') }}" class="w-4 h-4" alt="Mic">
                        <span id="chatbotMicPulse" class="hidden absolute inset-0 rounded-full border-2 border-red-500 animate-ping"></span>
                    </button> -->
                    
                    <!-- Send Button -->
                    <button type="button" 
                            id="chatbotSendBtn" 
                            onclick="sendChatbotMessage()" 
                            class="w-[38px] h-[38px] rounded-full bg-[#0c61cf] hover:bg-[#094eb0] text-white flex items-center justify-center transition-all cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed shadow-sm hover:scale-105 active:scale-95" 
                            title="Kirim Pesan">
                        <img src="{{ asset('assets/chatbot/icon-send.svg') }}" class="w-4 h-4" alt="Send">
                    </button>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Floating Toggle Launcher Button (Figma Design Node 20502:11704) -->
    <button type="button" 
            id="chatbotLauncherBtn"
            onclick="toggleChatbot()" 
            class="w-[72px] h-[72px] max-sm:w-16 max-sm:h-16 rounded-full bg-white border-2 border-transparent shadow-[0_8px_30px_rgba(0,0,0,0.15)] flex items-center justify-center p-1 cursor-pointer transition-all duration-300 ease-out hover:border-[#0c61cf] hover:ring-4 hover:ring-[#0c61cf]/20 hover:scale-105 active:scale-95 group relative" 
            title="Tanya IDN AI Assistant">
        <div class="w-full h-full rounded-full overflow-hidden flex items-center justify-center bg-white">
            <img src="{{ asset('assets/chatbot/avatar.png') }}" class="w-full h-full object-cover rounded-full group-hover:scale-110 transition-transform duration-300" alt="Chatbot Launcher">
        </div>
        <!-- Status dot -->
        <span class="absolute top-1 right-1 w-3.5 h-3.5 bg-emerald-500 border-2 border-white rounded-full"></span>
    </button>

</div>

<!-- CHATBOT SCRIPT LOGIC -->
<script>
    (function() {
        let isChatOpen = false;
        let activeConversationId = null;
        let activeResponseId = null;
        let isWaitingResponse = false;
        let recognition = null;
        let isRecording = false;

        // Cache DOM elements
        const chatbotWindow = document.getElementById("chatbotWindow");
        const chatbotMessages = document.getElementById("chatbotMessages");
        const chatbotUserInput = document.getElementById("chatbotUserInput");
        const chatbotSendBtn = document.getElementById("chatbotSendBtn");
        const chatbotMicBtn = document.getElementById("chatbotMicBtn");
        const chatbotMicPulse = document.getElementById("chatbotMicPulse");

        // Global functions on window so onclick handlers work everywhere
        window.toggleChatbot = function() {
            isChatOpen = !isChatOpen;
            if (isChatOpen) {
                chatbotWindow.classList.remove("hidden");
                void chatbotWindow.offsetWidth; // Force layout reflow before animation
                chatbotWindow.classList.add("active");
                setTimeout(() => chatbotUserInput.focus(), 300);
            } else {
                chatbotWindow.classList.remove("active");
                if (isRecording) stopVoiceInput();
                setTimeout(() => {
                    if (!isChatOpen) {
                        chatbotWindow.classList.add("hidden");
                    }
                }, 300);
            }
        };

        window.sendChatbotMessage = async function() {
    const text = chatbotUserInput.value.trim();
    if (!text || isWaitingResponse) return;

    // 1. Tampilkan Pesan Pengguna
    appendUserMessage(text);
    chatbotUserInput.value = "";
    isWaitingResponse = true;
    chatbotSendBtn.disabled = true;

    // 2. Tampilkan Indikator Mengetik sementara
    const typingId = "chatbot-typing-" + Date.now();
    appendTypingIndicator(typingId);
    scrollToBottom();

    try {
        // Inisialisasi sesi percakapan jika belum ada
        if (!activeConversationId) {
            try {
                const initRes = await fetch('/api/chatbot/conversations', {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')?.content || "{{ csrf_token() }}"
                    }
                });
                if (initRes.ok) {
                    const initData = await initRes.json();
                    activeConversationId = initData.conversation_id;
                }
            } catch (err) {
                console.warn("Gagal inisialisasi sesi chatbot:", err);
            }
        }

        const payload = { message: text };
        if (activeConversationId) payload.conversation_id = activeConversationId;

        // Kirim permintaan ke endpoint /api/chatbot/chat/stream di proxy Laravel Anda
        const response = await fetch('/api/chatbot/chat/stream', {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')?.content || "{{ csrf_token() }}"
            },
            body: JSON.stringify(payload)
        });

        // Hapus indikator mengetik
        removeElement(typingId);

        if (!response.ok) {
            let errDetail = "Terjadi kesalahan pada server.";
            try {
                const errJson = await response.json();
                errDetail = errJson.detail || errDetail;
            } catch (e) {}

            if (response.status === 401) {
                appendErrorMessage("<b>Akses Ditolak (401):</b> API Key tidak cocok dengan backend.");
            } else if (response.status === 429) {
                appendErrorMessage("<b>Rate Limit (429):</b> Terlalu banyak permintaan.");
            } else {
                appendErrorMessage(`<b>Error (${response.status}):</b> ${errDetail}`);
            }
        } else {
            // Membaca aliran data stream kata demi kata (Real-Time)
            const reader = response.body.getReader();
            const decoder = new TextDecoder("utf-8");
            let fullText = "";

            // Buat elemen bubble bot kosong terlebih dahulu
            const div = document.createElement("div");
            div.className = "flex gap-2.5 max-w-[88%] animate-fade-in self-start";
            div.innerHTML = `
                <div class="w-7 h-7 rounded-full bg-[#052753] text-white flex items-center justify-center text-xs shrink-0 shadow-sm mt-0.5 overflow-hidden">
                    <img src="{{ asset('assets/chatbot/avatar.png') }}" class="w-full h-full object-cover" alt="AI">
                </div>
                <div class="msg-bubble-content p-3 px-4 rounded-2xl rounded-tl-xs text-[14px] leading-[20px] break-words bg-white text-[#181d27] shadow-sm border border-[#e9eaeb]">
                </div>
            `;
            chatbotMessages.appendChild(div);
            const contentBox = div.querySelector(".msg-bubble-content");

            // Loop membaca setiap potongan teks yang masuk
            while (true) {
                const { done, value } = await reader.read();
                if (done) break;

                const chunk = decoder.decode(value, { stream: true });
                fullText += chunk;

                // Update teks dan scroll ke bawah secara otomatis
                contentBox.innerHTML = formatBotResponse(fullText);
                scrollToBottom();
            }
        }

    } catch (error) {
        console.error("Fetch error:", error);
        removeElement(typingId);
        appendErrorMessage("<b>Gagal Menghubungi Server:</b> Silakan periksa koneksi internet Anda.");
    } finally {
        isWaitingResponse = false;
        chatbotSendBtn.disabled = false;
        scrollToBottom();
        chatbotUserInput.focus();
    }
};


        // Voice Input (Web Speech API)
        window.toggleVoiceInput = function() {
            if (!('webkitSpeechRecognition' in window) && !('SpeechRecognition' in window)) {
                alert("Fitur pengenalan suara tidak didukung di browser ini.");
                return;
            }

            if (isRecording) {
                stopVoiceInput();
            } else {
                startVoiceInput();
            }
        };

        function startVoiceInput() {
            const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
            recognition = new SpeechRecognition();
            recognition.lang = 'id-ID';
            recognition.interimResults = false;

            recognition.onstart = function() {
                isRecording = true;
                if (chatbotMicPulse) chatbotMicPulse.classList.remove("hidden");
                chatbotUserInput.placeholder = "Mendengarkan suara...";
            };

            recognition.onresult = function(event) {
                const transcript = event.results[0][0].transcript;
                chatbotUserInput.value = transcript;
                stopVoiceInput();
                window.sendChatbotMessage();
            };

            recognition.onerror = function() {
                stopVoiceInput();
            };

            recognition.onend = function() {
                stopVoiceInput();
            };

            recognition.start();
        }

        function stopVoiceInput() {
            isRecording = false;
            if (recognition) {
                try { recognition.stop(); } catch(e) {}
            }
            if (chatbotMicPulse) chatbotMicPulse.classList.add("hidden");
            chatbotUserInput.placeholder = "Tanya apa saja!";
        }

        // DOM Helper Append User Message
        function appendUserMessage(text) {
            const div = document.createElement("div");
            div.className = "flex gap-2.5 max-w-[85%] animate-fade-in self-end justify-end";
            div.innerHTML = `
                <div class="p-3 px-4 rounded-[20px] text-[14px] leading-[20px] break-words bg-[#0c61cf] text-white shadow-sm">
                    ${escapeHtml(text)}
                </div>
            `;
            chatbotMessages.appendChild(div);
        }

        // DOM Helper Append Bot Message
        function appendBotMessage(htmlContent) {
            const div = document.createElement("div");
            div.className = "flex gap-2.5 max-w-[88%] animate-fade-in self-start";
            div.innerHTML = `
                <div class="w-7 h-7 rounded-full bg-[#052753] text-white flex items-center justify-center text-xs shrink-0 shadow-sm mt-0.5 overflow-hidden">
                    <img src="{{ asset('assets/chatbot/avatar.png') }}" class="w-full h-full object-cover" alt="AI">
                </div>
                <div class="p-3 px-4 rounded-2xl rounded-tl-xs text-[14px] leading-[20px] break-words bg-white text-[#181d27] shadow-sm border border-[#e9eaeb]">
                    ${htmlContent}
                </div>
            `;
            chatbotMessages.appendChild(div);
        }

        // DOM Helper Append Error Message
        function appendErrorMessage(htmlContent) {
            const div = document.createElement("div");
            div.className = "flex gap-2.5 max-w-[88%] animate-fade-in self-start";
            div.innerHTML = `
                <div class="w-7 h-7 rounded-full bg-red-600 text-white flex items-center justify-center text-xs shrink-0 shadow-sm mt-0.5">⚠️</div>
                <div class="p-3 px-4 rounded-2xl rounded-tl-xs text-[14px] leading-[20px] break-words bg-red-50 text-red-700 shadow-sm border border-red-200">
                    ${htmlContent}
                </div>
            `;
            chatbotMessages.appendChild(div);
        }

        // DOM Helper Append Typing Indicator
        function appendTypingIndicator(id) {
            const div = document.createElement("div");
            div.id = id;
            div.className = "flex gap-2.5 max-w-[88%] animate-fade-in self-start";
            div.innerHTML = `
                <div class="w-7 h-7 rounded-full bg-[#052753] text-white flex items-center justify-center text-xs shrink-0 shadow-sm mt-0.5 overflow-hidden">
                    <img src="{{ asset('assets/chatbot/avatar.png') }}" class="w-full h-full object-cover" alt="AI">
                </div>
                <div class="flex gap-1.5 p-3 px-4 bg-white border border-[#e9eaeb] rounded-2xl rounded-tl-xs shadow-sm items-center">
                    <div class="w-1.5 h-1.5 bg-[#0c61cf] rounded-full animate-bounce [animation-delay:-0.32s]"></div>
                    <div class="w-1.5 h-1.5 bg-[#0c61cf] rounded-full animate-bounce [animation-delay:-0.16s]"></div>
                    <div class="w-1.5 h-1.5 bg-[#0c61cf] rounded-full animate-bounce"></div>
                </div>
            `;
            chatbotMessages.appendChild(div);
        }

        function removeElement(id) {
            const el = document.getElementById(id);
            if (el) el.remove();
        }

        function scrollToBottom() {
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        }

        function escapeHtml(text) {
            const p = document.createElement("p");
            p.textContent = text;
            return p.innerHTML;
        }

        function formatBotResponse(text) {
            if (!text) return "";
            let formatted = text.replace(/\*\*(.*?)\*\*/g, '<b>$1</b>');
            formatted = formatted.replace(/\*(.*?)\*/g, '<i>$1</i>');
            formatted = formatted.replace(/\n/g, '<br>');
            
            // If response contains quotes or tips, wrap in border highlight accent
            if (formatted.includes("&gt;") || formatted.includes(">")) {
                formatted = formatted.replace(/(?:^|<br>)(?:&gt;|>)\s*(.*?)(?=<br>|$)/g, '<div class="border-l-2 border-[#d5d7da] pl-3 my-1.5 text-slate-700 font-medium">$1</div>');
            }
            return formatted;
        }

        // Keydown listener for Enter key
        chatbotUserInput.addEventListener("keydown", function(e) {
            if (e.key === "Enter" && !isWaitingResponse) {
                e.preventDefault();
                sendChatbotMessage();
            }
        });
    })();
</script>
