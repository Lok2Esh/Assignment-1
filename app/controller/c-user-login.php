<?php

// echo "hello";
    
        $con = mysqli_connect("localhost","root","","assignment") or die("Couldn't connect to Server");

        $username = $_POST['user'];
        $pass = $_POST['pass'];

        $search_q = "SELECT * FROM `users` WHERE `uusername` = '$username' AND `upasswor` = '$pass'" or die("Query Not Run");
        $rs = mysqli_query($con,$search_q);
        $row = mysqli_fetch_row($rs);

        if($row>0){
            $message = "Login successful";
        }else{
            $message = "Invalid Credentials";
        }

        json_encode($message);
        print ($message);
    
        
        mysqli_close($con);

    

?>