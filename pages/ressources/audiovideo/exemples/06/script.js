const scale = (num, in_min, in_max, out_min, out_max) => {
    return (num - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
}


$(function(){
	var timer = document.getElementById('timer');

    
    var sound = new Howl({
        src: '../assets/audio/Fluxus-Anthology_07_Robert-Filliou.mp3',
        autoplay: true,
        loop: true,
        volume: 0.5
    });


    function pad(float){
        return float.toFixed(3)
    }

	gyro.startTracking(function(o) {
	    // o.x, o.y, o.z for accelerometer
        // o.alpha, o.beta, o.gamma for gyro

        rate = scale(o.beta, 90, -90, 0, 3); 
        
        sound.rate(rate);
        $('#alpha').html(pad(o.alpha))
        $('#beta').html(pad(o.beta))
        $('#gamma').html(pad(o.gamma))

        $('#x').html(pad(o.x))
        $('#y').html(pad(o.y))
        $('#z').html(pad(o.z))        
        
        $('#rate').val(rate)
	    
	    
	});
})