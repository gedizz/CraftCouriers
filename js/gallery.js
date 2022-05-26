var galleryContainer = document.getElementById("gallery-images-container");
var leftArrow = document.getElementById("left-arrow");
var rightArrow = document.getElementById("right-arrow");
var galleryImages = galleryContainer.children;
var galleryDots = document.getElementById("dots");

var currentlyDisplayedImage = 0;

leftArrow.addEventListener("click", moveLeft);
rightArrow.addEventListener("click", moveRight);

// Hides images on load that are not supposed to be displayed
for (var i = 0; i < galleryImages.length; i++) {
    image = galleryImages[i]
    if (i != currentlyDisplayedImage) {
        image.style.display = "none";
    }
}

// Adds the appropriate amount of dots beneath the gallery on page load
for (var i = 0; i < galleryImages.length; i++) {
    // add child to galleryDots with the id of i
    // <i class="fa fa-circle" aria-hidden="true"></i>
    var newElement = document.createElement("i");
    newElement.setAttribute("class", "fa fa-circle");
    newElement.setAttribute("aria-hidden", "true");
    newElement.setAttribute("id", "dot" + i);
    newElement.style.padding = "3px"

    // On page load set the first dot opacity to 1 - all others are 0.5
    if (i == currentlyDisplayedImage) {
        newElement.style.opacity = "1";
    } else {
        newElement.style.opacity = "0.5";
    }
    
    galleryDots.appendChild(newElement);
}

// Updates opacity of dot based on current image
function updateDotOpacity() {
    // if current image matches id of dot then update opacity to 1
    for (var i = 0; i < galleryImages.length; i++) {
        dotElement = document.getElementById("dot" + i)
        if (i == currentlyDisplayedImage) {
            dotElement.style.opacity = "1.0";
        } else {
            dotElement.style.opacity = "0.5";
        }
    }

}


// Moves the gallery to the left
function moveLeft() {
    for (var i = 0; i < galleryImages.length; i++) {
        image = galleryImages[i]
        if (i == currentlyDisplayedImage) {
            image.style.display = "none";
            nextImage = galleryImages[i - 1]
            // if image is first then reset currentlyDisplayedImage to lastelement in array here
            if (currentlyDisplayedImage == 0) {
                nextImage = galleryImages[galleryImages.length - 1]
                currentlyDisplayedImage = galleryImages.length - 1
            } else {
                currentlyDisplayedImage -= 1
                
            }

            updateDotOpacity()
            nextImage.style.display = "block";
            break;
            
        }
    }
}

// Moves the gallery to the right
function moveRight() {
    for (var i = 0; i < galleryImages.length; i++) {
        image = galleryImages[i]
        if (i == currentlyDisplayedImage) {
            image.style.display = "none";
            nextImage = galleryImages[i + 1]
            // if image is last then reset currentlyDisplayedImage to 0 here
            if (currentlyDisplayedImage == galleryImages.length - 1) {
                nextImage = galleryImages[0]
                currentlyDisplayedImage = 0
            } else {
                currentlyDisplayedImage += 1
            }
            updateDotOpacity()
            nextImage.style.display = "block";
            break;
            
        }
    }
}
