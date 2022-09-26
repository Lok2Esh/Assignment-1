
<style type="text/css">
    .header-menu{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .header-menu-inner{
        width: 60%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* padding: 0.5em 3em; */
    }

    .header-menu-div ul{
        list-style: none;
        margin: 1em 0em;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        /* flex-direction: column; */
    }

    .header-menu-div ul li a{
        padding: 0.5em 1em;
        font-weight: bold;
        transition: all 0.2s ease;
    }

    .header-menu-div ul li a:hover{
        background: var(--theme-color-font);
        color: white !important;
    }

    .header-profile-div{
        width:auto ;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .header-profile-div a{
        padding: 0 1em;
    }

    .header-profile-div a:hover{
        color: var(--theme-color-font);
    }

    hr{
        width: 100%;
        height: 0.5em;
        background-color: var(--theme-color-hr);
        margin-bottom: 1em;
    }

    .header-menu-btn{
        display: none;
    }

    

    @media only screen and (min-width: 400px){
        .header-menu-inner{
            width: 98%;
            flex-direction: column;
        }

        .header-menu-tab{
            padding: 0em 1em;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-menu-div,
        .header-profile-div{
            display: none;
        }

        .header-menu-div>ul{
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-direction: column !important;
        }

        .header-menu-div>ul>li{
            margin: 0.2em 0em;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-menu-div>ul>li>a{
            width: 98%;
            text-align: center;
        }

        .header-menu-btn{
            display: flex;
        }

        .header-menu-div{
            width: 100%;
        }
        
        .header-profile-div{
            align-items: center;
            justify-content: center;
            /* bottom: 1em;  */
        }
        
        hr{
            margin-top: 1em;
        }
    } 

    @media only screen and (min-width: 768px) {
        .header-menu-inner{
            width: 98%;
            flex-direction: column;
        }

        .header-menu-tab{
            padding: 0em 1em;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-menu-div,
        .header-profile-div{
            /* display: flex; */
            /* width: 100%; */
        }

        .header-menu-div>ul{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-direction: column !important;
        }

        .header-menu-div>ul>li{
            margin: 0.2em 0em;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-menu-div>ul>li>a{
            width: 98%;
            text-align: center;
        }

        .header-profile-div{
            align-items: center;
            justify-content: center;
            /* bottom: 1em;  */
        }

        .header-menu-btn{
            display: flex;
        }
    }

    @media only screen and (min-width: 900px) {
        .header-menu-inner{
            width: 95%;
            flex-direction: row;
        }

        .header-menu-div>ul{
            width: auto;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-direction: row !important;
        }

        .header-menu-div>ul>li{
            margin: 0.2em 0em;
            width: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-menu-div>ul>li>a{
            width: auto;
            text-align: center;
        }

        .header-menu-div,
        .header-profile-div{
            display: flex !important;
            width: auto;
        }

        .header-menu-btn{
            display: none;
        }

        .header-menu-tab{
            width: auto;
        }

        hr{
            margin-top: 0;
        }
    }

    @media only screen and (min-width: 1200px) {
        .header-menu-inner{
            width: 95%;
        }
    }

    @media only screen and (min-width: 1250px) {
        .header-menu-inner{
            width: 90%;
        }
    }

    @media only screen and (min-width: 1500px) {
        .header-menu-inner{
            width: 80%;
        }
    }

    @media only screen and (min-width: 1620px) {
        .header-menu-inner{
            width: 70%;
        }
    }

    @media only screen and (min-width: 1890px) {
        .header-menu-inner{
            width: 60%;
        }
    }
</style>


<section>
    <div class="header-menu">
        <div class="header-menu-inner">
            <div class="header-menu-tab">
                <div class="header-menu-btn">
                    <a href="" class="nav-toggle-btn"><i class="fa-solid fa-bars-staggered"></i></a>
                </div>
                <div class="header-logo-div">
                    <div class="">
                        <img src="images/logo.png" alt="" width="160px" height="" />
                    </div>
                </div>
            </div>
            <div class="header-menu-div">
                <ul>
                    <li>
                        <a href="home">Home</a>
                    </li>
                    <li><a href="">Used Cars for Sale</a></li>
                    <li><a href="add-product">Add Product</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="header-profile-div">
                <a href="user-login" class="header-btn-login"><i class="fa-solid fa-user"></i> Login</a>
                <a href="" class="header-btn-notification"><i class="fa-solid fa-bell"></i></a>
            </div>
        </div>
        <hr>
    </div>
</section>



<script type="text/javascript">
$(document).ready(function() {
    $('.nav-toggle-btn').click(function (e) { 
        e.preventDefault();
        
        $('.header-menu-div, .header-profile-div').slideToggle(800);
    });

    $('header-btn-login').click(function () {
        
    })
});
</script>