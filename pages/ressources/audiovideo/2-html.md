# HTML

## Audio & video

La balise `<audio>` permet l’intégration d’un fichier son.

    <audio src="sons/fichier.mp3" controls autoplay loop >

La balise `<video>` permet l’intégration d’un fichier vidéo : )

    <video src="http://v2v.cc/~j/theora_testsuite/320x240.ogg" controls>
      Votre navigateur ne gère pas l'élément video
    </video>

Elles permettent de déterminer le chemin vers le fichier (ou les fichiers) et des propriétés du lecteur audio ou video : affichage des éléments d’interface, autoplay (n’a pas d’effet sur mobile) et la lecture en boucle.

Pour une plus ample référence, voir [MDN](https://developer.mozilla.org/fr/docs/Web/HTML/Utilisation_d'audio_et_video_en_HTML5)

## Compatibilité

Les navigateurs web acceptent des formats de fichiers différents ; on peut donc, pour maximiser la compatibilité fournir les différents fichiers : mp3 et ogg pour l’audio, webm et mp4 pour la video.

    <audio controls>
       <source src="elvis.mp3" type='audio/mpeg'>
       <source src="elvis.oga" type='audio/ogg'>
    </audio>

    <video controls>
        <source src="elvis.webm" type='video/webm'/>
        <source src="elvis.mp4" type='video/mp4'/>
    </video>
