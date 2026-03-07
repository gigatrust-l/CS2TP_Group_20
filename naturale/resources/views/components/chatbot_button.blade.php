<head>

  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
  <button class="chat-toggle" id="chatToggle" aria-label="Open chat">
    <div class="notif-dot"></div>
    <div class="toggle-icon">
      <!-- Chat icon -->
      <div class="icon-chat">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
        </svg>
      </div>
      <!-- X icon -->
      <div class="icon-x">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"
          stroke-linecap="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </div>
    </div>
  </button>

  <div class="chat-panel" id="chatPanel">

    @include('components/chatbot')

  </div>

</body>

<script>
  const toggle = document.getElementById('chatToggle');
  const panel = document.getElementById('chatPanel');

  let isOpen = false;

  toggle.addEventListener('click', () => {
    isOpen = !isOpen;
    toggle.classList.toggle('active', isOpen);
    panel.classList.toggle('open', isOpen);
    toggle.setAttribute('aria-label', isOpen ? 'Close chat' : 'Open chat');
  });

</script>

<style>
  .chat-toggle {
    position: fixed;
    bottom: 32px;
    right: 32px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #1a1a1a;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.22);
    transition: transform 0.2s cubic-bezier(0.34, 1.56, 0.64, 1), background 0.2s;
    z-index: 1000;
    outline: none;
  }

  .chat-panel.open {
    opacity: 1;
    transform: translateY(0) scale(1);
    pointer-events: all;
  }

  .chat-toggle:hover {
    transform: scale(1.08);
    background: #2d2d2d;
  }

  .chat-toggle:active {
    transform: scale(0.95);
  }

  .toggle-icon {
    position: relative;
    width: 24px;
    height: 24px;
  }

  /* Chat bubble icon */
  .icon-chat,
  .icon-x {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.2s, transform 0.25s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .icon-x {
    opacity: 0;
    transform: rotate(-90deg) scale(0.7);
  }

  .chat-toggle.active .icon-chat {
    opacity: 0;
    transform: rotate(90deg) scale(0.7);
  }

  .chat-toggle.active .icon-x {
    opacity: 1;
    transform: rotate(0deg) scale(1);
  }

  .chat-panel {
    position: fixed;
    bottom: 100px;
    right: 32px;
    width: 400px;
    max-height: 520px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 8px 40px rgba(0, 0, 0, 0.12), 0 2px 8px rgba(0, 0, 0, 0.06);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    z-index: 1;

    /* hidden state */
    opacity: 0;
    transform: translateY(16px) scale(0.97);
    pointer-events: none;
    transform-origin: bottom right;
    transition: opacity 0.25s ease, transform 0.25s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
</style>