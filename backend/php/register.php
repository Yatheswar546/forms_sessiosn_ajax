<?php
    $db = mysqli_connect("localhost","root","","form");
    $name = $_POST['name'];
    if(empty($name)){
        echo "Name is required!!"; 
    } 
    else{
        $email = $_POST['email'];
        if(empty($email)){
            echo "Email is required!!";
        } 
        else{
            $username = $_POST['username'];
            if(empty($username)){
                echo "Username is required!!";
            }
            else{
                $password = $_POST['password'];
                if(empty($password)){
                    echo "Password is required";
                } 
                else{
                    $userid = md5(substr($name,0,3).substr($username,0,3).random_int(10000,99999));
                    // $password = md5($password);
                    $sql = mysqli_query($db,"INSERT INTO `users`(`name`, `email`, `username`, `password`,`userid`) VALUES ('$name','$email','$username','$password','$userid')");
                    if($sql){
                        session_start();
                        $_SESSION['id']=$userid;
                        echo "success";
                    }
                    else{
                        echo "Registration incomplete!!";
                    }
                }
            }

        }
    }

?>