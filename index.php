<?php
session_start();
if(isset($_SESSION['id'])){    
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Home</title>
</head>
<body>
    <div class="wrapper block">
        <h1>Welcome Yatheswar</h1>
        <a href="./logout.php" class="btn">Logout</a>
    </div>
</body>
</html>

<?php
}
else{
    header('Location:./register.php');    
}
?>