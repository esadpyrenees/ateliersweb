function randint(a, b){
    return Math.round( Math.random() * (b - a) + a)
}

function randColor(){  
    var red = randint(0,255),
        green = randint(0,255),
        blue = randint(0,255)
    return 'rgb('+ red +','+ green +','+ blue +')';
}

$('body').on('click', function(){
    var new_color = randColor();
    $(this).css('background', new_color)
    $(this).text(new_color)
})

