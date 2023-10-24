class TOC {
  /**
   * @param {[HTMLHeadingElement]} headingSet
   * */
  static parse(headingSet) {
    const tocData = []
    let curLevel = 0
    let preTocItem = undefined

    headingSet.forEach(heading => {
      const hLevel = heading.outerHTML.match(/<h([\d]).*>/)[1]
      const titleText = heading.innerText.replace("#", "")

      switch (hLevel >= curLevel) {
        case true:
          if (preTocItem === undefined) {
            preTocItem = new TocItem(titleText, hLevel)
            tocData.push(preTocItem)
          } else {
            const curTocItem = new TocItem(titleText, hLevel)
            const parent = curTocItem.level > preTocItem.level ? preTocItem : preTocItem.parent
            curTocItem.parent = parent
            if (parent !== undefined) {
              parent.children.push(curTocItem)
            }
            preTocItem = curTocItem
          }
          break
        case false:
          // We need to find the appropriate parent node from the preTocItem
          const curTocItem = new TocItem(titleText, hLevel)
          while (1) {
            if (preTocItem.level < curTocItem.level) {
              preTocItem.children.push(curTocItem)
              curTocItem.parent = preTocItem
              preTocItem = curTocItem
              break
            }
            preTocItem = preTocItem.parent

            if (preTocItem === undefined) {
              tocData.push(curTocItem)
              preTocItem = curTocItem
              break
            }
          }
          break
      }

      curLevel = hLevel

      if (heading.id === "") {
        heading.id = titleText.replace(/ /g, "-").toLowerCase()
      }
      preTocItem.id = heading.id
    })

    return tocData
  }

  /**
   * @param {[TocItem]} tocData
   * @return {string}
   * */
  static build(tocData) {
    let result = "<ul>"
    tocData.forEach(toc => {
      result += `<li><a href=#${toc.id}>${toc.text}</a></li>`
      if (toc.children.length) {
        result += `${TOC.build(toc.children)}`
      }
    })
    return result + "</ul>"
  }
}

/**
 * @param {string} text
 * @param {int} level
 * @param {TocItem} parent
 * */
function TocItem(text, level, parent = undefined) {
  this.text = text
  this.level = level
  this.id = undefined
  this.parent = parent
  this.children = []
}

window.onload = () => {
  const content = document.querySelector("#content");

  const headingSet = content.querySelectorAll("h1, h2, h3") // You can also select only the titles you are interested in.
  const tocData = TOC.parse(headingSet)
  
  console.log(tocData)

  const tocHTMLContent = "<nav role='navigation' class='pane subnav toc active'>" + TOC.build(tocData) + "</nav>"
  

  content.insertAdjacentHTML("beforebegin", tocHTMLContent);
}
