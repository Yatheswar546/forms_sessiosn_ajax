<?php
session_start();
if(isset($_SESSION['id'])){
    header('Location:./index.php');    
}
else{ 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="./css/style.css">
    
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <form class="form" >
            <div class="msg">
                <!-- Hii ra Ravi mama  -->
            </div>
            <div class="input">
                <input type="text" name="username" id="" placeholder="Enter Username">
            </div>
            <div class="input">
                <input type="text" name="name" id="" placeholder="Enter Name">
            </div>
            <div class="input">
                <input type="email" name="email" id="" placeholder="Enter Email">
            </div>
            <div class="input">
                <input type="password" name="password" id="" placeholder="Enter Password">
            </div>
            <div class="input">
                <input type="submit" name="" id="" value="Register Now">
            </div>
        </form>
    </div>
    <script src="./backend/js/register.js"></script>
</body>
</html>

<?php 
}
?> 