/* 
This file contains javascript instructions to pimp the content *before* binding & printing.
In this example, a simple random character substitution over a asciiart array of strings :)
+
Moving .cover-4 (title + author) at the end of the document
*/

var str = [
  "                       /////                                  ",
  "                     /////////                                ",
  "                    //      ///         /                     ",
  "                   /         ///      //                      ",
  "                              /////////                       ",
  "                                /////                         ",
  "                                                              ",
  "                                   //                         ",
  "            / //                     //                       ",
  "          /  ////  /                  //                      ",
  "         /  /  ////                   //                      ",
  "        /  //   //                    //                      ",
  "       /  ///           ///           //                      ",
  "      //   //          / ///  /   /// //      ///             ",
  "      //   //         /   ////   ///////     / ///            ",
  "      //   //        //    //   //   ///    /   ///           ",
  "      //   //        //    //   //    //   //    ///          ",
  "      //   //        //    //   //    //   ////////           ",
  "       //  //        //    //   //    //   ///////            ",
  "        // /      /  //    //   //    //   //                 ",
  "         ///     /    //////    //    //   ////    /          ",
  "          ///////      ////      /////      ///////           ",
  "            ///    /              ///        /////            ",
  "                  ///                                         ",
  "                   /        ////                              ",
  "                           / //// /                           ",
  "                 ///      //  ////                            ",
  "                  ///    ////                                 ",
  "        //////     //      ///           //////               ",
  "      //////       //        ///       //////                 ",
  "                   //          ///                            ",
  "                   //     ////  //                            ",
  "                   //    / //// /                             ",
  "         ///       /// /    ////              ////            ",
  "          ///       ///                      //  //           ",
  "            //                                    //          ",
  "            //               //                    /          ",
  "            //       ////    //                   /           ",
  "            //      / ///  /  //   ///   ////    /            ",
  "            //     /   ////    //   ///    ///  /             ",
  "            //    //    //     //    ///    ////              ",
  "            //    //    //     //     //     //               ",
  "            //    //    //     //     //     //               ",
  "            //    //    //     //     //     //               ",
  "            //    //    //     //     //     //               ",
  "            //     ///// //    //     //     /                ",
  "            ///  /   ///   //    ////// //////                ",
  "             ///                 ////   ////                  ",
  "                                                              ",
  "                                                              ",
  "                     /////                                    ",
  "                   /////////                                  ",
  "                  //      ///         /                       ",
  "                 /         ///      //                        ",
  "                            /////////                         ",
  "                              /////                           ",
  "                                                              "];

var chars = "#/\\*$£¶§–"
var figure = document.querySelector('figure');
var spans = [];

for(let i = 0; i < str.length; i++){
  var line = str[i];
  var linediv = document.createElement("div");
  for(let j = 0; j < line.length; j++){
    var span = line[j];
    var charspan = document.createElement("span");
    if(span == "/"){
      charspan.innerHTML = chars[Math.floor(Math.random() * chars.length)];
    } else {
      charspan.innerHTML = "&nbsp;";
    }
    linediv.appendChild(charspan);
    spans.push(charspan);
  }
  figure.appendChild(linediv);
}

    
var content = document.querySelector('.content');
var cover4 = document.querySelector('.cover-4');
content.appendChild(cover4);
      
          
function changechar(){
  var span = spans[Math.floor( Math.random() * spans.length)];
  if (span.innerHTML != "&nbsp;"){
    span.textContent = chars[Math.floor(Math.random() * chars.length)];
  }
  window.requestAnimationFrame(changechar);
}
window.requestAnimationFrame(changechar);
      
  
  