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

    chatBox.innerHTML = '<div class="message bot">Chat ended.</div>';

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

    appendMessage('user', message);

    messageBox.value = '';

    const response = await fetch('/chat/send', { method: 'POST', headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': getCsrfToken() }, body: JSON.stringify({ message: message }) });

    const data = await response.json();

    if (Array.isArray(data.response)) {
        appendManyMessage('bot', data.response, data.history);

    } else {
        appendMessage('bot', data.response, data.history.at(-1).isButton);

    }
}

function appendMessage(sender, text, isButton) {
    const div = document.createElement('div');

    div.classList.add('message', sender);

    if (sender === 'bot' && isButton === false) {
        div.innerHTML = text;

    } else if (sender === 'bot' && isButton === true) {

        div.innerHTML = '';

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

function handleEnter(e) {
    if (e.key === 'Enter') sendMessage(false, '');
}

function messageClick(text) {

    sendMessage(true, text)

}


toggleChatActive(false);