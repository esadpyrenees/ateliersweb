// source :
// https://blog.addpipe.com/using-webaudiorecorder-js-to-record-audio-on-your-website/

// librairie :
// https://github.com/higuma/web-audio-recorder-js
// https://higuma.github.io/web-audio-recorder-js/

/*
    Méthodes :
    - setButtons : helper so enable and disable buttons
    - start : ask for user permission to record sound
    - startCountdown : 3/2/1 countdown before recording
    - startRecording : start recording
    - stopRecording: tell the recorder to finish the recording (stop recording + encode the recorded audio)
    - startPlayback : play all recorded tracks together
    - pausePlayback : pause playback
    - createAudioTrack : create audio element + remove button after recording finish
*/


// ------------------------------------------------------------------------------------

/*
    recorder initialization
*/

URL = window.URL || window.webkitURL;

var gumStream; //stream from getUserMedia()
var recorder; //WebAudioRecorder object
var input; //MediaStreamAudioSourceNode  we'll be recording
var encodingType; //holds selected encoding for resulting audio (file)
var encodeAfterRecord = true; // when to encode

// shim for AudioContext when it's not avb.
var AudioContext = window.AudioContext || window.webkitAudioContext;
var audioContext; //new audio context to help us record


/*
    UI initialization : buttons
*/

var recordButton = document.getElementById("recordButton");
var stopButton = document.getElementById("stopButton");
var startButton = document.getElementById("startButton");
var playButton = document.getElementById("playButton");
var pauseButton = document.getElementById("pauseButton");

var allbuttons = [ recordButton,  stopButton,  startButton,  playButton,  pauseButton ];

// add events to the buttons
startButton.addEventListener("click", start);
recordButton.addEventListener("click", startCountdown);
stopButton.addEventListener("click", stopRecording);
playButton.addEventListener("click", startPlayback);
pauseButton.addEventListener("click", pausePlayback);



/*
     helper so enable and disable buttons
*/

function setButtons(buttons){
    for (var i = 0; i < allbuttons.length; i++) {
        var btn = allbuttons[i];
        if (buttons.indexOf(btn) != -1) {
            btn.disabled = false;
        } else {
            btn.disabled = true;
        }
    }
}

// init buttons
setButtons([startButton]);


/*
     Ask for user permission to record sound
*/

function start(){
    var constraints = {
        audio: true,
        video: false
    }
    navigator.mediaDevices.getUserMedia(constraints).then(function(stream) {
        // user media stream is ok
        gumStream = stream;
        setButtons([recordButton]);

    }).catch(function(err) {
        // user media stream fails; try again…
        setButtons([startButton]);
    });
}


/*
      3/2/1 countdown before recording
*/

function startCountdown(){
    var counter = 3;
    recordButton.innerHTML = counter;
    setInterval(function() {
        counter--;
        if (counter >= 0) {
            recordButton.innerHTML = counter;
        }
        if (counter === 0) {
            clearInterval(counter);
            startRecording()
        }
    }, 1000);
}


/*
      Start recording
*/

function startRecording() {

    audioContext = new AudioContext();
    input = audioContext.createMediaStreamSource(gumStream);
    encodingType = "wav";

    recorder = new WebAudioRecorder(input, {
        workerDir: "js/", // must end with slash
        encoding: encodingType,
        numChannels: 2, //2 is the default, mp3 encoding supports only 2
    });

    // callback function = what we do once the recoding has been finished
    recorder.onComplete = function(recorder, blob) {
        createAudioTrack(blob, recorder.encoding);
    }

    recorder.setOptions({
        timeLimit: 120,
        encodeAfterRecord: encodeAfterRecord
    });

    //start the recording process (WebAudioRecorder method)
    recorder.startRecording();

    setButtons([stopButton]);
}


/*
    tell the recorder to finish the recording (stop recording + encode the recorded audio)
*/

function stopRecording() {

    recorder.finishRecording();

    setButtons([recordButton, playButton]);
    recordButton.textContent = "+";

}


/*
    Start playback
*/

function startPlayback() {
    // stop microphone access
    // gumStream.getAudioTracks()[0].stop();
    var players = document.querySelectorAll("audio");
    for (i = 0; i < players.length; ++i) {
        var sound = players[i];
        sound.play();
    }

    setButtons([pauseButton]);
}


/*
    Pause playback
*/

function pausePlayback(){
    var players = document.querySelectorAll("audio");
    for (i = 0; i < players.length; ++i) {
        var sound = players[i]
        sound.pause();
    }

    setButtons([recordButton, playButton]);
}


/*
    create audio element + remove button after recording finish
*/

function createAudioTrack(blob, encoding) {

    var uri = URL.createObjectURL(blob);
    var au = document.createElement('audio');
    var remove = document.createElement('button');
    var li = document.createElement('li');

    //add controls to the <audio> element
    au.controls = true;
    au.src = uri;
    au.loop = true;

    remove.textContent = '✕';

    //add the new audio and a elements to the li element
    li.appendChild(au);
    li.appendChild(remove);

    // remove button action
    remove.addEventListener('click', function(){
        li.parentElement.removeChild(li);
    })

    //add the li element to the ordered list
    recordingsList.appendChild(li);
}
