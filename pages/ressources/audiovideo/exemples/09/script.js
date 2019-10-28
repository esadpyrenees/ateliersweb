/* JS */

// get
var winHeight = $(window).height();
var winWidth = $(window).width();

// RANDOM
var text = $('#salut').text();
$('#salut').empty();
var lettres = [];
lettres = text.split('');

for ( var i = 0; i < lettres.length; i++){
    var $span = $('<span>'+ lettres[i] + '</span>');
    $('#salut').append($span);    
}

$('#btn').on('mouseenter', function(){
    $('span').each(function(){
        $(this).css({
            'left' : Math.random()* (winWidth - $(this).width()) - $(this).position().left,
            'top' : Math.random()* (winHeight - $(this).height()) - $(this).position().top,
        })
    })
}).on('mouseleave', function(){
    $('span').each(function(){
        $(this).css({
            'left' : 0 ,
            'top' : 0 
        })
    })
})

