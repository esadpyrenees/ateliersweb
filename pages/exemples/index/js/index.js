const header = document.querySelector("header")
const links = header.querySelectorAll('a');
const iframe = document.querySelector("#iframe");
const nav = document.querySelector("#index");
const showall = document.querySelector("#showall");

showall.addEventListener("click", (e) => {
    e.stopPropagation();
    nav.classList.toggle('showall');
    showall.textContent = showall.textContent == "+" ? "–" : "+";
})

links.forEach(link => {
    setId(link);
    link.addEventListener("click", (e) => {
        e.preventDefault();
        window.location.hash = link.id;
        openIframe(link.getAttribute("href"));
    })
});

function openIframe(href){
    if(iframe.src != href) iframe.src = href;
}

// pour un rechargement de l’iframe en cours
const hash = window.location.hash
if(hash){
    const link = document.querySelector(hash);
    if(link) openIframe(link.getAttribute("href"));
}

// Set a unique id to a link :
// 1. transform a string (the "href") into a "hash", a not-random number 
//    https://www.geeksforgeeks.org/how-to-create-hash-from-string-in-javascript/
// 2. "slugify" a string: transform to lowercase, remove accents, spaces and special characters
//    https://jasonwatmore.com/vanilla-js-slugify-a-string-in-javascript

function setId(link) {
    const href = link.getAttribute("href");
    let hash = 0;
    for (i = 0; i < href.length; i++) {
        char = href.charCodeAt(i);
        hash = ((hash << 5) - hash) + char;
        hash = hash & hash;
    }
    let slug = link.textContent.toLowerCase().trim();
    slug = slug.normalize('NFD').replace(/[\u0300-\u036f]/g, '')
    slug = slug.replace(/[^a-z0-9\s-]/g, ' ').trim();
    slug = slug.replace(/[\s-]+/g, '-');

    link.setAttribute("id", slug + '-' + Math.abs(hash))
}


// Draggable header 
// Modified https://github.com/xenova/Draggable

let draggable = new DraggableTransform(
    header,
    {
        "handlebar" : header.querySelector("h1"), // Optional handlebar - defaults to entire element.
        "start": function(e){ iframe.style.pointerEvents = "none";},  
        "end": function(e){ iframe.style.pointerEvents = "all";}
    }
);