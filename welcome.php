
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
   session_start();
   ob_start();
   if (empty($_SESSION["Email"])) {
    echo "<p style=\"color:red;text-align:center;\">Vui lòng login";
    header("location:bai8.php");
    exit();
   }
   else {
    echo "Welcome "  .$_SESSION["Email"].  " to my website!";
    if (isset($_POST["Logout"])){
        session_unset();
        session_destroy();
        header("location:bai8.php");
        ob_end_flush(); 
        exit();
       }   
   }
?>
<form action="" method = "post">
<div><button name = "Logout">LOGOUT</button></div>
</form>

</body>
</html>
