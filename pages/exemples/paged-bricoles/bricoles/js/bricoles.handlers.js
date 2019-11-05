// randint method
function randint(min, max){
    return Math.floor( Math.random() * (max-min) + min);
}



// 
// ------------------------------------------------------------------ Icono
// ------------------------------------------------------------------ unused
// 
class IconoHandler extends Paged.Handler {    
    afterParsed(parsed) {
        var galleries = document.querySelectorAll('.icono');
        for ( var i=0, len = galleries.length; i < len; i++ ) {
          var gallery = galleries[i];
          initMasonry( gallery );
        }

        function initMasonry( container ) {
          var imgLoad = imagesLoaded( container, function() {
            new Masonry( container, {
              itemSelector: '.item',
              columnWidth: '.item',
              isFitWidth: true
            });
            container.className += " jmig-img-loaded";
          });
        }
    }    
}
// Paged.registerHandlers(IconoHandler);

// 
// ------------------------------------------------------------------ Notes
// 

// external ref index for footnotes
let refindex = 0;

class NotesHandler extends Paged.Handler {    
    afterParsed(parsed) {
        const clone = parsed.cloneNode(true),
            sections = parsed.querySelectorAll('.text-section');
            

        for (let i = 0; i < sections.length; i++) {

            var notes_container = document.createElement('div'),
                section = sections[i],
                section_id = section.id;

            const notes = section.querySelectorAll('.fn');

            if (notes.length > 0) {
                notes_container.className = 'notes_container notes_container_' + section.id;
                notes_container.dataset.ref = 'data-fn-ref-' + refindex; // needed by paged.js to allow notes_container.appendChild(note);
                section.appendChild(notes_container);

                for (let j = 0; j < notes.length; j++) {
                    
                    refindex = refindex + 1;
                    let note = notes[j];              

                    // note.className = 'fn-content'; // causes infinite loop :(
                    note.id = 'fn-' + refindex;

                    let ref = document.createElement('a');
                    ref.className = 'fn-ref';
                    ref.href = '#fn-' + refindex;
                    ref.textContent = refindex;
                    ref.id = 'fn-ref-' + refindex;
                    note.parentNode.insertBefore(ref, note);

                    let refref = document.createElement('span');
                    refref.className = 'fn-refref';
                    refref.textContent = refindex + ' › ';
                    note.prepend(refref);
                    notes_container.appendChild(note);
                    
                }
            }
            
        }

        
    }    
}
Paged.registerHandlers(NotesHandler);

// 
// ------------------------------------------------------------------ Figures
// 

class FiguresHandler extends Paged.Handler {    
    afterParsed(parsed) {
        const figures = parsed.querySelectorAll('figure');
        for (let i = 0; i < figures.length; i++) {
            figures[i].style.paddingTop = randint(0, 5) * 5 + 'mm';
        };
    }    
}
Paged.registerHandlers(FiguresHandler);


// 
// ------------------------------------------------------------------ Quotes
// 

class QuotesHandler extends Paged.Handler {
    
    beforePageLayout(page) {
        const quotes = document.querySelectorAll('.quote');
        for (let i = 0; i < quotes.length; i++) {
            quotes[i].style.color = 'rgba(' + randint(8, 19) + ', ' + randint(32, 59) + ', '+ randint(92, 156) + ', .8)';
        };
    }
    
}
Paged.registerHandlers(QuotesHandler);


// 
// ------------------------------------------------------------------ Imposition
// ------------------------------------------------------------------ unused
// 

class ImposeHandler extends Paged.Handler {
    
    afterRendered(pages){
        let renderedPagesElements = document.querySelectorAll('.pagedjs_page');
        imposeBooklet(renderedPagesElements)
    }
    
}
//Paged.registerHandlers(ImposeHandler);