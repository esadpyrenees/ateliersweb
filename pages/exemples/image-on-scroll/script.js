const spans = document.querySelectorAll('span[rel]');

function handleIntersection(entries) {
  entries.map((entry) => {
    let span = entry.target;
    let image = document.querySelector(span.getAttribute('rel'))
    if (entry.isIntersecting) {     
      image.classList.add("visible");
    } else {
      image.classList.remove("visible");
    }
  });
}

const observer = new IntersectionObserver(handleIntersection);

spans.forEach(span => observer.observe(span));