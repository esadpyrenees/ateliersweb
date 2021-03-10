
// borrowed from https://github.com/chrisnunes57/Draggin.js

document.body.onload = function(){

  // Select all elements with the 'draggable' class and stores them in the 'elements' variable
  var elements = document.querySelectorAll(".draggable");

  var clickTimer = null;

  // Adds event listeners to every element that has the draggable class
  for(var i = 0; i < elements.length; i++){
    elements[i].addEventListener('mousedown', drag);
    elements[i].addEventListener('touchstart', handleTouch);
    b = elements[i].getBoundingClientRect();
    // Calculate the initial offset of the element from the top left of the page and stores it as a property of the element
    elements[i].initialOffsetX = b.left + window.pageXOffset;
    elements[i].initialOffsetY = b.top + window.pageYOffset;
    elements[i].x = b.left;
    elements[i].y = b.top;
    document.addEventListener('mouseup', end);
    document.addEventListener('touchend', end);
  };

  function handleTouch(evt){
      evt.preventDefault();
      drag(evt);
      if (clickTimer == null) {
          clickTimer = setTimeout(function () {
              clickTimer = null;
          }, 500)
      } else {
          clearTimeout(clickTimer);
          clickTimer = null;
      }
  }

  // Main logic, called when the mouse is clicked
  function drag(event) {
    // Identify which element was clicked and store in the 'tgt' element
    tgt = event.target;
    if(!tgt.matches('.draggable')){
      return false;
    }

    // Prevent default behavior and increase z index to bring the new element to the front
    event.preventDefault();
    moving = true;

    // get position properties of tgt
    tgt.attributeName = 'test';
    b = tgt.getBoundingClientRect();
    var x = b.left + window.pageXOffset;
    var y = b.top + window.pageYOffset;
    offsetX = event.pageX || event.changedTouches[0].pageX;
    offsetY = event.pageY || event.changedTouches[0].pageY;

    document.addEventListener('mousemove',function(e) {
      // If the page has been clicked and an element is being dragged
      if(moving === true){
        // Calculate the new position of the element, relative to the top left of the page
        var dx = e.pageX - offsetX + x - tgt.initialOffsetX;
        var dy = e.pageY - offsetY + y - tgt.initialOffsetY;
        // Apply the styles to the element
        var position = 'transform: translate('+dx+'px, '+dy+'px);';
        tgt.setAttribute('style', position);
        tgt.classList.add('active');
      };
    });
    document.addEventListener('touchmove',function(e) {
        var touches = e.changedTouches;
      // If the page has been clicked and an element is being dragged
      if(moving === true){
        for(let i = 0; i < touches.length; i++){
            // Calculate the new position of the element, relative to the top left of the page
            var dx = touches[i].pageX - offsetX + x - tgt.initialOffsetX;
            var dy = touches[i].pageY - offsetY + y - tgt.initialOffsetY;
            // Apply the styles to the element
            var position = 'transform: translate('+dx+'px, '+dy+'px);z-index:'+z+';';
            tgt.setAttribute('style', position);
        }
      };
    });
  };

  function end(evt) {
    // When the mouse is lifted up, set moving to false
    moving = false;
    evt.target.classList.remove('active');
  };
}
