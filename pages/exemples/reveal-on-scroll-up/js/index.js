var body = document.body;
var menuButton = document.querySelector(".menu-trigger");
var nav = document.querySelector(".menu-nav");
var scrollUp = "scroll-up";
var scrollDown = "scroll-down";
let lastScroll = 0;

menuButton.addEventListener("click", function(){
  body.classList.toggle("menu-open");
});

window.addEventListener("scroll", function(){
  var currentScroll = window.pageYOffset;
  if (currentScroll == 0) {
    body.classList.remove(scrollUp);
    return;
  }
  
  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
  } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
  }
  lastScroll = currentScroll;
});