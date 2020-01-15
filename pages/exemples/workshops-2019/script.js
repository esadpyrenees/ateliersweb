

var headers = document.querySelectorAll("header"),
    sections = document.querySelectorAll("section");

headers.forEach(function(header, idx) {
    header.addEventListener('click', function(){
        var section = this.closest('section');
        openSection(section);
        history.pushState(section.id, null, '#' + section.id);
    })

})

function openSection(section){
    sections.forEach(function(el){
        el.classList.remove('visible');
    })
    section.classList.add('visible');
}

function updateContent(section){
    var hash = window.location.hash;

    if (section != undefined) {
        hash =  '#' + section
    }
    var thesection = document.querySelector(hash);
    if (thesection) {
        openSection(thesection);
    }

}

window.addEventListener('popstate', function(event) {
    var section = event.state;
    updateContent(section);
});


updateContent();
