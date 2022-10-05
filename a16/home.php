<?php
require ('koneksi.php');
require ('query.php');
// $email = $_GET['user_email'];
$obj = new crud;
session_start();

if(!isset($_SESSION['id'])){
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login.php');
}
$sesID = $_SESSION['id'];
$sesName = $_SESSION['name'];
$sesLvl = $_SESSION['level'];
$sesMail = $_SESSION['email'];
?>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Selamat Datang <?php echo $sesName; ?></h1>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Email</td>
                <td>Nama</td>
                <td></td>
            </tr>
            <?php
                $data=$obj->lihatData();
                $no = 1;

                if($sesLvl == 1){
                    $dis = "";
                } else{
                    $dis = "disabled";
                }

                if($data->rowCount()>0){
                    while($row=$data->fetch(PDO::FETCH_ASSOC)){ ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['user_email']; ?></td>
                            <td><?php echo $row['user_fullname']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>">
                                    <input type="button" value="edit" <?php echo $dis ?>>
                                </a>
                                <a href="hapus.php?id=<?php echo $row['id']; ?>">
                                    <input type="button" value="hapus" <?php echo $dis ?>>
                                </a>
                            </td>
                        </tr>
                        <?php $no++;
                    }
                }?>
        </table>
        <p><a href="logout.php">Log Out</p>
    </body>
</html>
