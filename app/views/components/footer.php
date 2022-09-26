<style>
    .footer-main-div{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 3em 0em;
        background: var(--theme-color-hr);
        color: white;
    }

    .footer-inner-main-div{
        width: 60%;
        display: flex;
        justify-content: space-between;
        font-weight: 100 !important;
    }
    .footer-inner-main-div p{
        font-size: 1.3em;
    }

    .footer-quick-links-div{
        min-width: 20%;
    }

    .footer-quick-links-div ul li,
    .footer-contact-div ul li,
    .footer-social-media-div ul li{
        padding: 0.2em 0em;
        
    }

    .footer-quick-links-div ul li a{
        color: white;
        padding: 0.2em; 
    }

    .footer-quick-links-div ul li a:hover {
        background: ;
    }

    .footer-contact-div .footer-contact-social {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .footer-contact-div .footer-contact-social li{
        margin-right: 0.5em;
        font-size: 1.8em;
        cursor: pointer;
        transition: all 0.2s ease-in;
        opacity: 0.5;
    }

    .footer-contact-div .footer-contact-social li:hover{
        opacity: 1;
    }

    /* .footer-social-media-div,
    .footer-contact-div,
    .footer-quick-links-div{
        width: 33%;
    } */

    .footer-social-media-div ul {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .footer-social-media-div ul li{
        margin-right: 0.5em;
        font-size: 2em;
    }

    .footer-social-media-div ul li button{
        padding: 0.8em 1em;
        background: var(--theme-color-dark);
        border: none;
        border-radius: 1em;
        color: white;
        font-size: 0.5em;
    }

    .footer-payments li{
        opacity: 0.5;
        transition: all 0.2s ease-in-out;
    }

    .footer-payments li:hover{
        opacity: 1;
    }


    .footer-hr{
        height: 1px;
        border: none;
        background: white; 
        width: 4em;
        margin: 0.8em 0em;
    }

    @media only screen and (min-width: 400px) {
        .footer-inner-main-div{
            width: 95%;
            flex-direction: column;
            /* flex-wrap: wrap; */
        }

        /* .footer-quick-links-div{
            min-width: 30%;
        } */

        .footer-social-media-div,
        .footer-contact-div,
        .footer-quick-links-div{
            width: 100%;
            padding: 1em;
        } 

        .footer-social-media-div>ul{
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .footer-payments{
            flex-direction: row !important; 
            flex-wrap: wrap; 
        }


    }

    @media only screen and (min-width: 768px) {
        .footer-inner-main-div{
            width: 95%;
            flex-direction: row;
        }

        .footer-quick-links-div{
            min-width: 30%;
        }

        .footer-social-media-div,
        .footer-contact-div,
        .footer-quick-links-div{
            width: 33%;
        } 
    }

    @media only screen and (min-width: 900px) {
        .footer-inner-main-div{
            width: 95%;
        }

        .footer-quick-links-div{
            min-width: 30%;
        }

        .footer-social-media-div,
        .footer-contact-div,
        .footer-quick-links-div{
            width: 33%;
        } 

    }

    @media only screen and (min-width: 1105px) {
        .footer-inner-main-div{
            width: 95%;
        }

        .footer-social-media-div>ul{
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
    }

    @media only screen and (min-width: 1200px) {
        .footer-inner-main-div{
            width: 95%;
        }
    }

    @media only screen and (min-width: 1250px) {
        .footer-inner-main-div{
            width: 90%;
        }
    }

    @media only screen and (min-width: 1500px) {
        .footer-inner-main-div{
            width: 80%;
        }
    }

    @media only screen and (min-width: 1620px) {
        .footer-inner-main-div{
            width: 70%;
        }
    }

    @media only screen and (min-width: 1890px) {
        .footer-inner-main-div{
            width: 60%;
        }
    }

</style>

<section>
    <div class="footer-main-div">
        <div class="footer-inner-main-div">
            <div class="footer-quick-links-div">
                <p>Quick Links</p>
                <hr class="footer-hr">
                <br>
                <ul>
                    <li><a href="" class="">Contact Us</a></li>
                    <li><a href="" class="">About</a></li>
                    <li><a href="" class="">Terms & Conditions</a></li>
                    <li><a href="" class="">Privacy Policy</a></li>
                    <li><a href="" class="">Blog</a></li>
                </ul>
            </div>
            <div class="footer-contact-div">
                <p>Contact</p>
                <hr class="footer-hr">
                <br>
                <ul>
                    <li><i class="fa-solid fa-house"></i> Plot no. 24, Industrial & Business park, Phase-1, Chandigarh 160002</li>
                    <li><i class="fa-solid fa-envelope"></i> info@abcd.com</li>
                    <li><i class="fa-solid fa-phone"></i> +91 9999999999</li>
                </ul>

                <br><br>

                <p>Follow Us</p>
                <hr class="footer-hr">
                <br>
                <ul class="footer-contact-social">
                    <li><i class="fa-brands fa-facebook"></i></li>
                    <li><i class="fa-brands fa-instagram"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                </ul>
            </div>
            <div class="footer-social-media-div">
                <p>Download App</p>
                <hr class="footer-hr">
                <br>
                <ul>
                    <li><button type="button"><i class="fa-brands fa-apple"></i> &nbsp; App Store</button></li>
                    <li><button type="button"><i class="fa-brands fa-android"></i> &nbsp; Google Play</button></li>
                </ul>
                
                <br><br>

                <p>Payments</p>
                <hr class="footer-hr">
                <br>
                <ul class="footer-payments">
                    <li><i class="fa-brands fa-cc-visa"></i></li>
                    <li><i class="fa-brands fa-cc-mastercard"></i></li>
                    <li><i class="fa-brands fa-cc-paypal"></i></li>
                    <li><i class="fa-brands fa-cc-apple-pay"></i></li>
                    <li><i class="fa-brands fa-cc-amazon-pay"></i></li>
                </ul>
            </div>
        </div>
    </div>
</section>