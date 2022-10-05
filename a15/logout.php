<?php
session_start(); //inisisasi session
if(session_destroy()) {//menghapus session
header("Location: home.php");}
?>

