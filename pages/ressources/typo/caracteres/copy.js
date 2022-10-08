let utils = document.querySelector('.utils');
const utils_chars = utils.textContent.split(""); 
utils.innerHTML="";
utils_chars.forEach(char => {
    const button = document.createElement("button");
    button.textContent=char;
    utils.appendChild(button)
});


const buttons = document.querySelectorAll('button');

buttons.forEach(button => {
    button.onclick = () => {
        let strong = button.querySelector("strong");
        let span = button.querySelector("span");
        let text = button.textContent;
        let input = document.createElement('input');
        if(strong){
            input.value = strong.textContent;
        } else if(span) {
            input.value = "&" + span.textContent;
        } else {
            input.value = text;
        }
        input.select();    // Selects the text inside the input
        document.execCommand('copy');    //
        if (navigator.clipboard) {
            console.log('Clipboard API available');
            navigator.clipboard.writeText(input.value);
            console.log("copied");
            button.classList.add("copied")
        }
          
    }
});