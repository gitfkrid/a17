<?php
require 'koneksi.php';
session_start();
$pdo = new koneksi;
$kon = $pdo->__construct();

class login{
    private $email;
    private $pass;
    private $koneksi;

    public function __construct($email, $pass, $koneksi){
        $this->email = $email;
        $this->pass = $pass;
        $this->koneksi = $koneksi;
    }

    public function checkValue(){
        if (!empty(trim($this->email)) && !empty(trim($this->pass))) {
            $statement = $this->koneksi->prepare("select * from user_detail where user_email = '$this->email'");
            $statement->execute();
      
            $result = $statement->fetchAll(PDO::FETCH_CLASS);
            $_SESSION['result'] = $result;
        } else {
            $error = 'Data tidak boleh kosong!!';
            echo $error;
        }
        return $result;
    }

    public function checkInside($result){
        if ($result != 0) {
            if ($result[0]->user_email == $this->email && $result[0]->user_password == $this->pass) {
                $_SESSION['id'] = $result[0]->id;
                $_SESSION['email'] = $result[0]->user_email;
                $_SESSION['name'] = $result[0]->user_fullname;
                $_SESSION['level'] = $result[0]->level;
                header('Location:home.php');
            } else {
                header('Location:login.php');
            }
          } else {
                header('Location:login.php');
          }
    }
}

if (isset($_POST['submit'])) {
    $login = new login($_POST['txt_email'], $_POST['txt_pass'], $kon);
    $result = $login->checkValue();
    $login->checkInside($result);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
</head>

<body>
    <form method="POST">
        <p>
            Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email">
        </p>
        <p>
            Password : <input type="password" name="txt_pass">
        </p>
        <button type="submit" name="submit">
            Sign In
        </button>
    </form>
    <p>
        Don't Have Account ? <a href="register.php">Click Here !</a>
    </p>
</body>

</html>