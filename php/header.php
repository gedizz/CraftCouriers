<!DOCTYPE html>
<html>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">


    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="customstyl.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--fa fa-bars-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Font Montserrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Sora:wght@200&display=swap" rel="stylesheet">

</head>

<style>
/* Head Nav */

nav {
    display: flex;
    flex-direction: column;
    border: 1px solid black;
    height: 101px;

}

/* The dropdown container */
.dropdown {
    float: left;
    overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
    text-shadow: -2px 2px black;
    font-size: 18px;
    border: none;
    outline: none;
    color: white;
    background-color: inherit;
    font-family: inherit;
    /* Important for vertical align on mobile phones */
    margin: 0;
    /* Important for vertical align on mobile phones */
    text-transform: capitalize;
}

.dropdown:hover .dropbtn {
    background-color: #4A75BA;
}


/* Dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    top: 75px;
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.44),
            rgba(0, 0, 0, 0.44)),
        linear-gradient(180deg, rgba(74, 117, 186, 0.88), rgba(74, 117, 186, 0.92));
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #4A75BA;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

nav .bar {
    display: grid;
    grid-template: repeat(1, auto) / 1fr 1fr;
    grid-template-areas:
        "img nav";
    background-color: hsla(216, 46%, 22%, 1);
    height: auto;
    box-shadow: 0px 0px 100px 5px;
    border-bottom: 1px solid white;
    height: 100px;

}

.headerlogo {
    display: flex;
    align-items: center;
    justify-content: center;
    grid-area: img;

}

.headerlogo img {
    height: 30px;
    padding: 5px;
}

.headerlogo #clogo {
    height: 60px;
    background-color: inherit;
    margin-right: 10px;
}


.headernav {
    display: flex;
    align-items: center;
    justify-content: center;
    grid-area: nav;

}

.headernav a {
    position: relative;
    color: white;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    padding: 14px;
    font-size: 18px;
    text-shadow: -2px 2px black;


}


.headernav a::before {
    content: "";
    position: absolute;
    display: block;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #DE9F38;
    transform: scaleX(0);
    transition: transform 0.5s ease;
}

.headernav a:hover::before {
    transform: scaleX(1);
}

.headernav img {
    height: 50px;
}


.headtext {
    display: flex;
    flex-basis: 75%;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
    letter-spacing: 3px;
    line-height: 1.8;
    margin-top: 100px;


}

.headtext h1 {
    color: white;
    text-shadow: -2px 2px black;
    font-size: 40px;
    text-align: center;
    width: 80%;

}

.headernav #fapopup {
    display: none;
    font-size: 32px;
}

.bar .responsive-nav-popup {
    display: none;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
    border: solid 4px #DE9F38;
    box-shadow: 0px 0px 32px 25px black;
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.64),
            rgba(0, 0, 0, 0.64)),
        linear-gradient(180deg, rgba(74, 117, 186, 0.98), rgba(74, 117, 186, 0.98));
    color: white;
    position: fixed;
    z-index: 100;
    height: 97%;
    width: 95%;
    margin: 0 auto;
    left: 1%;
    top: 1%;

}

.bar .responsive-nav-popup a {
    font-size: 30px;
    padding: 5%;
    color: white;
    text-decoration: none;
    text-transform: uppercase;
}

.bar .responsive-nav-popup img {
    width: 256px;
    height: 175px;
}

.normalnav {
    display: block;
}


@media only screen and (max-width: 1200px) {
    nav {
        background-position: 870px 100px;
    }

    .headerlogo {
        display: flex;
        align-items: center;
        justify-content: center;
        grid-area: img;
    }

    .headerlogo img {
        height: 20px;
        width: auto;
        margin: 5px;
    }

    .headernav #fapopup {
        display: block;
    }

    .headtext {
        margin-top: 0;
    }

    .normalnav {
        display: none;
    }

    .dropdown .dropbtn {
        font-size: 28px;
    }

    .dropdown-content {
        top: unset;
    }
}

@media only screen and (max-width: 405px) {
    nav {
        background-position: 520px 100px;
        height: 60vh;
    }
}

</style>


<nav>
    <div class="bar">

        <div class="headerlogo">
            <a href="https://craft-couriers.com"><img class="normalnav" id="clogo" src="https://www.craft-couriers.com/images/c-logo.png"></a> 
            
            <a href="https://craft-couriers.com"><img src="https://www.craft-couriers.com/images/header-logo.png" alt="craft-couriers.logo" loading="lazy"></a> 
            
        </div>

        <div class="responsive-nav-popup" id="nav-popup">
            <img src="images/responsive-nav-logo.webp" alt="nav-popup-logo.png">
    
            <button class="exitbutton" id="nav-popup-exit">x</button>
            
            <a href="https://craft-couriers.com">Home</a>
            <div class="dropdown">
                <button class="dropbtn">ABOUT US
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="https://www.craft-couriers.com/our-passion/">Our Passion</a>
                  <a href="https://www.craft-couriers.com/about-us/delivery-zone/">Delivery Zone</a>
                  <a href="https://www.craft-couriers.com/faq/">FAQ</a>
                  <a href="https://www.craft-couriers.com/contact-us-2/">Contact Us</a>
                </div>
            </div>

            <a href="https://www.craft-couriers.com/brewery-partners/">Brewery Partners</a>
            <a href="https://www.craft-couriers.com/my-account-2/">My Account</a>

        </div>

        <div class="headernav">
            
            <a href="https://craft-couriers.com" class="normalnav">Home</a>
            <div class="dropdown">
                <button class="dropbtn normalnav">ABOUT US
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="https://www.craft-couriers.com/our-passion/">Our Passion</a>
                  <a href="https://www.craft-couriers.com/about-us/delivery-zone/">Delivery Zone</a>
                  <a href="https://www.craft-couriers.com/faq/">FAQ</a>
                  <a href="https://www.craft-couriers.com/contact-us-2/">Contact Us</a>
                </div>
            </div>
            <a href="https://www.craft-couriers.com/brewery-partners/" class="normalnav">Brewery Partners</a>
            <a href="https://www.craft-couriers.com/my-account-2/" class="normalnav">My Account</a>
            <a href="https://www.craft-couriers.com/cart-2/" class="wcmenucart">
				<i class="fa fa-shopping-cart" aria-hidden="true"></i>
			</a>
            <a id="fapopup"><i class="fa fa-bars"></i></a>
        </div>

        <script>
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




        </script>

    </div>



</nav>

</html>