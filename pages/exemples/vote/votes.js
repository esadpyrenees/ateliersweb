
// strings to display results in full english
const results_in_french = {
  "zuck": "Mark Zuckerbeg",
  "a4": "la feuille A4",
  "can": "la canette de Coca",
  "sandwich": "le sandwich à l’omelette",
  "nothing": "rien",
}

// for each button, on click: vote + show next article7
const buttons = document.querySelectorAll('button');
buttons.forEach( button => {
  button.onclick = () => {
    if(button.value != ""){
      vote(button.value);
    }
    showNextArticle();
  }
})

// show first article
showNextArticle();


// FUNCTION to show next article 
function showNextArticle(){
  let visible = document.querySelector('.visible');
  if(visible == undefined){
    // premier article
    document.querySelector("article").classList.add('visible');
  } else {
    // les suivants
    visible.classList.remove('visible');
    visible.nextElementSibling.classList.add('visible');
    // last article : show results
    if(visible.nextElementSibling.id == "results"){
      showResults();
    }
  }
}

// FUNCTION to send a vote
async function vote(value){
  var formData = new FormData();
  formData.append('vote', value);
  var response = await fetch( 'vote.php', {
      method: 'POST',
      body: formData
    }
  );
  var data = await response.text();
  console.log(data);
}7


// FUNCTION to show results : get votes + display results
async function showResults(){
  var response = await fetch( 'get_votes.php', {
      method: 'GET'
    }
  );
  var results = await response.json();
  // console.log(results);
  
  // Number of votes
  document.querySelector('#votes').textContent = results["votesnumber"];

  // convert votes object to array
  const votes = results["votes"];      
  const entries = Object.entries(votes);  

  // remove last result, to treat it seperately
  const first = entries.shift()

  // display first result
  document.querySelector('#shittier').textContent = results_in_french[first[0]] + " (" + first[1] + " votes)";
  
  // display other results
  var following = "";
  entries.forEach( (entry, idx) => {
    console.log(entry);
    following += results_in_french[entry[0]] + " (" + entry[1] + " votes)";
    // comma, and or dot ?
    if (idx < entries.length - 2) following += ", ";
    if (idx == entries.length - 2) following += " et, le grand gagnant… ";
    if (idx == entries.length - 1) following += ".";
  })
  document.querySelector('#following').textContent = following;

}