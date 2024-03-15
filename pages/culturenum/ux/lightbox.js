import '/web/assets/js/vendor/glightbox.min.js';


const lightbox = GLightbox({
  touchNavigation: true,
  selector: "a[href$=jpg],a[href$=png],a[href$=webp],a[href$=avif],a[href$=gif]",
  loop: true,
  autoplayVideos: true,
  openEffect:"none",
  closeEffect:"none"
});