var elements = document.getElementsByName("normalnav");
var navPopup = document.getElementById("nav-popup");
var navPopupExit = document.getElementById("nav-popup-exit")
var faBar = document.getElementById("fapopup");
var screenWidth = window.screen.width


// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
    window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
        get: function () { supportsPassive = true; }
    }));
} catch (e) { }

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';


//  disable scrolling while in popup
function disableScroll() {
    window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
    window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
    window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
    window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

//  enable scrolling when out of popup
function enableScroll() {
    window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
    window.removeEventListener('touchmove', preventDefault, wheelOpt);
    window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}


faBar.addEventListener('click', navClicked);
navPopupExit.addEventListener('click', navExit);

// Closes the responsive nav popup when the x is clicked
function navExit() {
    navPopup.style.display = "none";
    enableScroll()
}

// when the responsive <a> fa fa-bar is clicked it will open the mobile nav menu
function navClicked() {
    if (screenWidth < 1200) {
        navPopup.style.display = "flex";
        disableScroll()
    }
}

// Select all normalnav named elements
// for (var i = 0; i < elements.length; i++) {
//     el = elements[i]
//     if (screenWidth < 1200) {
//         el.style.display = "none";
//     } else {
//         el.style.display = "flex";
//     }

// }
