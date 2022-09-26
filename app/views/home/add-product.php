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
    .header-addpro-outer-div{
        width: 100%;
        height: auto;
        /* position: fixed; */
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5em 1em;
        margin-bottom: 1em;
    }

    .header-addpro-inner-div{
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

    form{
        width: 100%;
    }

    .addpro-form,
    .addpro-form{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .addpro-form>div,
    .addpro-form>div{
        width: 60%;
        display: flex; 
        align-items: center;

    }

    .addpro-form>div a,
    .addpro-form>div a{
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

    .addpro-form>div>input[type="text"],
    .addpro-form>div>input[type="file"]{
        width: 100%;
        padding: 0.5em 1em;
        padding-right: 4em;
        margin: 0.5em 0em;
        font-size: 1em;
        outline: none;
        
    }

    .addpro-form>div>input[type="text"]:focus,
    .addpro-form>div>input[type="file"]:focus{
        border: 1px solid var(--theme-color-dark);
    }

    

    .addpro-form>button,
    .addpro-form>button{
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



    .header-addpro-hr{
        height: 0.1em;
        margin-top: 0.45em;
        opacity: 0.2;
    }

    @media only screen and (min-width: 400px) {
        .header-addpro-inner-div{
            width: 100%;
        }

        .addpro-form>div,
        .addpro-form>div{
            width: 95%;
        }

        .addpro-form>button,
        .addpro-form>button{
            width: 65%;
        }
    }

    @media only screen and (min-width: 768px) {
        .header-addpro-inner-div{
            width: 90%;
        }

        .addpro-form>div,
        .addpro-form>div{
            width: 80%;
        }

        .addpro-form>button,
        .addpro-form>button{
            width: 50%;
        }
    }

    @media only screen and (min-width: 900px) {
        .header-addpro-inner-div{
            width: 75%;
        }

        .addpro-form>div,
        .addpro-form>div{
            width: 60%;
        }

        .addpro-form>button,
        .addpro-form>button{
            width: 40%;
        }
    }

    @media only screen and (min-width: 1200px) {
        .header-addpro-inner-div{
            width: 75%;
        }
    }

    @media only screen and (min-width: 1250px) {
        .header-addpro-inner-div{
            width: 60%;
        }
    }

    @media only screen and (min-width: 1500px) {
        .header-addpro-inner-div{
            width: 60%;
        }
    }

    @media only screen and (min-width: 1620px) {
        .header-addpro-inner-div{
            width: 60%;
        }
    }

    @media only screen and (min-width: 1890px) {
        .header-addpro-inner-div{
            width: 50%;
        }
    }
</style>
</head>
<body>


<?php require_once('../app/views/components/header.php'); ?>

<section>
    <div class="header-addpro-outer-div">
        <div class="header-addpro-inner-back-div"></div>
        <div class="header-addpro-inner-div border">
            <h3>ADD PRODUCT HERE</h3>

            <hr class="header-addpro-hr">
            <form method="POST">
            <div class="addpro-div header-user">
                <div class="addpro-form">
                    <!-- <form method="post" action=""> -->
                        <div class="add-pro-input-div"><input type="text" class="addpro-name border" name="rname" placeholder="Product Name"> <a href="" class="clear-text"><i class="fa-solid fa-xmark"></i></a></div>
                        <div class="add-pro-input-div"><input type="text" class="addpro-price border" name="ruser" placeholder="Product Price"> <a href="" class="clear-text"><i class="fa-solid fa-xmark"></i></a></div>
                        <div class="add-pro-input-div"><input type="text" class="addpro-reg-no border" name="rpass" placeholder="Product addproation Number"> <a href="" class="clear-text"><i class="fa-solid fa-xmark"></i></a></div>
                        <div class="add-pro-input-div"><input type="text" class="addppro-insur-type border" name="rconpass" placeholder="Product Insurance Type"> <a href="" class="clear-text"><i class="fa-solid fa-xmark"></i></a></div>
                        <div class="add-pro-input-div"><input type="text" class="addppro-hub-city border" name="rconpass" placeholder="Product Hub City"> <a href="" class="clear-text"><i class="fa-solid fa-xmark"></i></a></div>
                        <div class="add-pro-input-div"><input type="file" class="addppro-image border" name="rconpass" placeholder="Product Image"> <a href="" class="clear-text"><i class="fa-solid fa-xmark"></i></a></div>
                        <button class="addpro-btn" name="addpro-btn" type="button">Add </button>
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

<script type="text/javascript">
    $('.clear-text').click(function (e) { 
            e.preventDefault();

            $(this).siblings().val('');
    });
</script>

<!-- data send to database and fetch code starts -->

<script type="text/javascript">

    $(document).ready(function() {
        $('.addpro-btn').click(function() {
            // console.log("hello");

            var pro_name = $('.addpro-name').val();
            var pro_price = $('.addpro-price').val();
            var pro_reg_no = $('.addpro-reg-no').val();
            var pro_insur_no = $('.addppro-insur-type').val();
            var pro_hub_city = $('.addppro-hub-city').val();
            var pro_img = $('.addppro-image').val();
        

            if(password == con_pass){
                // console.log(rdata)

                $.ajax({
                    method: "POST",
                    url: "c-user-addpro",
                    data: {
                        pro_name : pro_name,
                        pro_price : pro_price,
                        pro_reg_no : pro_reg_no,
                        pro_insur_no : pro_insur_no,
                        pro_hub_city : pro_hub_city,
                        pro_img  : pro_img
                        
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

