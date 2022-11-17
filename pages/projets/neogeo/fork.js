var codepen_links = document.querySelectorAll('strong a');
codepen_links.forEach( link => {
  link.onclick = (e) => {
    e.preventDefault();
    var slug = link.href.split("/").pop();
    if(link.classList.contains('open')){
      var pen = document.querySelector("#cp_embed_" + slug).parentElement;
      pen.parentElement.removeChild(pen);
      link.classList.remove('open');
    } else {  
      link.classList.add('open');
      var pen = document.createElement('div');
      pen.className = "codepen-later codepen-" + slug;
      pen.setAttribute('data-height', "350"); 
      pen.setAttribute('data-theme-id',"39469");
      pen.setAttribute('data-default-tab',"css,result");
      pen.setAttribute('data-user', "esadpyrenees"); 
      pen.setAttribute('data-slug-hash', slug);
      pen.setAttribute('data-editable', "true");
      link.closest("p").after(pen);
      
      // The API for looking for and creating embeds
      window.__CPEmbed(".codepen-" + slug);
    }
  }
})