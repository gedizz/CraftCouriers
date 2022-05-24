
var zipCodeButton = document.getElementById("zipbutton");
var insideRangeDiv = document.getElementById("zip-inside-range");
var outsideRangeDiv = document.getElementById("zip-outside-range")
var zipExitButton1 = document.getElementById("zip-exit1");
var zipExitButton2 = document.getElementById("zip-exit2");
var zipCodeForm = document.getElementById("zipcode");



const zipCodes = ['55126', '55305', '55488', '55487', '55455', '55112', '55311', '55343', 
'55345', '55369', '55401', '55402', '55403', '55404', '55405', '55406', '55407', '55408', 
'55409', '55410', '55411', '55412', '55413', '55414', '55415', '55416', '55417', '55418', 
'55419', '55421', '55422', '55424', '55426', '55427', '55428', '55429', '55430', '55436', 
'55441', '55442', '55443', '55444', '55445', '55446', '55447', '55454', '55114', '55108', 
'55113', '55450', '55423', '55435', '55439', '55344', '55346', '55316', '55432'];

// Event listener checking if the zipcode button was clicked
zipCodeButton.addEventListener('click', buttonClicked);
zipExitButton1.addEventListener('click', hideElement);
zipExitButton2.addEventListener('click', hideElement);

// Used to hide element when they click the x
function hideElement() {
    insideRangeDiv.style.display = "none";
    outsideRangeDiv.style.display = "none";
}

// When they click the zip code button it will change the style display
function buttonClicked() {

    // If zip is in the zipCodes array then display the appropriate popup
    withinRange = zipCodes.includes(zipCodeForm.value)
    console.log(zipCodeForm.value)

    if (withinRange) {
        insideRangeDiv.style.display = "flex"
        
    } else {
        outsideRangeDiv.style.display = "flex";
    }

    // Display last so changes to div are made prior
   // popupDiv.style.display = "flex";
}



