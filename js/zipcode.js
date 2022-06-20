
var body = document.querySelector("body");
var zipCodeButton = document.getElementById("zipbutton");
var insideRangeDiv = document.getElementById("zip-inside-range");
var outsideRangeDiv = document.getElementById("zip-outside-range")
var zipExitButton1 = document.getElementById("zip-exit1");
var zipExitButton2 = document.getElementById("zip-exit2");
var zipCodeForm = document.getElementById("zipcode");



/* To add new - enter 'zipcode' Comma and space must be placed after 
   unless it's last entry 
   in array
*/
const zipCodes = ['55126', '55305', '55488', '55487', '55455', '55112', '55311', '55343',
    '55345', '55369', '55401', '55402', '55403', '55404', '55405', '55406', '55407', '55408',
    '55409', '55410', '55411', '55412', '55413', '55414', '55415', '55416', '55417', '55418',
    '55419', '55421', '55422', '55424', '55426', '55427', '55428', '55429', '55430', '55436',
    '55441', '55442', '55443', '55444', '55445', '55446', '55447', '55454', '55114', '55108',
    '55113', '55450', '55423', '55435', '55439', '55344', '55346', '55316', '55432'];

// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = { 37: 1, 38: 1, 39: 1, 40: 1 };

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


// Event listener checking if the zipcode button was clicked
zipCodeButton.addEventListener('click', buttonClicked);
zipExitButton1.addEventListener('click', hideElement);
zipExitButton2.addEventListener('click', hideElement);

// Used to hide element when they click the x
function hideElement() {
    insideRangeDiv.style.display = "none";
    outsideRangeDiv.style.display = "none";
    enableScroll()
}

// When they click the zip code button it will change the style display
function buttonClicked() {

    // If zip is in the zipCodes array then display the appropriate popup
    withinRange = zipCodes.includes(zipCodeForm.value)
    console.log(zipCodeForm.value)

    if (withinRange) {
        insideRangeDiv.style.display = "flex"
        disableScroll()

    } else {
        outsideRangeDiv.style.display = "flex";
        disableScroll()
    }

    // Display last so changes to div are made prior
    // popupDiv.style.display = "flex";
}



