<?php
require ("koneksi.php");
if( isset($_POST['register'])){
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];

    $query = "INSERT INTO user_detail (user_email, user_password, user_fullname, level) VALUES 
    ('$userMail','$userPass','$userName',2)";
    echo $query;
    $result = mysqli_query($koneksi, $query);
    // header('Location: login.php');
}
?>
<html>
    <head>
        <title>register afkarina</title>
    </head>
    <body>
        <form action="register.php" method="POST">
            <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" required></p>
            <p>password : <input type="text" name="txt_pass" require></p>
            <p>nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_nama" required></p>
             <button type="submit" name="register">register</button>
        </form>
        <p><a href="login.php">login</a></p>
    </body>
</html>
