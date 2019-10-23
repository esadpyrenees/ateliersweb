$('img').on('click', function(){
  var quelleimage = $(this).attr('data-imagesuivante');
  $(quelleimage).show()
})