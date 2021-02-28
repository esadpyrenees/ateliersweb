var codepen_links = document.querySelectorAll('ol a');
codepen_links.forEach( link => {
  link.onclick = (e) => {
    e.preventDefault();
    var slug = link.href.split("/").pop();
    var li = link.closest('li');
    var h6 = li.querySelector('h6');
    if(link.classList.contains('open')){
      var pen = document.querySelector("#cp_embed_" + slug).parentElement;
      pen.parentElement.removeChild(pen);
      link.classList.remove('open');
    } else {  
      link.classList.add('open');
      var pen = document.createElement('p');
      pen.className = "codepen-later codepen-" + slug;
      pen.setAttribute('data-height', "350"); 
      pen.setAttribute('data-theme-id',"39469");
      pen.setAttribute('data-default-tab',"js,result");
      pen.setAttribute('data-user', "esadpyrenees"); 
      pen.setAttribute('data-slug-hash', slug);
      pen.setAttribute('data-editable', "true");
      li.insertBefore(pen, h6.nextSibling);
      
      // The API for looking for and creating embeds
      window.__CPEmbed(".codepen-" + slug);
    }
  }
})