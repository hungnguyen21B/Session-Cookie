<?php
    session_start();

    if (isset($_POST['username']) && isset($_POST['password'])){
        $username= $_POST['username'];
        $password=$_POST['password'];
        if (($username=="hung" && $password=="hung")||($username=="ad" && $password=="ad")){
            $_SESSION['username']= $username;
            header("Location: profile.php");
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
    body{
        margin:0px;
    }
    body form{
        position: absolute;
        top :20%;
        left:30%;
        width: 500px;
    }
    body form h1{
        width: 100%;
    }
    body form input{
        width: 100%;
        height: 50px;
        margin: 10px;
    }
    </style>
</head>
<body>

    <form action="" method="POST">
    <h1>Login</h1>
        <input type="text" name='username'>
        <input type="text" name='password'>
        <input type="submit" value="Login">
    </form>
</body>
</html>