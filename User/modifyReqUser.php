<?php
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$user = $_GET['user'];
$reqx = "SELECT * FROM users where username = '$username' and username != '$user'";
$resx = $pdo->query($reqx);
if($resx->fetch()){
    echo 'failed ! : try another username';
}
else{
    $req = "UPDATE users SET Username = '$username' , Password = '$password' , Full_name = '$fullname' , Email = '$email' WHERE username = '$user'";
    $res = $pdo->exec($req);
    echo 'User Updated';
}
?>