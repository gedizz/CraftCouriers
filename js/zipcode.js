
var zipCodeButton = document.getElementById("zipbutton");
var popupDiv = document.getElementById("pop-up");
var zipExitButton = document.getElementById("zip-exit");
var zipcodes = ['55126', '55305', '55488', '55487', '55455', '55112', '55311', '55343', 
'55345', '55369', '55401', '55402', '55403', '55404', '55405', '55406', '55407', '55408', 
'55409', '55410', '55411', '55412', '55413', '55414', '55415', '55416', '55417', '55418', 
'55419', '55421', '55422', '55424', '55426', '55427', '55428', '55429', '55430', '55436', 
'55441', '55442', '55443', '55444', '55445', '55446', '55447', '55454', '55114', '55108', 
'55113', '55450', '55423', '55435', '55439', '55344', '55346', '55316', '55432'];

// Event listener checking if the zipcode button was clicked
zipCodeButton.addEventListener('click', buttonClicked);
zipExitButton.addEventListener('click', hideElement);

// Used to hide element when they click the x
function hideElement() {
    var popupDiv = document.getElementById("pop-up");
    popupDiv.style.display = "none";
}

// When they click the zip code button it will change the style display
function buttonClicked() {
    var popupDiv = document.getElementById("pop-up");
    popupDiv.style.display = "flex";
}