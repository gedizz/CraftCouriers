
/*
var today = new Date();
var hourNow = today.getHours();
var greeting;


if (hourNow > 18) {
    greeting = "Good evening!";
} else if (hourNow > 12) {
    greeting = "Good afternoon!";
} else if (hourNow > 0) {
    greeting = "Good morning!";
} else {
    greeting = "Welcome!";
}

updateMessage("ttt", "asdasdasd");
updateMessage("test", "this was the test para");

function updateMessage(id, msg) {
    el = document.getElementById(id);
    el.textContent = msg
}
/*



//  object creation
/* 
var hotel = new Object();
hotel.name = "quay";
hotel.rooms = 40;
hotel.booked = 25;
hotel.checkAvailability = function() {
    return this.rooms - this.booked;
};

console.log(hotel.checkAvailability())
*/

// Literal object creation
/*
var other = {
    name: "quay",
    rooms: 40,
    booked: 15,

    checkAvail: function() {
        return this.rooms - this.booked;
    }
};
console.log(other.checkAvail())
*/

// Constructor notation
/*
function Hotel(name, rooms, booked) {
    this.name = name;
    this.rooms = rooms;
    this.booked = booked;
    this.checkAvail = function() {
        return this.rooms - this.booked;
    };
}

var myHotel = new Hotel("My Hotel", 600, 513);
delete myHotel.booked;

console.log(myHotel.checkAvail())
*/
// creating and using classes
/*
class Rectangle {
    constructor(height, width) {
      this.height = height;
      this.width = width;
      this.two = 2;

      this.calc = function() {
          return (this.height * this.width) / this.two;
      };
    }
  }

var rectangle = new Rectangle(45, 12);

console.log(rectangle.calc())

*/