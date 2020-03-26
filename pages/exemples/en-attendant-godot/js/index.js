
// le code fonctionnel est tout en bas…

var dialogue = [
  ["Estragon", "Qu’est-ce que tu as ?"],
  ["Vladimir", "Je n’ai rien."],
  ["Estragon", "Moi je m’en vais."],
  ["Vladimir", "Moi aussi."],
  ["Beckett", "Silence."],
  ["Estragon", "Il y avait longtemps que je dormais ?"],
  ["Vladimir", "Je ne sais pas."],
  ["Beckett", "Silence."],
  ["Estragon", "Où irons-nous ?"],
  ["Vladimir", "Pas loin."],
  ["Estragon", "Si si, allons-nous-en loin d’ici !"],
  ["Vladimir", "On ne peut pas."],
  ["Estragon", "Pourquoi ?"],
  ["Vladimir", "Il faut revenir demain."],
  ["Estragon", "Pour quoi faire ?"],
  ["Vladimir", "Attendre Godot."],
  ["Estragon", "C’est vrai. <i>(Un temps.)</i> Il n’est pas venu ?"],
  ["Vladimir", "Non."],
  ["Estragon", "Et maintenant il est trop tard."],
  ["Vladimir", "Oui, c’est la nuit."],
  ["Estragon", "Et si on le laissait tomber ? <i>(Un temps.)</i> Si on le laissait tomber ?"],
  ["Vladimir", "Il nous punirait. <i>(Silence. Il regarde l’arbre.)</i> Seul l’arbre vit."],
  ["Estragon", "<i>(regardant l’arbre)</i> Qu’est-ce que c’est ?"],
  ["Vladimir", "C’est l’arbre."],
  ["Estragon", "Non, mais quel genre?"],
  ["Vladimir", "Je ne sais pas. Un saule."],
  ["Estragon", "Viens voir."],
  ["Beckett", "Il entraîne Vladimir vers l’arbre. Ils s’immobilisent devant. Silence." ],
  ["Estragon", "Et si on se pendait ?"],
  ["Vladimir", "Avec quoi ?"],
  ["Estragon", "Tu n’as pas un bout de corde ?"],
  ["Vladimir", "Non."],
  ["Estragon", "Alors on ne peut pas."],
  ["Vladimir", "Allons-nous-en."],
  ["Estragon", "Attends, il y a ma ceinture."],
  ["Vladimir", "C’est trop court."],
  ["Estragon", "Tu tireras sur mes jambes."],
  ["Vladimir", "Et qui tirera sur les miennes ?"],
  ["Estragon", "C’est vrai."],
  ["Vladimir", "Fais voir quand même."],
  ["Beckett", "Estragon dénoue la corde qui maintient son pantalon.Celui-ci, beaucoup trop large, lui tombe autour des chevilles. Ils regardent la corde."],
  ["Vladimir", "À la rigueur ça pourrait aller. Mais est-elle solide ?"],
  ["Estragon", "On va voir. Tiens."],
  ["Beckett", "Ils prennent chacun un bout de la corde et tirent. La corde se casse. Ils manquent de tomber."],
  ["Vladimir", "Elle ne vaut rien."],
  ["Beckett", "Silence."],
  ["Estragon", "Tu dis qu’il faut revenir demain ?"],
  ["Vladimir", "Oui."],
  ["Estragon", "Alors on apportera une bonne corde."],
  ["Vladimir", "C’est ça."],
  ["Beckett", "Silence."],
  ["Estragon", "Midi."],
  ["Vladimir", "Oui."],
  ["Estragon", "Je ne peux plus continuer comme ça."],
  ["Vladimir", "On dit ça."],
  ["Estragon", "Si on se quittait ? Ça irait peut-être mieux."],
  ["Vladimir", "On se pendra demain. <i>(Un temps)</i> À moins que Godot ne vienne."],
  ["Estragon", "Et s’il vient."],
  ["Vladimir", "Nous serons sauvés."],
  ["Beckett", "Vladimir enlève son chapeau - celui de Lucky - regarde dedans, y passe la main, le secoue, le remet."],
  ["Estragon", "Alors on y va ?"],
  ["Vladimir", "Relève ton pantalon."],
  ["Estragon", "Comment ?"],
  ["Vladimir", "Relève ton pantalon."],
  ["Estragon", "Que j’enlève mon pantalon"],
  ["Vladimir", "Relève ton pantalon."],
  ["Estragon", "C’est vrai."],
  ["Beckett", "Il relève son pantalon. Silence."],
  ["Vladimir", "Alors on y va ?"],
  ["Estragon", "Allons-y."],
  ["Beckett", "Ils ne bougent pas."],
  ["à", "suivre"]
]
// source : http://www.regietheatrale.com/index/index/thematiques/auteurs/beckett/samuel-beckett-en-attendant-godot.html

// création d’une variable qui va permettre d’afficher les éléments au fur et à mesure
var index = 0;

// éléments html pour afficher le contenu
const estragon = document.querySelector('#estragon');
const vladimir = document.querySelector('#vladimir');
const beckett = document.querySelector('#beckett');

document.addEventListener('click', displaySentence, false);

function displaySentence(){

  // on sélectionne la phrase à afficher (selon la valeur de index)
  const sentence = dialogue[index]; 

  // on stocke le texte de la phrase (la valeur du deuxième élément : 1)
  var p = "<p>" + sentence[1] + "</p>";

  // selon qui parle (la valeur du premier élément : 0)
  switch(sentence[0]){
    
    case "Estragon":
      estragon.innerHTML = p;
      break;
    case "Vladimir":
      vladimir.innerHTML = p;
      break;
    case "Beckett":
      beckett.innerHTML = p;
      // si c’est Beckett (didascalie), on vide les textes et on continue
      // au bout d’une durée calculée –approximativement– selon la logueur de la phrase
      var delay = p.length * 30 + 800;
      setTimeout(function(){
        estragon.innerHTML = "";
        vladimir.innerHTML = "";
        beckett.innerHTML = "";
        displaySentence
      }, delay);
      break;

  }
  // enfin on augmente de 1 la valeur de index, afin de passer à la phrase suivante
  index++;
}

