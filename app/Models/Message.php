<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'role',      // 'user' or 'bot'
        'content',
    ];

    /**
     * Get the chat that this message belongs to.
     */
    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }
}
