function onScroll(event) {
    let y = window.scrollY;
    document.body.style.setProperty('--y', `${y}px`);
}

window.addEventListener('load', function(){
    window.addEventListener('scroll', onScroll, { capture: false, passive: true })
})


var els = document.querySelectorAll(".wrapper *");
for (var i = 0; i < els.length; i++) {
    var el = els[i];
    console.log(el.getBoundingClientRect().width);
    el.style.top= Math.floor( Math.random() * (window.innerHeight - el.getBoundingClientRect().height)) + "px";
    el.style.left= Math.floor( Math.random() * (window.innerWidth - el.getBoundingClientRect().width)) + "px";
}
