

//  sélectionne l’élément dans lequel le dialogue va apparaitre
//  ainsi que le formulaire et le champ de texte
const conversation = document.querySelector('main');
const form = document.querySelector('form');
const input = document.querySelector('input');


// crée le HTML, l’injecte dans la conversation
function createMessage(message, author, delay = 0){
  // créée le HTML d’un message
  const m = document.createElement('div');
  m.className = author.toLowerCase() + " message";
  m.innerHTML = `<p><strong>${message}</strong></p><span>${author}</span>`;

  // attend “delay” pour afficher la réponse
  setTimeout(() => {
    // ajoute le message à la conversation
    conversation.appendChild(m);
    // si on attend une réponse du bot
    if(author == "Bot") {
      // on calcule un délai de réponse, en fonction de la longueur du message
      const typing_delay = message.length * 25 + 800;
      m.classList.add('typing');
      // au bout de ce délai, on affiche la réponse
      setTimeout(() => {
        m.classList.remove('typing');
        m.scrollIntoView({ behavior: 'smooth'});
      }, typing_delay);
    } 
    // scrolle jusqu’au message
    m.scrollIntoView({ behavior: 'smooth'});    
  }, delay);  
}

//  initilisation (premières phrases)
createMessage("Bonjour !", "Bot", 0);
createMessage("Ravi que vous soyez là.", "Bot", 2000);
createMessage("Mon nom est Bot. Quel est le vôtre ?", "Bot", 4000);
setTimeout(() => {
  form.classList.add('visible');
  input.focus()
}, 7000);



// formulaire

let yourname = "";

// Add event listener to input form
form.addEventListener('submit', function(event) {
   // Prevent form submission
   event.preventDefault();
   // récupère le contenu du message
   const message = input.value;
 
   // si c’est la première question (Quel est votre nom ?)
   if(yourname == ""){
     yourname = message;
      // Add “your” message to conversation
     createMessage(message, yourname);
     // clear input value
     input.value = "";
     createMessage(`Bonjour ${yourname}, comment puis-je vous aider ?`, "Bot");
     // arrête l’exécution de la fonction
     return;
   }
   
   // Sinon, ajoute le message à la conversation
   createMessage(message, yourname);
   // vide l’input
   input.value = "";
 
   // Génère la réponse du chatbot  
   const response = generateResponse(message.toLowerCase());
   createMessage(response, "Bot", 500);
});



// réponses du chatbot
const responses = [
  "Bonjour, comment puis-je vous aider aujourd’hui ? 😊",
  "Je suis désolé, je n’ai pas compris votre question. Pourriez-vous la reformuler ? 😕",
  "Je suis ici pour vous aider à répondre à vos questions ou à vos préoccupations. 📩",
  "Je suis désolé, je ne suis pas en mesure de naviguer sur l’internet ou d’accéder à des informations externes. Puis-je vous aider à faire autre chose ? 💻",
  "Que souhaitez-vous savoir ? 🤔",
  "Je suis ici pour vous aider à résoudre vos questions ou vos problèmes. Comment puis-je vous aider aujourd’hui ? 🚀",
  "Y a-t-il quelque chose de particulier dont vous aimeriez parler ? 💬",
  "Je suis heureux de répondre à vos questions ou à vos préoccupations. Faites-moi savoir comment je peux vous aider 😊",
  "Je suis ici pour vous aider à résoudre les questions ou les problèmes que vous pourriez avoir. Que puis-je faire pour vous aujourd’hui ? 🤗",
  "Y a-t-il quelque chose de particulier que vous aimeriez demander ou dont vous aimeriez parler ? Je suis là pour répondre à toutes vos questions ou préoccupations. 💬",
  "Je suis ici pour vous aider à résoudre les questions ou les problèmes que vous pourriez avoir. Comment puis-je vous aider aujourd’hui ? 💡",
];

// Generate chatbot response function
function generateResponse(message) {
  // Add chatbot logic here
  
  if(message == "ok" || message == "oui"  ) {
    return "Super";
  }

  var hellos = ["bonjour", "hi", "salut", "hello", "coucou"];
  if(hellos.includes(message)){
    return "Coucou";
  }

  var byebyes = ["au revoir", "bye", "ciao"];
  if(byebyes.includes(message)){
    return "Au revoir";
  }

  var insults = ["fuck", "connard", "merde", "darmanin"];
  if(insults.includes(message)){
    return "Je suis désolé, mais je ne suis pas programmé pour gérer un langage offensant ou inapproprié. Veuillez vous abstenir d'utiliser ce type de langage dans notre conversation. 🚫"
  }
  
  // Else, return a random response
  return responses[Math.floor(Math.random() * responses.length)];
  
}

  