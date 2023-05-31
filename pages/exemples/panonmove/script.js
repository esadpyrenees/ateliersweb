var content = document.getElementById("content");
var container = document.getElementById("container");
var offsetX, offsetY, containerWidth, containerHeight, maxOffsetX, maxOffsetY, containerTop, containerLeft;

// additional size (the content size is at least 300px larger thant its container)
var additionalSize = 500;

function init() {
    return new Promise(function (resolve) {
      calculateSizes();
      resolve();
    });
}

function calculateSizes() {
    // compute container size and position
    var containerRect = container.getBoundingClientRect();
    containerWidth = containerRect.width;
    containerHeight = containerRect.height;
    containerTop = containerRect.top;
    containerLeft = containerRect.left;

    // compute image (content) size
    var contentRect = content.getBoundingClientRect();
    var contentWidth = contentRect.width;
    var contentHeight = contentRect.height;

    // compute max offset 
    maxOffsetX = contentWidth - containerWidth;
    maxOffsetY = contentHeight - containerHeight;

    // center image
    offsetX = maxOffsetX / 2;
    offsetY = maxOffsetY / 2;
    content.style.transform = "translate(" + -offsetX + "px, " + -offsetY + "px)";
}

function updateImagePosition(event) {
    // take container position into account
    var mouseX = event.clientX - containerLeft;
    var mouseY = event.clientY - containerTop;

    // compute offsets
    offsetX = (mouseX / containerWidth) * maxOffsetX;
    offsetY = (mouseY / containerHeight) * maxOffsetY;

    content.style.transform = "translate(" + -offsetX + "px, " + -offsetY + "px)";
}

// init, then listen to mousemove
init().then(function () {
    container.addEventListener("mousemove", updateImagePosition);
});

// on resize
window.addEventListener("resize", function (e) {
  calculateSizes();
});
