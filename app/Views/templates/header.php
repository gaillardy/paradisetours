<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $metaDescription ?? 'Default description' ?>">
    <meta name="keywords" content="<?= $metaKeywords ?? 'tourism, travel' ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?> - Nosy be Paradise Tours</title>
        <link rel="icon" href="/assets/images/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/animate.css">
        
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/assets/css/magnific-popup.css">

        <link rel="stylesheet" href="/assets/css/aos.css">

        <link rel="stylesheet" href="/assets/css/ionicons.min.css">

        <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="/assets/css/jquery.timepicker.css">

        
        <link rel="stylesheet" href="/assets/css/flaticon.css">
        <link rel="stylesheet" href="/assets/css/icomoon.css">

        <link rel="stylesheet" href="/assets/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="/assets/css/fontawesome-all.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.3.11/tiny-slider.css'>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/app.css">
        <link rel="stylesheet" href="/assets/styles/app.css">
        <link rel="stylesheet" href="/assets/css/slider.css">

        <!-- Bootstrap CSS -->
        <!-- Animation on Scroll CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
        <!-- Font Awesome for icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">  
</head>
<body>
<!-- Piwik pro -->
<script>
  (function(window, document, dataLayerName, id) {
  window[dataLayerName]=window[dataLayerName]||[],window[dataLayerName].push({start:(new Date).getTime(),event:"stg.start"});var scripts=document.getElementsByTagName('script')[0],tags=document.createElement('script');
  function stgCreateCookie(a,b,c){var d="";if(c){var e=new Date;e.setTime(e.getTime()+24*c*60*60*1e3),d="; expires="+e.toUTCString();f="; SameSite=Strict"}document.cookie=a+"="+b+d+f+"; path=/"}
  var isStgDebug=(window.location.href.match("stg_debug")||document.cookie.match("stg_debug"))&&!window.location.href.match("stg_disable_debug");stgCreateCookie("stg_debug",isStgDebug?1:"",isStgDebug?14:-1);
  var qP=[];dataLayerName!=="dataLayer"&&qP.push("data_layer_name="+dataLayerName),isStgDebug&&qP.push("stg_debug");var qPString=qP.length>0?("?"+qP.join("&")):"";
  tags.async=!0,tags.src="https://nosybeparadisetours.containers.piwik.pro/"+id+".js"+qPString,scripts.parentNode.insertBefore(tags,scripts);
  !function(a,n,i){a[n]=a[n]||{};for(var c=0;c<i.length;c++)!function(i){a[n][i]=a[n][i]||{},a[n][i].api=a[n][i].api||function(){var a=[].slice.call(arguments,0);"string"==typeof a[0]&&window[dataLayerName].push({event:n+"."+i+":"+a[0],parameters:[].slice.call(arguments,1)})}}(i[c])}(window,"ppms",["tm","cm"]);
  })(window, document, 'dataLayer', '2454a6df-b536-46a7-b3a6-b1c5de0d5495');
</script>
<script type="importmap">
  {
    "imports": {
      "@google/generative-ai": "https://esm.run/@google/generative-ai"
    }
  }
</script>


<?php include 'includes/nav.php' ?>

<!-- Social network  -->
<div class="cta-button">
    <div class="main-btn">
      <i class="icon-message"></i>
    </div>
    <div class="social-icons">
      <a href="https://www.facebook.com/NosybeParadiseTours/" target="_blank" class="social-icon facebook">
        <i class="icon-facebook"></i>
      </a>
      <a href="https://www.youtube.com/results?search_query=nosy+be+paradise+tours" target="_blank" class="social-icon youtube">
        <i class="icon-youtube"></i>
      </a>
      <a href="https://mg.linkedin.com/in/nosy-be-paradise-tours-1bb9088b" target="_blank" class="social-icon linkedin">
        <i class="icon-linkedin"></i>
      </a>
      <a href="https://twitter.com/7paradisetours" target="_blank" class="social-icon twitter">
        <i class="icon-twitter"></i>
      </a>
      <a href="tel:+261320712758" class="social-icon whatsapp">
        <i class="icon-whatsapp"></i>
      </a>
      <a href="https://https//www.google.com/maps/contrib/112713821230749887112/photos/@-13.3996565,48.2711495,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1" target="_blank" class="social-icon google">
        <i class="icon-google-plus"></i>
      </a>
      <a href="javascript:avoid(0)"  class="social-icon chatbot" id="chatbot-toggle">
        <i class="icon-chat"></i>
      </a>
      <div id="chatbot-container" class="hidden">
        <button id="scroll-down-btn" class="scroll-down-btn hidden">
          <i class="fa fa-chevron-down"></i>
        </button>

        <div id="chatbot-box">
            <div class="chatbot-header">
                <h4 style="color: #fff;">NBPT Assistant</h4>
                <button id="close-chatbot" class="close-btn">&times;</button>
            </div>
            <div id="chatbot-messages" class="chatbot-messages">
              <div class="message welcome-message">
                Bonjour 👋 ! Comment puis-je vous aider aujourd'hui ?
              </div>
            </div>
            <div class="chatbot-input-container">
              <textarea id="chatbot-input" placeholder="Écrivez votre message..."></textarea>
              <button id="send-chatbot" class="btn-send">
              <i class="fa fa-paper-plane"></i>
              </button>
            </div>
        </div>
      </div>
    </div>
</div>
<!-- Social network -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script src="/assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap and AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
    document.addEventListener('DOMContentLoaded', () => {
      const mainBtn = document.querySelector('.main-btn');
      const ctaButton = document.querySelector('.cta-button');
      const close = document.querySelector('.icon-message');
    
      mainBtn.addEventListener('click', () => {
        ctaButton.classList.toggle('active');
        close.classList.toggle('icon-close');
        close.classList.toggle('icon-message');
      });
    });

    // Message flash

    document.addEventListener('DOMContentLoaded', () => {
        const flashMessages = document.querySelectorAll('.flash-message');

        flashMessages.forEach(message => {
            setTimeout(() => {
                message.style.opacity = 0;
                setTimeout(() => {
                    message.remove();
                }, 1000); // Retire le message après l'animation
            }, 3000); // Le message disparaît après 3 secondes
        });
    });

    document.addEventListener('DOMContentLoaded', async () => {
    const chatbotContainer = document.getElementById('chatbot-container');
    const chatbotToggleButton = document.getElementById('chatbot-toggle');
    const closeChatbotButton = document.getElementById('close-chatbot');

    // Afficher/Masquer le chatbot avec des transitions
    chatbotToggleButton.addEventListener('click', () => {
        if (chatbotContainer.classList.contains('hidden')) {
            chatbotContainer.classList.remove('hidden');
            setTimeout(() => {
                chatbotContainer.classList.add('show');
            }, 10);
        } else {
            chatbotContainer.classList.remove('show');
            setTimeout(() => {
                chatbotContainer.classList.add('hidden');
            }, 300);
        }
    });

    // Fermer le chatbot
    closeChatbotButton.addEventListener('click', () => {
        chatbotContainer.classList.remove('show');
        setTimeout(() => {
            chatbotContainer.classList.add('hidden');
        }, 300);
    });




      
});
</script>
<script type="module" >
import { GoogleGenerativeAI } from "@google/generative-ai";

const API_KEY = "AIzaSyBtsM3yGtYBGETelfdANsspMzC-CauJb5s"; // Remplacez par votre clé API
const genAI = new GoogleGenerativeAI(API_KEY);

document.addEventListener("DOMContentLoaded", async () => {
    const chatbotContainer = document.getElementById("chatbot-container");
    const closeChatbotBtn = document.getElementById("close-chatbot");
    const chatbotMessages = document.getElementById("chatbot-messages");
    const chatbotInput = document.getElementById("chatbot-input");
    const sendChatbotBtn = document.getElementById("send-chatbot");

    

    let chatHistory = JSON.parse(localStorage.getItem("chatHistory")) || [];
    const model = genAI.getGenerativeModel({ model: "gemini-1.5-flash" });

    const updateChat = (message, sender) => {
        const messageDiv = document.createElement("div");
        messageDiv.classList.add("message", sender);
        messageDiv.textContent = message;
        chatbotMessages.appendChild(messageDiv);
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
    };

    const saveToLocalStorage = () => {
        localStorage.setItem("chatHistory", JSON.stringify(chatHistory));
    };

    const loadChatHistory = () => {
        chatHistory.forEach((item) => {
            updateChat(item.message, item.sender);
        });
    };

    const sendMessage = async (message) => {
        chatHistory.push({ message, sender: "user" });
        updateChat(message, "user");
        saveToLocalStorage();

        try {
            const chat = model.startChat({
                history: chatHistory.map((item) => ({
                    role: item.sender === "user" ? "user" : "model",
                    parts: [{ text: item.message }],
                })),
                generationConfig: {
                    maxOutputTokens: 4000,
                },
            });

            const result = await chat.sendMessage(message);
            const response = await result.response.text();
            chatHistory.push({ message: response, sender: "model" });
            updateChat(response, "model");
            saveToLocalStorage();
        } catch (error) {
            updateChat(
                "Désolé, une erreur s'est produite. Veuillez réessayer plus tard.",
                "model"
            );
        }
    };

    sendChatbotBtn.addEventListener("click", () => {
        const message = chatbotInput.value.trim();
        if (message) {
            chatbotInput.value = "";
            sendMessage(message);
        }
    });

    chatbotInput.addEventListener("keypress", (e) => {
        if (e.key === "Enter" && !e.shiftKey) {
            e.preventDefault();
            sendChatbotBtn.click();
        }
    });

    closeChatbotBtn.addEventListener("click", () => {
        chatbotContainer.classList.add("hidden");
    });

    loadChatHistory();
});
</script>
</body>
</html>