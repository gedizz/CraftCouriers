var elements = document.getElementsByName("normalnav");
var navPopup = document.getElementById("nav-popup");
var navPopupExit = document.getElementById("nav-popup-exit")
var faBar = document.getElementById("fapopup");
var screenWidth = window.screen.width

console.log(screenWidth)


faBar.addEventListener('click', navClicked);
navPopupExit.addEventListener('click', navExit);

// Closes the responsive nav popup when the x is clicked
function navExit() {
    navPopup.style.display = "none";
}

// when the responsive <a> fa fa-bar is clicked it will open the mobile nav menu
function navClicked() {
    if (screenWidth < 800) {
        navPopup.style.display = "flex";
    }
}

// Select all normalnav named elements
for (var i = 0; i < elements.length; i++) {
    el = elements[i]
    if (screenWidth < 800) {
        el.style.display = "none";
    } else {
        el.style.display = "flex";
    }
    
}
