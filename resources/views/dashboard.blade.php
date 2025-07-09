<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8" />
  <meta name="theme-color" content="#000000" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard | AI chatbot template</title>
  <style>
    /* Professional Black & White Theme */
    * {
      box-sizing: border-box;
    }
    
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', sans-serif;
      background-color: #ffffff;
      color: #000000;
      line-height: 1.5;
    }
    
    .app-container {
      display: flex;
      height: 100vh;
    }
    
    .sidebar {
      width: 280px;
      background: #000000;
      color: #ffffff;
      overflow-y: auto;
      padding: 0;
      border-right: 1px solid #333333;
    }
    
    .sidebar-header {
      padding: 24px 20px;
      border-bottom: 1px solid #333333;
      background: #000000;
    }
    
    .sidebar-header h1 {
      margin: 0 0 16px 0;
      font-size: 18px;
      font-weight: 600;
      letter-spacing: -0.025em;
    }
    
    .new-chat-btn {
      width: 100%;
      padding: 12px 16px;
      background: #ffffff;
      color: #000000;
      border: 1px solid #ffffff;
      border-radius: 4px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.15s ease;
    }
    
    .new-chat-btn:hover {
      background: #f5f5f5;
      border-color: #f5f5f5;
    }
    
    .new-chat-btn:active {
      transform: translateY(1px);
    }
    
    .chat-list {
      padding: 12px 0;
    }
    
    .chat-item {
      padding: 16px 20px;
      border-bottom: 1px solid #1a1a1a;
      cursor: pointer;
      transition: background-color 0.15s ease;
    }
    
    .chat-item:hover {
      background: #1a1a1a;
    }
    
    .chat-item.active {
      background: #1a1a1a;
      border-left: 3px solid #ffffff;
    }
    
    .chat-id {
      font-size: 13px;
      font-weight: 500;
      margin-bottom: 4px;
      color: #ffffff;
    }
    
    .chat-time {
      font-size: 12px;
      color: #999999;
      margin-bottom: 12px;
    }
    
    .chat-actions {
      display: flex;
      gap: 8px;
    }
    
    .btn-small {
      padding: 6px 12px;
      font-size: 12px;
      font-weight: 500;
      border: 1px solid;
      border-radius: 3px;
      cursor: pointer;
      transition: all 0.15s ease;
      text-decoration: none;
      display: inline-block;
      text-align: center;
    }
    
    .btn-primary {
      background: #ffffff;
      color: #000000;
      border-color: #ffffff;
    }
    
    .btn-primary:hover {
      background: #f5f5f5;
      border-color: #f5f5f5;
    }
    
    .btn-small:not(.btn-primary) {
      background: transparent;
      color: #ffffff;
      border-color: #666666;
    }
    
    .btn-small:not(.btn-primary):hover {
      background: #333333;
      border-color: #999999;
    }
    
    .main-content {
      flex: 1;
      display: flex;
      flex-direction: column;
      background: #ffffff;
      overflow: hidden;
    }
    
    .main-header {
      padding: 20px 24px;
      background: #ffffff;
      border-bottom: 1px solid #e0e0e0;
    }
    
    .main-header h2 {
      margin: 0;
      font-size: 20px;
      font-weight: 600;
      color: #000000;
      letter-spacing: -0.025em;
    }
    
    .chat-area {
      flex: 1;
      display: flex;
      flex-direction: column;
      padding: 0;
      overflow: hidden;
    }
    
    .messages-container {
      flex: 1;
      overflow-y: auto;
      padding: 24px;
      display: flex;
      flex-direction: column;
      gap: 16px;
    }
    
    .message {
      padding: 16px 20px;
      border-radius: 8px;
      max-width: 85%;
      border: 1px solid;
      font-size: 14px;
      line-height: 1.6;
    }
    
    .message.user {
      background: #000000;
      color: #ffffff;
      border-color: #000000;
      align-self: flex-end;
    }
    
    .message.assistant {
      background: #ffffff;
      color: #000000;
      border-color: #e0e0e0;
      align-self: flex-start;
    }
    
    .message-input-container {
      border-top: 1px solid #e0e0e0;
      padding: 20px 24px;
      background: #ffffff;
    }
    
    .message-input-form {
      display: flex;
      gap: 12px;
      align-items: flex-end;
    }
    
    .message-input {
      flex: 1;
      padding: 12px 16px;
      border: 1px solid #cccccc;
      border-radius: 6px;
      resize: none;
      font-size: 14px;
      font-family: inherit;
      line-height: 1.4;
      min-height: 44px;
      max-height: 120px;
      background: #ffffff;
      color: #000000;
      transition: border-color 0.15s ease;
    }
    
    .message-input:focus {
      outline: none;
      border-color: #000000;
    }
    
    .send-btn {
      padding: 12px 24px;
      background: #000000;
      color: #ffffff;
      border: 1px solid #000000;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.15s ease;
      height: 44px;
    }
    
    .send-btn:hover {
      background: #333333;
      border-color: #333333;
    }
    
    .send-btn:active {
      transform: translateY(1px);
    }
    
    .empty-state {
      text-align: center;
      margin-top: 80px;
      color: #666666;
    }
    
    .empty-state h3 {
      margin: 0 0 8px 0;
      font-size: 18px;
      font-weight: 600;
      color: #000000;
    }
    
    .empty-state p {
      margin: 0;
      font-size: 14px;
      color: #666666;
    }
    
    /* Scrollbar styling */
    ::-webkit-scrollbar {
      width: 6px;
    }
    
    ::-webkit-scrollbar-track {
      background: transparent;
    }
    
    ::-webkit-scrollbar-thumb {
      background: #cccccc;
      border-radius: 3px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
      background: #999999;
    }
    
    .sidebar ::-webkit-scrollbar-thumb {
      background: #333333;
    }
    
    .sidebar ::-webkit-scrollbar-thumb:hover {
      background: #555555;
    }
  </style>
</head>
<body>
  <div class="app-container">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="sidebar-header">
        <h1>AI chatbot</h1>
        <form method="POST" action="{{ route('chat.new') }}">
          @csrf
          <button type="submit" class="new-chat-btn">New Chat</button>
        </form>
        
        <div style="margin-top: 16px; display: flex; flex-direction: column; gap: 8px;">
          <a href="{{ route('profile.edit') }}" class="btn-small btn-primary" style="text-align: center;">Profile</a>

          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-small" style="width: 100%;">Logout</button>
          </form>
        </div>
      </div>
      <div class="chat-list">
        @foreach($chats as $c)
          <div class="chat-item {{ $c->id == $chat_id ? 'active' : '' }}" onclick="location='{{ route('chat.view', $c->id) }}'">
            <div class="chat-id">Chat ID: {{ $c->id }}</div>
            <div class="chat-time">{{ $c->created_at->diffForHumans() }}</div>
            <div class="chat-actions">
              <a href="{{ route('chat.view', $c->id) }}" class="btn-small btn-primary">View</a>
              <form method="POST" action="{{ route('chat.send', $c->id) }}">
                @csrf
                <input type="hidden" name="prompt" value="Hello">
                <button type="submit" class="btn-small">Send Hello</button>
              </form>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <!-- Main content -->
    <div class="main-content">
      <div class="main-header">
        <h2>Chat #{{ $chat_id ?? '–' }}</h2>
      </div>
      <div class="chat-area">
        <div class="messages-container" id="messagesContainer">
          @forelse($messages as $m)
            <div class="message {{ $m->role == 'user' ? 'user' : 'assistant' }}">
              {!! nl2br(e($m->content)) !!}
            </div>
          @empty
            <div class="empty-state">
              <h3>No messages yet</h3>
              <p>Start the conversation!</p>
            </div>
          @endforelse
        </div>

        @isset($chat_id)
        <div class="message-input-container">
          <form class="message-input-form" method="POST" action="{{ route('chat.send', $chat_id) }}">
            @csrf
            <textarea name="prompt" id="messageInput" class="message-input" placeholder="Type your message..." rows="1" oninput="autoResize(this)" onkeydown="if(event.key==='Enter'&&!event.shiftKey){event.preventDefault();this.form.submit();}"></textarea>
            <button type="submit" class="send-btn">Send</button>
          </form>
        </div>
        @endisset
      </div>
    </div>
  </div>

  <script>
    function autoResize(t) {
      t.style.height = '44px';
      t.style.height = Math.min(t.scrollHeight, 120) + 'px';
    }
    window.onload = () => document.getElementById('messageInput')?.focus();
  </script>
</body>
</html>