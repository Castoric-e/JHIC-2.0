<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'is_read',
        'admin_notes',
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];

    /**
     * Scope pesan yang belum dibaca.
     */
    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    /**
     * Scope pesan yang sudah dibaca.
     */
    public function scopeRead($query)
    {
        return $query->where('is_read', true);
    }

    /**
     * Bersihkan nomor telepon menjadi format internasional untuk WhatsApp (62xxx).
     */
    public function getCleanPhoneAttribute(): string
    {
        $phone = preg_replace('/[^0-9]/', '', (string)$this->phone);
        if (str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        } elseif (str_starts_with($phone, '8')) {
            $phone = '62' . $phone;
        }
        return $phone;
    }

    /**
     * Dapatkan URL WhatsApp direct chat lengkap dengan salam pembuka.
     */
    public function getWhatsappUrlAttribute(): string
    {
        $text = "Halo Bapak/Ibu {$this->name}, terima kasih telah menghubungi IDN Boarding School mengenai \"{$this->subject}\". Ada yang bisa kami bantu?";
        return 'https://wa.me/' . $this->clean_phone . '?text=' . rawurlencode($text);
    }
}
