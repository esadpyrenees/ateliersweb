var image = document.getElementById("content");
var container = document.getElementById("container");
var offsetX, offsetY, containerWidth, containerHeight, maxOffsetX, maxOffsetY, containerTop, containerLeft;

// additional size (the content size is at least 300px larger thant its container)
var additionalSize = 500;

function init() {
    return new Promise(function (resolve) {
        if (image.complete) {
            calculateImageSize();
            resolve();
        } else {
            image.onload = function () {
                calculateImageSize();
                resolve();
            };
        }
    });
}

function calculateImageSize() {
    // compute container size and position
    var rect = container.getBoundingClientRect();
    containerWidth = rect.width;
    containerHeight = rect.height;
    containerTop = rect.top;
    containerLeft = rect.left;

    // compute image (content) size
    var imageRatio = image.naturalWidth / image.naturalHeight;
    var imageWidth = containerWidth + additionalSize;
    var imageHeight = containerHeight + additionalSize;

    if (imageWidth / imageHeight > imageRatio) {
        imageHeight = imageWidth / imageRatio;
    } else {
        imageWidth = imageHeight * imageRatio;
    }

    // set image size
    image.style.width = imageWidth + "px";
    image.style.height = imageHeight + "px";

    // compute max offset 
    maxOffsetX = imageWidth - containerWidth;
    maxOffsetY = imageHeight - containerHeight;

    // center image
    offsetX = maxOffsetX / 2;
    offsetY = maxOffsetY / 2;
    image.style.transform = "translate(" + -offsetX + "px, " + -offsetY + "px)";
}

function updateImagePosition(event) {
    // take container position into account
    var mouseX = event.clientX - containerLeft;
    var mouseY = event.clientY - containerTop;

    // compute offsets
    offsetX = (mouseX / containerWidth) * maxOffsetX;
    offsetY = (mouseY / containerHeight) * maxOffsetY;

    image.style.transform = "translate(" + -offsetX + "px, " + -offsetY + "px)";
}

// init, then listen to mousemove
init().then(function () {
    container.addEventListener("mousemove", updateImagePosition);
});

// on resize
window.addEventListener("resize", function (e) {
    calculateImageSize();
});
