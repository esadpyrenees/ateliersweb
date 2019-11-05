
let imposeBooklet = function(pages){

    number_of_pages = pages.length;

    // Create an array for pages
    let pages_array = [];

    // If the page count isn't a multiple of 4, we need to
    // pad the array with blank pages so we have the correct
    // number of pages for a booklet.
    //
    // ex. [1, 2, 3, 4, 5, 6, 7, 8, 9, blank, blank, blank]

    if (number_of_pages % 4 != 0){
        let additional_pages = 4 - (number_of_pages % 4);
        number_of_pages += additional_pages;
        console.log('(' + additional_pages + ' blank pages added)');
    }

    // Push each page in the array

    for (let i = number_of_pages ; i >= 0; i--) {
        pages_array.push(i);        
    }

    // Split the array in half
    //
    // ex. [1, 2, 3, 4, 5, 6], [7, 8, 9, blank, blank, blank]

    let split_start =  pages_array.length / 2,
        split_end = pages_array.length - 1,
        first_array = pages_array.slice(0,split_start),
        second_array = pages_array.slice(split_start,split_end);

    // Reverse the second half of the array.
    // This is the beginning of the back half of the booklet
    // (from the center fold, back to the outside last page)
    //                     
    // ex. [blank, blank, blank, 9, 8, 7]

    let second_array_reversed = second_array.reverse();


    // Zip the two arrays together in groups of 2
    // These will end up being each '2-up side' of the final document
    // So, the sub-array at index zero will be the first side of
    // physical page one and index 1 will be the back side.
    // However, they won't yet be in the proper order.
    //
    // ex. [[1, blank], [2, blank], [3, blank], [4, 9], [5, 8], [6, 7]]

    let page_groups = [];
    for (let i = 0; i < first_array.length; i++) {
        page_groups[i] = [ first_array[i], second_array_reversed[i] ];
    }



    // We need to reverse every other sub-array starting with the
    // first side.
    // This is the final step of aligning our booklet pages in
    // the order with which the booklet gets printed and bound.
    //
    // ex. [[blank, 1], [2, blank], [blank, 3], [4, 9], [8, 5], [6, 7]]

    //final_groups = page_groups.each_with_index { |group, index| group.reverse! if (index % 2).zero? }
    let final_groups = []
    for (let i = 0; i < page_groups.length; i++) {
        let group = page_groups[i];
        if(i % 2 != 0){
            final_groups[i] = page_groups[i].reverse();            
        } else {
            final_groups[i] = page_groups[i];
        }
    }

    // logs
    console.log('Final Imposition Order: ' + final_groups);
    flat_pages_order = [].concat.apply([], final_groups);

    booklet_impressions = page_groups.length;
    console.log('Booklet Impressions needed: ' + booklet_impressions);

    booklet_pages = booklet_impressions / 2;
    console.log('Final Booklet pages needed: ' + booklet_pages);

    // Create pages in html document, re-ordered by flexbox order

    const booklet = document.createElement('div');
    booklet.className = 'booklet';


    // transform pages
    let pagedjs_page = document.querySelectorAll('.pagedjs_page')[0],
        pagedjs_page_style = getComputedStyle(pagedjs_page),
        pagedjs_page_width = pagedjs_page_style.width,
        pagedjs_page_height = pagedjs_page_style.height,
        pagedjs_page_transform = 41 / parseFloat(pagedjs_page_width);

    console.log(pagedjs_page, parseFloat(pagedjs_page_width), pagedjs_page_transform);

    for (var i = 0; i < flat_pages_order.length; i++) {
        let folio = flat_pages_order[i];
        let imposed_page = document.createElement('div');
        imposed_page.className = 'imposed_page';    
        let page_element = pages[i];
        if (page_element !== undefined) {
            page_element.style.transform = 'scale(' + pagedjs_page_transform + ')';  
            imposed_page.appendChild(page_element);  

        } 

        console.log('')
        
        // page_element.id = 'page-' + folio;
        // page_element.textContent = folio;
        imposed_page.style.order = folio;
        booklet.appendChild(imposed_page);  
    }
    document.body.appendChild(booklet)

}