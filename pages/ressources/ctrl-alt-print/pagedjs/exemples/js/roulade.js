//to do change units BY LOOKING FOR THEM

class Roulade extends Paged.Handler {
  constructor(chunker, polisher, caller) {
    super(chunker, polisher, caller);
    this.pagedroulade;
    this.sourceSize;
  }
  onAtPage(node, item, list) { }
  onDeclaration(declaration, dItem, dList, rule) {
    if (declaration.property == "--paged-layout") {
      if (declaration.value.value.includes("roulade")) {
        this.pagedroulade = true;
      }
    }
  }
  afterRendered(pages) {
    if (this.pagedroulade == true) {
      do_roulade();
    }
  }
}
Paged.registerHandlers(Roulade);


function do_roulade(){

  // pages
  let pages = document.querySelectorAll(".pagedjs_page");
  const number_of_pages = pages.length;
  
  // measures
  let format = document.querySelector(".pagedjs_page");
  let width = getCSSCustomProp("--pagedjs-width", format);
  let height = getCSSCustomProp("--pagedjs-height", format);
  let sheet_margin = 6; /* todo : read property from main css */
  let sheet_width = 420; /* todo : read property from main css */
  let sheet_height = 297; /* todo : read property from main css */
  

  var newSize = `
    @media print {
      @page {
        size: ${sheet_width}mm ${sheet_height}mm;
        margin: ${sheet_margin}mm;
      }
      .pagedjs_pages {
        width: var(--pagedjs-width);
        display: grid !important;
        grid-template-columns: repeat(4, 1fr);
        align-content: center;
        
        grid-gap: 0;
        transform: none !important;
        height: 100% !important;
        min-height: 100%;
        max-height: 100%;
        overflow: visible;
      }
      .pagedjs_page {
        margin: 0;
        padding: 0;
        max-height: 100%;
        min-height: 100%;
        height: ${height} !important;
        width: ${width} !important;
      }

      .pagedjs_page:nth-child(1) .pagedjs_sheet,
      .pagedjs_page:nth-child(2) .pagedjs_sheet,
      .pagedjs_page:nth-child(3) .pagedjs_sheet,
      .pagedjs_page:nth-child(8) .pagedjs_sheet {
        transform: rotate(180deg);
      }
      .pagedjs_page:nth-child(1){ grid-column: 3; grid-row: 1; }
      .pagedjs_page:nth-child(2){ grid-column: 2; grid-row: 1; }
      .pagedjs_page:nth-child(8){ grid-column: 4; grid-row: 1; }
      .pagedjs_sheet {
        margin: 0;
        padding: 0;
        height: ${height} !important;
        width: ${width} !important;
      }

    }
    .pagedjs_first_page {
      margin-left: 0;
    }
    body{
      margin: 0
    }
  `;

  let style = document.createElement("style");
  style.id = "roulade";
  style.textContent = newSize;
  document.head.appendChild(style);

  console.log(style);

  var evt = new CustomEvent("paged_imposed", {detail: "Imposition done"});
  window.dispatchEvent(evt);

}



/**
 * Pass in an element and its CSS Custom Property that you want the value of.
 * Optionally, you can determine what datatype you get back.
 *
 * @param {String} propKey
 * @param {HTMLELement} element=document.documentElement
 * @param {String} castAs='string'
 * @returns {*}
 */
const getCSSCustomProp = (
  propKey,
  element = document.documentElement,
  castAs = "string"
) => {
  let response = getComputedStyle(element).getPropertyValue(propKey);

  // Tidy up the string if there's something to work with
  if (response.length) {
    response = response.replace(/\'|"/g, "").trim();
  }

  // Convert the response into a whatever type we wanted
  switch (castAs) {
    case "number":
    case "int":
      return parseInt(response, 10);
    case "float":
      return parseFloat(response, 10);
    case "boolean":
    case "bool":
      return response === "true" || response === "1";
  }

  // Return the string response by default
  return response;
};
