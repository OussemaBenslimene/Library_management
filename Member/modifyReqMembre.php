<?php
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$id = $_GET['id'];
$reqx = "SELECT * FROM members where Member_id = $memberid and Member_id != '$id'";
$resx = $pdo->query($reqx);
if($resx->fetch()){
    echo 'failed ! : try another id';
}
else if(strlen($phone) < 8 || strlen($memberid) < 4) echo 'verify member id or phone number !';
else{
    $req = "UPDATE members SET Member_id = '$memberid' , First_name = '$firstname' , Last_name = '$lastname' , Phone = '$phone' , Email = '$email' , Adress = '$adress' WHERE Member_id = '$id'";
    $res = $pdo->exec($req);
    echo 'User Updated';
}
?>