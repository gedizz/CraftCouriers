elements = document.getElementsByName("normalnav");
responsiveNav = document.getElementById("responsivenav");
screenWidth = window.screen.width
console.log(screenWidth)

// Select all normalnav named elements
for (var i = 0; i < elements.length; i++) {
    el = elements[i]
    if (screenWidth < 800) {
        el.style.display = "none";
    } else {
        el.style.display = "flex";
    }
    
}
