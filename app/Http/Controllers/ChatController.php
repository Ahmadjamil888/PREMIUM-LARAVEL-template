<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    /**
     * Display the dashboard with user's chats.
     */
    public function index()
    {
        $user = Auth::user();

        $chats = Chat::where('user_id', $user->id)
                     ->orderByDesc('created_at')
                     ->get();

        $firstChat = $chats->first();
        $messages = $firstChat
            ? Message::where('chat_id', $firstChat->id)->get()
            : collect();

        return view('dashboard', [
            'chats'     => $chats,
            'messages'  => $messages,
            'chat_id'   => $firstChat?->id,
        ]);
    }

    /**
     * Create a new chat session.
     */
    public function newChat(Request $request)
    {
        $chat = Chat::create([
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('chat.view', ['id' => $chat->id]);
    }

    /**
     * View an individual chat session by ID.
     */
    public function view(int $id)
    {
        $userId = Auth::id();

        $chat = Chat::where('id', $id)
                    ->where('user_id', $userId)
                    ->firstOrFail();

        $chats = Chat::where('user_id', $userId)
                     ->orderByDesc('created_at')
                     ->get();

        $messages = Message::where('chat_id', $chat->id)->get();

        return view('dashboard', [
            'chats'     => $chats,
            'messages'  => $messages,
            'chat_id'   => $chat->id,
        ]);
    }

    /**
     * Send user message and process Gemini API response.
     */
    public function send(Request $request, int $id)
    {
        $request->validate([
            'prompt' => 'required|string',
        ]);

        $userId = Auth::id();

        $chat = Chat::where('id', $id)
                    ->where('user_id', $userId)
                    ->firstOrFail();

        // Save user message
        Message::create([
            'chat_id' => $chat->id,
            'role'    => 'user',
            'content' => $request->input('prompt'),
        ]);

        $responseText = 'No response from Gemini.';
        $apiKey = env('GEMINI_API_KEY');

        try {
            $response = Http::timeout(15)->post(
                "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key={$apiKey}",
                [
                    'contents' => [[
                        'parts' => [[ 'text' => $request->input('prompt') ]]
                    ]]
                ]
            );

            if ($response->successful()) {
                $json = $response->json();
                $responseText = $json['candidates'][0]['content']['parts'][0]['text']
                                ?? 'Empty Gemini response.';
            } else {
                $responseText = 'Gemini error: ' . $response->body();
            }

        } catch (\Throwable $e) {
            $responseText = 'Gemini request failed: ' . $e->getMessage();
        }

        // Save Gemini response
        Message::create([
            'chat_id' => $chat->id,
            'role'    => 'bot',
            'content' => $responseText,
        ]);

        return redirect()->route('chat.view', ['id' => $chat->id]);
    }
}
