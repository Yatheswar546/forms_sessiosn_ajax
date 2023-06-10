<?php
    $email = $_POST['email'];
    if(empty($email)){
        echo "email is required";
    } 
    else{
        $password = $_POST['password'];
        if(empty($password)){
            echo "password is required";
        }
        else{
            $db = mysqli_connect("localhost","root","","form");
            $sql = mysqli_query($db,"SELECT * FROM `users` WHERE email = '$email' AND `password` = '$password'");
            if(mysqli_num_rows($sql) > 0){
                $name = mysqli_fetch_assoc($sql)['name'];
                echo "Welcome" .$name;
            }
            else{
                echo "Invalid Credentials";
            }
        }
    }
?>