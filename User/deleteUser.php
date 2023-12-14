<?php
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$user = $_GET['user'];
$req = "DELETE FROM users where username = '$user'";
$res = $pdo->exec($req);
if($res) echo 'deleted';
else echo 'failed to delete';
?>