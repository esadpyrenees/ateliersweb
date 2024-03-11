const content_source = document.body.getAttribute('data-source'),
  style_source = document.body.getAttribute('data-style');

const md = window.markdownit('default', {
    html: true,
    linkify: true,
    typographer: true,
    quotes: ['«\xA0', '\xA0»', '‹\xA0', '\xA0›']
  });

// use markdownit footnote plugin
md.use(window.markdownitFootnote);

// fetch content
fetch(content_source)
  .then(response => response.text())
  .then(text => {    
    // render markdown & inject HTML
    const html = md.render(text);
    document.querySelector("main").innerHTML = html;    
  }).then(
    // fetch style
    fetch(style_source)
      .then(response => response.text())
      .then(text => {    
        // create stylesheet
        const link = document.createElement("style");
        link.textContent = text;
        document.querySelector("head").appendChild(link);
        // remove loading
        document.body.classList.remove('loading');
      })
  );