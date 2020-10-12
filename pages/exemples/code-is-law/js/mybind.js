

function bind(){

  // bindery setup
  // https://evanbrooks.info/bindery/docs/

  Bindery.makeBook({
    content: '.content',
    pageSetup: {
      // paper size
      size: { width: '14.8cm', height: '20cm' },
      // margins
      margin: { 
        top:    '1cm', 
        inner:  '1cm', 
        outer:  '2cm', 
        bottom: '1.5cm' 
      },
    },
    printSetup: {
      // layout controls the binding mode: here we want spreads
      layout: Bindery.Layout.SPREADS,
      paper: Bindery.Paper.AUTO_BLEED,
      marks: Bindery.Marks.NONE,
      bleed: '0pt'
    },
    
    // offset page numbers to start the real numbering **after** howto and cover pages
    pageNumberOffset: -3,
    
    rules: [
      // force page breaks after specific elements
      Bindery.PageBreak({ selector: '.howto', position: 'after' }),
      Bindery.PageBreak({ selector: '.cover-4', position: 'after' }),
      Bindery.PageBreak({ selector: '.cover-1', position: 'after' }),
      // full bleed (fond-perdu ;) if needed
      Bindery.FullBleedPage({ selector: '.cover-1' }),
      // page numbers 
      Bindery.RunningHeader({
        render: (page) => {
          if (page.isEmpty || page.number < 1) return '';
          if (page.isLeft) return `${page.number}`;
          if (page.isRight) return `${page.number}`;
        },
      }),
    ],
  });
  
}




// select useful elements
var bind_button = document.querySelector('#bind-button');
var print_button = document.querySelector('#print-button');
var howto = document.querySelector('#howto');

// switch CSS files between screen (default) and bindery+print
// according to the "data-bind" attribute set in the stylesheet link at the top of the HTML file
function prepareCss(){
  // switch book css href
  var css = document.querySelector('#bind_css');
  if(css) {
    css.href = css.getAttribute('data-bind');
  }
}


//  initializes bindery on start if body classname contains "layout-mode"
if(document.body.classList.contains('layout-mode')){
  prepareCss();
  // dirty timeout, sorry…
  setTimeout(function(){    
    bind();
  }, 1000)  
}


bind_button.addEventListener('click', function(){
  // display howto
  howto.classList.add('visible');
  document.querySelector('#howto').style.display = "block";
  
  // set bindery css
  prepareCss();

  // start bindery
  bind();
  
  // enable le bouton print on bindery ready
  window.requestAnimationFrame(checkBinderyReady);

})

function checkBinderyReady(){
  var bar  = document.querySelector(".📖-progress-bar");
  if(bar.style.transform !=""){
    window.requestAnimationFrame(checkBinderyReady);
  } else {
    print_button.removeAttribute("disabled");
  }
}


print_button.addEventListener('click', function(){
  document.body.classList.add('print-mode');
  window.print();
})