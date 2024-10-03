fetch("/web/pages/gopro/2425/survive.md")
    .then(response => response.text())
    .then(text => filterDatabase(text))
    .then(database => { 
        shuffle(database);
        console.log(database);
        survive(database)
        document.querySelector('#refreshsurvive').onclick = () => {survive(database)};
    })

function survive(database){
    document.querySelector("#survive").textContent = database.pop()
}

// shuffle array
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        let j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

// filter source text, returns an array
function filterDatabase(text) {    
    let db = text.split('\n');
    return db.filter(function(element) {
        return element !== '' && !element.startsWith('//');
    });
}