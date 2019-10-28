$(function(){

    var sound = new Howl({
        src: '../assets/audio/Fluxus-Anthology_07_Robert-Filliou.mp3',
        autoplay: true,
        loop: true,
        volume: 0.5
    });

    $('#rate').on('change', function(){        
        sound.rate($(this).val())
    })
})


