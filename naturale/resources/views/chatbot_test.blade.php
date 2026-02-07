<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <title>Simple Laravel Chatbot</title>
</head>
<body>

<div class="chat-container">
    <div class="chat-header">
        <span>Naturale Support</span>
        <button id="end-chat-btn" class="btn-sm" onclick="endChat()">End Chat</button>
    </div>

    <hr>
    
    <div id="chat-box" class="chat-box">
        <div class="message bot">Welcome to Naturale Support! Click "Start Chat" to begin.</div>
    </div>

    <hr>

    <div class="chat-input-area">
        <input type="text" id="user-input" placeholder="Type a message..." disabled onkeypress="handleEnter(event)">
        <button id="send-btn" onclick="sendMessage(false, '')" disabled>Send</button>
        <button id="start-btn" onclick="startChat()" style="display: none;">Start Chat</button>
    </div>
</div>
    
</body>

<script type="text/javascript" src="{{asset('js/chatbot.js') }}"></script>

</html>