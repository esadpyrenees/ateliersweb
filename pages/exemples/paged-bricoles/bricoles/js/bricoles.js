
var images = document.querySelectorAll('img'),
    base_svg = document.querySelector('#duotone');

console.log(images);




$(function(){


function randint(min, max){
    return Math.floor( Math.random() * (max-min) + min);
}

const quotes = document.querySelectorAll('.quote');

Array.prototype.forEach.call(quotes, function(el, index, array){
  el.style.color = 'rgba(' + randint(8, 19) + ', ' + randint(32, 59) + ', '+ randint(92, 156) + ', .8)';
});



    
        var factorStep = 1 / (images.length - 1);

        for (var i = 0; i < images.length; i++) {


            console.log(i)
            var img = images[i],
                src= img.src;
            var svg = base_svg.cloneNode(true);

            var filter = svg.querySelector('filter'),
                matrix = svg.querySelector('feColorMatrix'),
                image = svg.querySelector('image');
            var w = img.width,
                h = img.height;

            svg.id = 'duotone-' + i;
            svg.setAttribute('width', w);
            svg.setAttribute('height', h);
            svg.setAttribute('viewBox', '0 0 ' + w + ' ' + h);
            
            filter.id = 'duotone-filter-' + i;
            image.setAttribute('filter', 'url(#duotone-filter-' + i+ ')');
            image.setAttribute('width', w);
            image.setAttribute('height', h);
            image.setAttribute('xlink:href', src);
            
            var wrapper = document.createElement('span');
            wrapper.className='image-wrapper';
            img.parentNode.insertBefore(wrapper, img);
            wrapper.appendChild(img);
            wrapper.parentNode.style.marginTop = randint(1, 5) * 40 + 'px';
            //wrapper.style.backgroundColor = 'rgb(' + parseInt(100 + i * 3 )+ ',' + randint(8, 29) + ',' + randint(36, 56) + ')'

            img.parentNode.insertBefore(svg, img.nextSibling);

            //var color1 = [100 + i * 3, randint(8, 29), randint(36, 56)],
            //    color2 = [randint(8, 29), randint(28, 45), 100 + i * 3];

            var color1 = interpolateColor([11, 106, 218],[33, 214, 37],factorStep * i)
                color2 = interpolateColor([216, 19, 76],[33, 115, 214],factorStep * i)
                
            convertToDuoTone(color1, color2, matrix);
         
        }

        $('.icono').masonry({
            itemSelector: '.item',
            columnWidth: '.grid-sizer',
            percentPosition: true,
            gutter:40
        });



    //bmapize();
  

// imagesLoaded( document.querySelector('#wrapper'), function() {
// });
})