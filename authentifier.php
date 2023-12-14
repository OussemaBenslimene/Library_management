<?php
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$req="SELECT * FROM users where Username = '$login' and Password = '$pwd'";
$res=$pdo->query($req);
$row = $res->fetch();
if($row)
{
    if($row['Role'] == "admin") header('location:indexAdmin.html');
    else header('location:indexLibrarian.html');

}
else echo 'verify your credentials ! ';

?>