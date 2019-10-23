# Web Audio Api

HTML5 permet aujourd’hui de manipuler l’audio via l’API Web audio

La Web Audio API propose un système puissant et flexible pour contrôler les données audio sur internet. Elle permet notamment de sélectionner des sources audio (microphone, flux media), d'y ajouter des effets, de créer des visualisations, d'appliquer des effets de spatialisation (comme la balance), etc. [source](https://developer.mozilla.org/fr/docs/Web/API/Web_Audio_API)


## Howler.js

Une librairie, [Howler.js](https://howlerjs.com/) permet de manipuler simplement l’audio dans le navigateur

    <script src="/path/to/howler.js"></script>
    <script>
        var sound = new Howl({
          src: ['sound.webm', 'sound.mp3']
        });
    </script>

    <script>
        var sound = new Howl({
        src: ['sound.webm', 'sound.mp3', 'sound.wav'],
        autoplay: true,
        loop: true,
        volume: 0.5,
        onend: function() {
            console.log('Finished!');
        }
    });

### Exemples (sur howlerjs.com)

*   [Audio Player](https://howlerjs.com/#player)
*   [Radio](https://howlerjs.com/#radio)
*   [Spatial Audio](https://howlerjs.com/#spatial)
*   [Audio Sprites](https://howlerjs.com/#sprite)