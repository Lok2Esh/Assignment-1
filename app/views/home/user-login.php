<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap-5.0.2-dist/js/bootstrap.min.js" rel="stylesheet"> -->
    <script src="assets/jquery/jquery-3.6.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="assets/fontawesome-free-6.2.0/css/all.min.css">
    <script src="assets/fontawesome-free-6.2.0/js/all.min.js"></script>


    <style type="text/css">
    .header-login-outer-div{
        width: 100%;
        height: auto;
        /* position: fixed; */
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5em 1em;
        margin-bottom: 1em;
    }

    /* .header-login-inner-back-div{
        position: absolute;
        background: var(--theme-color-transparent);
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
    } */

    .header-login-inner-div{
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        z-index: 99999;
        background: white;
        padding: 1.5em;
        box-shadow: 0em 0.2em 0.5em 0em rgba(0, 0, 0, 0.2);
    }

    .header-login-inner-div>ul{
        display: flex;

    }

    .header-login-inner-div>ul li a{
        padding: 0.5em 1em;
        border-left: 1px solid var(--theme-color-transparent);
        border-right: 1px solid var(--theme-color-transparent);
        border-top: 1px solid var(--theme-color-transparent);
        border-radius: 0.2em;
        margin: 0.2em;
        transition: all 0.2s ease-in-out;
    }

    .header-login-inner-div>ul li a:hover,
    .login-active-btn{
        border: 1px solid white !important;
        border-bottom: 1px solid var(--theme-color-hr) !important;
    }

    .login-div,
    .register-div{
        width: 100%;
    }

    form{
        width: 100%;
    }

    .login-form,
    .register-form{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .login-form>div,
    .register-form>div{
        width: 60%;
        display: flex; 
        align-items: center;

    }

    .login-form>div a,
    .register-form>div a{
        padding: 0.5em 0.5em;
        background: var(--theme-color-a);
        color: white;
        text-align: center;
        border: 1px solid var(--theme-color-a);
        border-radius: 0.2em;
        font-size: 1em;
        width: 3em;
        margin-left: -3em;
    }

    .login-form>div>input[type="text"],
    .login-form>div>input[type="password"],
    .register-form>div>input[type="text"],
    .register-form>div>input[type="password"]{
        width: 100%;
        padding: 0.5em 1em;
        padding-right: 4em;
        margin: 0.5em 0em;
        font-size: 1em;
        outline: none;
        
    }

    .login-form>div>input[type="text"]:focus,
    .login-form>div>input[type="password"]:focus,
    .register-form>div>input[type="text"]:focus,
    .register-form>div>input[type="password"]:focus{
        border: 1px solid var(--theme-color-dark);
    }

    

    .login-form>button,
    .register-form>button{
        width: 40%;
        padding: 0.5em 1em;
        font-size: 1em;
        border: none;
        background: var(--theme-color-hr);
        color: white;
        border-radius: 0.2em;
        font-weight: lighter;
        margin: 0.5em 0em;
    }



    .header-login-hr{
        height: 0.1em;
        margin-top: 0.45em;
        opacity: 0.2;
    }

    @media only screen and (min-width: 400px) {
        .header-login-inner-div{
            width: 100%;
        }

        .login-form>div,
        .register-form>div{
            width: 95%;
        }

        .login-form>button,
        .register-form>button{
            width: 65%;
        }
    }

    @media only screen and (min-width: 768px) {
        .header-login-inner-div{
            width: 90%;
        }

        .login-form>div,
        .register-form>div{
            width: 80%;
        }

        .login-form>button,
        .register-form>button{
            width: 50%;
        }
    }

    @media only screen and (min-width: 900px) {
        .header-login-inner-div{
            width: 75%;
        }

        .login-form>div,
        .register-form>div{
            width: 60%;
        }

        .login-form>button,
        .register-form>button{
            width: 40%;
        }
    }

    @media only screen and (min-width: 1200px) {
        .header-login-inner-div{
            width: 75%;
        }
    }

    @media only screen and (min-width: 1250px) {
        .header-login-inner-div{
            width: 60%;
        }
    }

    @media only screen and (min-width: 1500px) {
        .header-login-inner-div{
            width: 60%;
        }
    }

    @media only screen and (min-width: 1620px) {
        .header-login-inner-div{
            width: 60%;
        }
    }

    @media only screen and (min-width: 1890px) {
        .header-login-inner-div{
            width: 50%;
        }
    }
</style>
</head>
<body>


<?php require_once('../app/views/components/header.php'); ?>

<section>
    <div class="header-login-outer-div">
        <div class="header-login-inner-back-div"></div>
        <div class="header-login-inner-div border">
            <ul>
                <li><a class="login-active-btn" href="" id="menu-login-btn">Login Here</a></li>
                <li><a href="" id="menu-register-btn">Register Here</a></li>
            </ul>

            <hr class="header-login-hr">
            <form method="POST" action="app/controller/c-user-register.php">
            <div class="login-div header-user">
                <div class="login-form">
                        <div class="pass-input"><input type="text" class="login-username border" name="luser" placeholder="Username"> <a href="" class="clear-text"><i class="fa-solid fa-xmark"></i></a></div>
                        <div class="pass-input"><input type="password" class="login-password border" name="lpass" placeholder="Password"> <a href="" class="show-pass"><i class="fa-solid fa-eye"></i></a></div>
                        <button class="login-btn" name="login-btn" type="button">Login</button>
                    
                </div>
            </div>

            <div class="register-div header-user">
                <div class="register-form">
                    <!-- <form method="post" action=""> -->
                        <div class="pass-input"><input type="text" class="register-name border" name="rname" placeholder="Name"> <a href="" class="clear-text"><i class="fa-solid fa-xmark"></i></a></div>
                        <div class="pass-input"><input type="text" class="register-username border" name="ruser" placeholder="Username"> <a href="" class="clear-text"><i class="fa-solid fa-xmark"></i></a></div>
                        <div class="pass-input"><input type="password" class="register-password border" name="rpass" placeholder="Password"> <a href="" class="show-pass"><i class="fa-solid fa-eye"></i></a></div>
                        <div class="pass-input"><input type="password" class="register-con-password border" name="rconpass" placeholder="Confirm Password"> <a href="" class="show-pass"><i class="fa-solid fa-eye"></i></a></div>
                        <button class="register-btn" name="reg-btn" type="button">Register</button>
                    <!-- </form> -->
                </div>
            </div>
            </form>

        </div>
    </div>
</section>

<?php
        require_once('../app/views/components/footer.php');
    ?>

    

</body>
</html>

<script>
    $('.header-user').hide();
    $('.login-div').show();

    $(document).ready(function() {
        $('.header-login-inner-div ul li a').click(function(e){
            e.preventDefault();

            if($(this).text()=="Login Here"){
                $('.login-div').show();
                $('.register-div').hide();
            }else if($(this).text()=="Register Here"){
                $('.login-div').hide();
                $('.register-div').show();
            }

            
        })
    })
    
</script>

<script type="text/javascript">
    $('.clear-text').click(function (e) { 
            e.preventDefault();

            $(this).siblings().val('');
    });

    $('.show-pass').click(function (e) { 
        e.preventDefault();

        // console.log($(this).siblings().attr('type'));

        if($(this).siblings().attr('type') == 'password'){
            $(this).siblings().attr('type','text');
        }else{
            $(this).siblings().attr('type','password');
        }
    });

    $('.header-login-inner-div>ul li a').click(function () { 
        
        $(".header-login-inner-div ul li a").removeClass('login-active-btn');
            $(this).addClass('login-active-btn');
    });
</script>

<!-- data send to database and fetch code starts -->




<script type="text/javascript">

    $(document).ready(function() {
        $('.register-btn').click(function() {
            // console.log("hello");

            var name = $('.register-name').val();
            var username = $('.register-username').val();
            var password = $('.register-password').val();
            var con_pass = $('.register-con-password').val();

            if(password == con_pass){
                // console.log(rdata)

                $.ajax({
                    method: "POST",
                    url: "c-user-register",
                    data: {
                        name : name,
                        username : username,
                        password : password
                    },
                    cache: false,
                    success: function (response,message) {
                        
                        alert(response)
                    }
                });
            }else{
                alert("Password is not Matched");
            }
            
        })
    })

</script>

<script type="text/javascript">
    $('.login-btn').click(function() {
            // console.log("hello");

            var username = $('.login-username').val();
            var password = $('.login-password').val();

            // if(password == con_pass){
            //     // console.log(rdata)

                $.ajax({
                    method: "POST",
                    url: "c-user-login",
                    data: {
                        user : username,
                        pass : password
                    },
                    cache: false,
                    success: function (response,message) {
                        console.log(response);
                        alert(response)
                        // console.log(message);
                    }
                });
                // console.log("end");
            // }else{
            //     alert("Password is not Matched");
            // }
            
        })
</script>

