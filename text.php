<?php
    include_once "./config/db.php";

    if(isset($_POST['submit'])){
    
        $option = $_POST['option'];
    
        $insertquery = "INSERT INTO netflix_plans (option) VALUES ('$option')";
        $saveData = $db->query($insertquery);
        if($saveData){
            $report =  "<div style='text-align: center; color: green;'>Plan selected succesfully</div>";
            header('refresh: 30 url:login_six.php');
        }else{
            $report =  "<div style='text-align: center; color: red;'>No plan selected</div>";
        }
    }


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="radio" name="option" class="option">Male<br>
        <input type="radio" name="option" class="option">Female<br>
        <input type="radio" name="option" class="option">Other<br>
        <input type="text" name="test" class="option">Other<br>
        <button name="submit" type="submit">Please click here</button>
    </form>
</body>
</html>