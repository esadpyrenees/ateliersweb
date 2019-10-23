# Javascript

## Contrôler le son

Une fois le média intégré dans le document HTML on peut les contrôler programmatiquement depuis du code JavaScript. Par exemple, pour démarrer la lecture :

    // html : <video id="mavideo" (…)></video>
    var qs_v = document.querySelector("#mavideo");
    qs_v.play();

### Évènements

L’élément vidéo émet des évènements : `canplay`, `ended`, `timeupdate`…

Plus d’infos sur [MDN](https://developer.mozilla.org/fr/docs/Web/HTML/Utilisation_d'audio_et_video_en_HTML5)…

    var vid = document.querySelector("#mavideo");
    vid.addEventListener('ended', function(){
        alert('The end');
    });

    // écrit la position de la vidéo dans un <div id="current">>
    vid.addEventListener( "timeupdate", function(event){
        document.querySelector("#current").text(this.currentTime + ' / ' + this.duration)
    });

## Exemple de player

[Voir exemple simple](https://codepen.io/jbidoret/pen/EbVRXd)
[Voir l’exemple avancé](http://ateliers.esapyrenees.fr/web/exemples/typographie/01.html)

<div id="player">
<audio src="https://ubusound.memoryoftheworld.org/russian_avant2/23_el_lisitzsky_-_about_two_squares_-_a_suprematist_story_childrens_book_1920-22.mp3" id="audioplayer"></audio>
<div id="playpause" class="pause"></div>
</div>
<script type="text/javascript">
    var player = document.getElementById('audioplayer');
    var playpause = document.getElementById('playpause');
    var playing = false;
    playpause.addEventListener('click', function(){
      if (playing) {
        playpause.className='pause';
        player.pause();
      } else {
        playpause.className='play';
        player.play();
      }
      playing = !playing;
    })
</script>
<style type="text/css">
    #playpause { 
        font-family: sans-serif;
        background: black;
        color: white;
        height: 64px;
        width: 64px;
        line-height: 64px;
        text-align: center;
        cursor: pointer;
    }
    .play:before {
        content: "\02758 \02758";
    }
    .pause { text-indent:0.2em;}
    .pause:before {
        content: "\25B7";
    }
</style>
Html

    <div id="player">
        <audio src="audio/WoodyGuthrie-TomJoad.mp3" id="audioplayer" autoplay></audio>
        <div id="playpause" class="play"></div>
    </div>

Javascript

    var player = document.getElementById('audioplayer');
    var playpause = document.getElementById('playpause');
    var playing = true;
    playpause.addEventListener('click', function(){
        if (playing) {
            playpause.className='pause';
            player.pause();
        } else {
            playpause.className='play';
            player.play();
        }
        playing = !playing;
    })

