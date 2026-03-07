const chatBox = document.getElementById('chat-box');
const messageBox = document.getElementById('user-input');
const sendMessageButton = document.getElementById('send-btn');
const endChatButton = document.getElementById('end-chat-btn');
const startButton = document.getElementById('start-btn');

const getCsrfToken = () => document.querySelector('meta[name="csrf-token"]').getAttribute('content');

async function startChat() {
    const response = await fetch('/chat/start', { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': getCsrfToken() } });

    const data = await response.json();

    renderHistory(data.history);

    toggleChatActive(true);

}

async function endChat() {
    await fetch('/chat/end', { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': getCsrfToken() } });

    chatBox.innerHTML = '<div class="message assistant">Chat ended.</div>';

    toggleChatActive(false);

}

async function sendMessage(fromClick, clickValue) {

    let message = '';

    if (!fromClick) {
        message = messageBox.value;

    } else {
        message = clickValue;

    }

    if (!message.trim()) return; //dont send message if no input

    appendMessage('user', message, false);

    const loadingDiv = loadingMessage();

    messageBox.value = '';

    let href_array = (window.location.href).split("/")

    let pid = null

    if (Number.isInteger(href_array.at(-1))) {

        pid = parseInt(href_array.at(-1));

    }

    const response = await fetch('/chat/send', { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': getCsrfToken() }, body: JSON.stringify({ message: message, pid: pid }) });

    const data = await response.json();

    loadingDiv.remove();

    if (Array.isArray(data.response)) {
        appendManyMessage('assistant', data.response, data.history);

    } else {
        appendMessage('assistant', data.response, data.history.at(-1).isButton);

    }
}

function loadingMessage() {

    const div = document.createElement('div');

    div.classList.add('message', 'assistant', 'flex', 'space-x-1');

    div.innerHTML = `
    <span class="typing-dot"></span>
    <span class="typing-dot"></span>
    <span class="typing-dot"></span>
    `;

    chatBox.appendChild(div);

    chatBox.scrollTop = chatBox.scrollHeight;

    return div
}


function appendMessage(sender, text, isButton) {
    const div = document.createElement('div');

    div.classList.add('message', sender);

    if (sender === 'assistant' && isButton === false) {
        div.innerHTML = text;

    } else if (sender === 'assistant' && isButton === true) {

        div.innerHTML = ``;

        const button = document.createElement('button');
        button.textContent = `${text}`;

        button.addEventListener('click', () => {
            messageClick(text);
        });

        div.appendChild(button);

    } else {
        div.textContent = text;;

    }

    chatBox.appendChild(div);

    chatBox.scrollTop = chatBox.scrollHeight;

}

function appendManyMessage(sender, textArray, history) {
    const newItemsCount = textArray.length;

    for (let i = 0; i < newItemsCount; i++) {
        const historyIndex = -newItemsCount + i;
        const historyItem = history.at(historyIndex);

        const isButton = historyItem ? historyItem.isButton : false;

        console.log(isButton)

        appendMessage(sender, textArray[i], isButton);
    }

}

function renderHistory(history) {
    chatBox.innerHTML = '';

    if (!history) return;

    history.forEach(msg => appendMessage(msg.sender, msg.text, msg.isButton));

}

function toggleChatActive(isActive) {
    messageBox.disabled = !isActive;
    sendMessageButton.disabled = !isActive;
    endChatButton.style.display = isActive ? 'block' : 'none';

    if (!isActive) {
        sendMessageButton.style.display = 'none';

        messageBox.style.display = 'none';


        startButton.style.display = 'block';

        startButton.disabled = false;


    } else {
        sendMessageButton.style.display = 'block';

        messageBox.style.display = 'block';


        startButton.style.display = 'none';

        startButton.disabled = true;

    }

}

async function setupChat() {

    const response = await fetch('/chat/status', { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': getCsrfToken() } });

    const data = await response.json();

    if (data.started === true) {

        renderHistory(data.history);

        toggleChatActive(true);

    } else {
    
        toggleChatActive(false);

    }

}

function handleEnter(e) {
    if (e.key === 'Enter') sendMessage(false, '');
}

function messageClick(text) {

    sendMessage(true, text)

}

setupChat();
