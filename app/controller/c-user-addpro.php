<?php

        $con = mysqli_connect("localhost","root","","assignment") or die("Couldn't connect to Server");

        $name = $_POST['name'];
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $search_q = "SELECT * FROM `users` WHERE `uusername` = '$username'" or die("Query Not Run");
        $rs = mysqli_query($con,$search_q);
        $row = mysqli_fetch_row($rs);

        if($row>0){
            $message = "User already exists";
        }else{
            $insert_q = "INSERT INTO `users`(`uname`, `uusername`, `upasswor`) VALUES ('$name','$username','$pass')" or die("Query not Run");

            $rs = mysqli_query($con,$insert_q);
            if($rs==true){
                $message =  "Successful";
            }else{
                $message = "Failed";
            }
    
        }

        json_encode($message);
        print ($message);
        // echo $message;
        
        mysqli_close($con);

    

?>