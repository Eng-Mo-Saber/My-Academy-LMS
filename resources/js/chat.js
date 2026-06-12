document.addEventListener('DOMContentLoaded', function() {
    const chatForm = document.getElementById('chatForm');
    const chatInput = document.getElementById('chatInput');
    const chatMessages = document.getElementById('chatMessages');
    const typingIndicator = document.getElementById('typingIndicator');

    if (chatForm && chatInput && chatMessages) {
        chatForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const message = chatInput.value.trim();
            if (message === '') return;

            // Append sent message
            appendMessage(message, 'sent');
            chatInput.value = '';
            
            // Scroll to bottom
            scrollToBottom();

            // Simulate typing and reply
            typingIndicator.classList.remove('d-none');
            setTimeout(() => {
                typingIndicator.classList.add('d-none');
                appendMessage('هذه رسالة تلقائية للرد عليك.', 'received');
                scrollToBottom();
            }, 1500);
        });
    }

    function appendMessage(text, type) {
        const msgDiv = document.createElement('div');
        msgDiv.className = `message ${type}`;
        msgDiv.textContent = text;
        chatMessages.appendChild(msgDiv);
    }

    function scrollToBottom() {
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
});