<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chatbot Example</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('admin/images/cb001.jpg'); /* Replace 'admin/images/cb02.jpg' with your image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  #chat-container {
    width: 400px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  #chat-box {
    max-height: 300px;
    overflow-y: auto;
    padding: 20px;
    background-image: url('admin/images/cb02.jpg');
    background-size: cover;
    background-position: center;
}

  .message {
    margin-bottom: 15px;
    padding: 10px;
    border-radius: 8px;
  }

  .message.user {
    background-color: #f5deb3; /* Skin color */
    color: #333; /* Text color */
    align-self: flex-end;
  }

  .message.bot {
    background-color: #f1f1f1;
    color: #333;
    align-self: flex-start;
  }

  .message-icon {
    width: 20px;
    height: 20px;
    margin-right: 10px;
    vertical-align: middle;
  }

  #user-input {
    width: calc(100% - 80px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 20px;
    margin: 20px 10px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  #send-button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    width: 100%; /* Make button width 100% */
    margin: 0 auto; /* Center the button */
  }

  #send-button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
<div id="chat-container">
  <div id="chat-box">
    <!-- Initial message from Gojo Chatbot -->
    
  </div>
  <input type="text" id="user-input" placeholder="Type your message...">
  <button id="send-button" onclick="sendMessage()">Send</button>
</div>

<script>
// Define predefined questions and their corresponding responses
var predefinedResponses = {
    "Hi": "Hello! How can I help you today?",
    "Hello": "Hello! How can I help you today?",
    "How can I order a customised design?": "You can order a customised design by logging in to the website, going to the Customise page and filling up your details and requirements for your desired design.",
    "How long will it take to get a customised design?": "Opulent Spaces ensures a swift and seamless user experience to the customers. You can expect to see a draft of your required design on the Customise page once you login, within 1-2 days.",
    "What are the payment methods available?": "The Opulent Spaces site provides the Cash On Delivery payment option only.",
    "How can I contact the designers?": "You can find the contact info of the designers on the About Us page of our website. Also available on that page is the link to our Instagram page, through which we can be contacted as well.",
    "What can you do?": "I can assist you with interior design queries and answer general questions about our services.",
    "How do I get started?": "To get started, simply browse through our website to explore various interior design categories or contact our support team for assistance.",
    "Can you help me with something?": "Sure! What can I help you with?"
};

// Initialize chat
function initChat() {
    // Display initial message from Gojo Chatbot only once
    var chatBox = document.getElementById("chat-box");
    chatBox.innerHTML += "<div class='message bot'><img src='admin/images/r.jpg' class='message-icon'>Gojo Chatbot: Hi, I'm Gojo Chatbot. How can I help you?</div>";
}

// Send user message
function sendMessage() {
    var userInput = document.getElementById("user-input").value;
    var chatBox = document.getElementById("chat-box");

    if (userInput.trim() === "") {
        return;
    }

    // Display user message
    chatBox.innerHTML += "<div class='message user'><img src='admin/images/hooman.jpg' class='message-icon'>You: " + userInput + "</div>";

    // Check if predefined question asked
    if (predefinedResponses.hasOwnProperty(userInput)) {
        // Display predefined response
        chatBox.innerHTML += "<div class='message bot'><img src='admin/images/r.jpg' class='message-icon'>Gojo Chatbot: " + predefinedResponses[userInput] + "</div>";
    } else {
        // Display generic response
        chatBox.innerHTML += "<div class='message bot'><img src='admin/images/r.jpg' class='message-icon'>Gojo Chatbot: I'm sorry, I don't understand. Can you please rephrase?</div>";
    }

    // Clear input field
    document.getElementById("user-input").value = "";

    // Scroll to bottom of chat box
    chatBox.scrollTop = chatBox.scrollHeight;
}

// Initialize chat when the page loads
window.onload = function() {
    initChat();
};
</script>
</body>
</html>
