<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/chat_style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Naturale Chatbot</title>
</head>
<body>

@include('components/nav_bar_customer')
<div class="chat-container">
    <div class="chat-header">
        <span>Naturale Support</span>
        <button id="end-chat-btn" class="btn-sm" onclick="endChat()">End Chat</button>
    </div>
    
    <div id="chat-box" class="chat-box">
        <div class="message bot">
            <p>Welcome to Naturale Support!</p>
            <p>Our Virtual Assistant is here to help you answer your questions and guide you through our services.</p>
            <p>Click "Start Chat" to begin.</p>
        </div>
    </div>

    <div class="chat-input-area">
        <input type="text" id="user-input" placeholder="Type a message..." disabled onkeypress="handleEnter(event)">
        <button id="send-btn" onclick="sendMessage(false, '')" disabled>Send</button>
        <button id="start-btn" onclick="startChat()" style="display: none;">Start Chat</button>
    </div>
</div>

    <footer>
    @include('components/footer')
    </footer>

</body>

<script type="text/javascript" src="{{asset('js/chatbot.js') }}"></script>

</html>