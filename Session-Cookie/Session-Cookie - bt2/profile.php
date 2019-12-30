<?php 
    session_start();
    $db= new mysqli("localhost","root","","user21");
    $user=null;
    
   
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
<?php if (isset($_SESSION['userId'])){
        $id=$_SESSION['userId'];
        $sql="select * from user where id=" . $id ;
        $user=$db->query($sql)->fetch_all();   ?>
        <h1>Welcome <?php echo $user[0][1]; ?> </h1>
        <p>Username: <?php echo $user[0][1]; ?> </p>
        <p>Password: <?php echo $user[0][2]; ?> </p>
        <p>FullName: <?php echo $user[0][3]; ?> </p>
<?php } else {
    echo ("Login to view your profile");
}
?>
   
</body>
</html>