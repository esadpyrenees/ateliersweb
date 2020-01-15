/* JS */

// get
var winHeight = $(window).height();
var winWidth = $(window).width();

// RANDOM

var text = $('#salut').text();
$('#salut').empty();
var lettres = [];
lettres = text.split('');

var ma_variable = 0;

$('body').on('click', function(){
    if(ma_variable < lettres.length){
        var $span = $('<span>'+ lettres[ma_variable] + '</span>');
        $('body').append($span);
        ma_variable++;
    } else {
        var $span = $('<span> </span>');
        $('body').append($span);
        ma_variable = 0;
    }
    
})

