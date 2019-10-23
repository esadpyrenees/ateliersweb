var images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg'];

var button = document.querySelector('button');
var margin = 50;

function randomizeButton(){
    
    var top  = Math.floor( Math.random() * (document.body.offsetHeight - margin * 2)) + margin;
    var left = Math.floor( Math.random() * (document.body.offsetWidth - margin * 2)) + margin;
    console.log(left, top);
    button.style.top = top + 'px';
    button.style.left = left + 'px';
}

button.addEventListener('click', function(){
    var randomimage = 'http://ateliers.esapyrenees.fr/_inc/img/500/' + images[Math.floor(Math.random() * images.length)];
    console.log(randomimage)
    document.body.style.backgroundImage = 'url(' + randomimage + ')';
    randomizeButton();     
})


randomizeButton();