## Services web : Youtube & co.

Il est possible d’intégrer des vidéos depuis les principaux services d’hébergement audio ou vidéos : soundclound, youtube, vimeo, dailymotion…

Généralement, un code d’intégration est accessible en cliquant sur partager / intégrer. Le code est celui d’une ```iframe```.

<iframe  src="https://player.vimeo.com/video/97605737"  width="640" height="360" frameborder="0"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>            

    <iframe 
        src="https://player.vimeo.com/video/97605737" 
        width="640" height="360" frameborder="0" 
        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>            
    <!-- vimeo -->
    
    <iframe 
        width="400" height="300" 
        src="https://www.youtube.com/embed/8xfoPxM9AO4" 
        frameborder="0" gesture="media" allowfullscreen></iframe>
    <!-- youtube -->
    
    
Ces vidéos ne sont pas facilement controlables par la page web hôte, mis à part en utilisant une librairie telle que [Plyr](http://plyr.io/).