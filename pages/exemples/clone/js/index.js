$dot = $('.dot')

for(var i = 0; i<5000; i++){
  var $d = $dot.clone();
  $('body').append($d)
}

$('body').on("mouseenter", '.dot', function(){

  var $this =  $(this);
  $this.find('span').first().appendTo($this)
})