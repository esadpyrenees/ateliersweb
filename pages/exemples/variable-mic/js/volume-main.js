var audioContext = null;
var meter = null;
var canvasContext = null;
var WIDTH=50;
var HEIGHT=50;
var rafID = null;

window.onload = function() {

    // grab our canvas
	canvasContext = document.getElementById( "meter" ).getContext("2d");
	
    // monkeypatch Web Audio
    window.AudioContext = window.AudioContext || window.webkitAudioContext;
	
    // grab an audio context
    audioContext = new AudioContext();

    // Attempt to get audio input
    try {
        // monkeypatch getUserMedia
        navigator.getUserMedia = 
        	navigator.getUserMedia ||
        	navigator.webkitGetUserMedia ||
        	navigator.mozGetUserMedia;

        // ask for an audio input
        navigator.getUserMedia(
        {
            "audio": {
                "mandatory": {
                    "googEchoCancellation": "false",
                    "googAutoGainControl": "false",
                    "googNoiseSuppression": "false",
                    "googHighpassFilter": "false"
                },
                "optional": []
            },
        }, gotStream, didntGetStream);
    } catch (e) {
        alert('getUserMedia threw exception :' + e);
    }

}

function didntGetStream() {
    alert('Stream generation failed.');
}

var mediaStreamSource = null;

function gotStream(stream) {
    // Create an AudioNode from the stream.
    mediaStreamSource = audioContext.createMediaStreamSource(stream);

    // Create a new volume meter and connect it.
    meter = createAudioMeter(audioContext, .5);
    mediaStreamSource.connect(meter);

    // kick off the visual updating
    drawLoop();
}




var $yo = $('#yo');

// map a number to another scale
const scale = (num, in_min, in_max, out_min, out_max) => {
  return (num - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
}


function drawLoop( time ) {
    // clear the background
    canvasContext.clearRect(0,0,WIDTH,HEIGHT);

    // check if we're currently clipping
    if (meter.checkClipping())
        canvasContext.fillStyle = "red";
    else
        canvasContext.fillStyle = "green";

    // draw a bar based on the current volume
    canvasContext.beginPath();
    
    var wdth = scale(meter.volume, 0, 0.42, 0, 900);
    var wght = scale(meter.volume, 0, 0.42, 0, 900);
    var variation = ' "wdth" ' + wdth  + ', "wght" ' + wght ;
    
    $yo.css({
        'font-variation-settings': variation
    })
    canvasContext.arc(25, 25, 4 + meter.volume * 30, 0, Math.PI * 2, true); // Outer circle

    canvasContext.fill();
    canvasContext.closePath();
    
    // set up the next visual callback
    rafID = window.requestAnimationFrame( drawLoop );
}
