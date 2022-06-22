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
    /* Footer */
    footer {
        background-color: #1E3251;
        color: #DE9F38;

        display: grid;
        grid-template: repeat(2, auto) / repeat(2, auto);
        grid-template-areas:
            "logo info"
            "mail socials";

        row-gap: 1rem;
        column-gap: 3rem;

        align-items: center;
        justify-content: space-between;
        padding: 1.25rem 7rem;
    }

    footer #footlogo {
        grid-area: logo;
        display: flex;
        justify-self: flex-start;
    }

    footer #infotext {
        grid-area: info;
        display: flex;
        flex-direction: column;
        height: 70%;
        justify-content: space-around;
    }

    footer #email {
        grid-area: mail;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1rem;
    }

    footer #email a {
        color: #DE9F38;
    }

    footer #infotext h3 {
        text-align: center;
        font-size: 1.25rem;
        padding: .3em 0;
    }

    footer #logo-row {
        grid-area: socials;
        display: flex;
        justify-content: space-around;
        padding: 0 2rem;
    }

    footer #footlogo img {
        max-width: 400px;
        width: 100%;
    }

    footer #logo-row img {
        height: 32px;
        width: 32px;
        opacity: 0.3;
    }

    footer #logo-row img:hover {
        opacity: 1;
    }

    /* Temporary fix to fix overflow */
    @media only screen and (max-width: 1180px) {
        footer {
            padding: .75rem 2rem;
        }
    }

    @media only screen and (max-width: 800px) {
        footer {
            padding: 0;
            display: grid;
            grid-template: repeat(3, auto) / 30% 1fr;
            grid-template-areas: 
                "logo txt"
                "logo email"
                "logo socials";
            
            column-gap: 1.5rem;

            padding: 0 1rem;
        }

        footer #footlogo {
            grid-area: logo;
        }

        footer #infotext {
            grid-area: txt;
            padding-top: .5rem;
        }

        footer #infotext h3 {
            font-size: .8rem;
        }

        footer #email {
            grid-area: email;
            padding-bottom: .5rem;
        }

        footer #logo-row {
            grid-area: socials;
            padding-bottom: .5rem;
        }
    }

    @media only screen and (max-width: 600px) {
        footer {
            grid-template: repeat(3, auto) / 50% 1fr;
            grid-template-areas: 
                "logo txt"
                "logo txt"
                "email socials"; 
        }

        footer #footlogo {
            padding-top: 1em;
        }

        footer #infotext h3,
        footer #email {
            font-size: .65rem;
        }

        footer #logo-row {
            padding: 0;
            padding-bottom: 1em;
            justify-content: space-between;
        }

        footer #logo-row a img {
            width: 24px;
            height: 24px;
        }
    }

    @media only screen and (max-width: 405px) {
        footer {
            grid-template: repeat(2, auto) / 1fr 1fr;
            grid-template-areas: 
                "logo socials"
                "logo email"; 
        }

        footer #infotext {
            display: none;
        }

        footer #logo-row {
            margin-top: 40px;
        }

        footer #logo-row img {
            opacity: 1;
        }

        footer #email {
            font-size: .5rem;

        }
    }

</style>
<footer>
    <div id="footlogo">
        <img src="https://www.craft-couriers.com/images/footer-logo.png">
    </div>
    <div id="infotext">
        <h3>Delivery Hours: Monday-Sunday 5:00pm-7:00pm</h3>
        <h3>Must be home and able to show a 21+ ID</h3>
        <h3>All orders placed after 4:00pm will be delivered next day</h3>
    </div>
    <p id="email">Contact us:&nbsp;<a href="mailto:info@craft-couriers.com">info@craft-couriers.com</a></p>
    <div id="logo-row">
        <a href="https://www.facebook.com/Craft-Couriers-112810710646506"><img id="fbook" src="images/facebook-logo.png"></a>
        <a href="https://twitter.com/craftcouriers"><img id="twit" src="images/twitter-logo.png"></a>
        <a href="https://www.linkedin.com/in/jeramygeditz"><img id="linkedin" src="images/linkedin-logo.png"></a>
        <a href="https://www.instagram.com/craftcouriers/"><img id="insta" src="images/instagram-logo.png"></a>
    </div>
</footer>

</html>