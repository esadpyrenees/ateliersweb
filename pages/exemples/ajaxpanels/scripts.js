(function() {
    // javascript moderne !
    "use strict";
    var nav = document.querySelector('nav'),
        links = document.querySelectorAll('nav a'),
        content = document.querySelector('#content'),
        defaultTitle = "Ajax nav";

    // fonction utilitaire asynchrone de chargement de page
    async function getPage(url) {
        let res = await fetch(url);
        let text = await res.text();
        return text;
    }

    // éxécution de js spécifique à chaque page
    function doStuff(section){
        if(section == undefined){
            section = document.querySelector('a.current').getAttribute('data-section');
        }
        switch (section) {
            case "index":
                break;
            case "page2":
                // ajout d’une carte à la page
                mapboxgl.accessToken = 'pk.eyJ1IjoianVsaWVuYiIsImEiOiJWTzBDVFg0In0.9nmlzbnQ2mMOUX4Tu0ELzQ';
                var map = new mapboxgl.Map({
                    container: 'mymap', // container id
                    style: 'mapbox://styles/julienb/cjou4jkxe1p0r2snvr30ompph', // stylesheet location
                    center: [-0.366150, 43.291761], // starting position [lng, lat]
                    zoom: 9 // starting zoom
                    });
                break;        
            default:
                // 
                break;
        }
    }
    // en cas d’accès direct à la page (pas de click, pas de changement d’historique)
    doStuff();

    // fonction de changement de page
    function loadPage(url, section) {
        
        getPage(url).then(result => {
            // crée un élément HTML “virtuel” pour y injecter le contenu
            // et pouvoir le manipuler
            var dom = document.createElement("html");
            dom.innerHTML = result; 
            // récupère le contenu dans la page virtuelle
            var newcontent = dom.querySelector('#content').innerHTML;
            // injecte le contenu dans le container
            content.innerHTML = newcontent;
            // active le bon lien dans la nav
            addCurrentClass(section);
            // change le title du document
            document.title = defaultTitle + ' | ' + section;
            // exécute du javascript selon la section / la page chargée
            doStuff(section);
        })
    }

    // gestion de la nav: supprime la classe "current" de tous les liens
    function removeCurrentClass() {
        for (var i = 0; i < links.length; i++) {
            links[i].classList.remove('current');
        }
    }
    // gestion de la nav: ajoute la classe "current" au lien actif
    function addCurrentClass(section) {
        removeCurrentClass();
        var element = document.querySelector("#nav-" + section);
        element.classList.add('current');
    }

    // au click sur un lien de la nav
    nav.addEventListener('click', function(e) {
        if (e.target != e.currentTarget) {
            // annule le comportement par défaut (accéder à la page)
            e.preventDefault();
            // récupération des infos de chargement
            var section = e.target.getAttribute('data-section'),
                url = e.target.getAttribute("href");
            // gestion de l’historique du navigateur (permet de cliquer sur le bouton “retour”)
            history.pushState(section, null, url);
            // appel de la fonction qui charge la nouvelle page
            loadPage(url, section);
        }
        e.stopPropagation();
    }, false);

    // gestion de l’historique
    window.addEventListener('popstate', function(e) {
        var section = e.state;        
        if (section == null) {
            removeCurrentClass();
            content.innerHTML = " ";
            document.title = defaultTitle;
        } else {
            loadPage(location.href, section);
        }
    })
})();