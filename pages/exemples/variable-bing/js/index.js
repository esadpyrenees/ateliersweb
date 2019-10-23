const scale = (num, in_min, in_max, out_min, out_max) => {
  return (num - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
}

$(function(){

	$('#t').blast({ 
		delimiter: "all" 
	});
	var spans = document.querySelectorAll('span'),
		len = spans.length;

	spans.forEach( function(element, index) {
		let wght = scale(index, 0, len, 40, 200);
	    // let wdth = scale(index, 0, len, 1, 1000);
	    let wspacing = scale(index, 0, len, 0, .2);

	    // var variation = ' "wdth" ' + wdth  + ', "wght" ' + wght;
	    var variation = ' "wght" ' + wght;
	    element.style.fontVariationSettings = variation;
	    element.style.wordSpacing = wspacing + 'em';
	});
	
})