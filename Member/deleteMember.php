<?php
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$id = $_GET['id'];
$req = "DELETE FROM members where Member_id = '$id'";
$res = $pdo->exec($req);
if($res) echo 'deleted';
else echo 'failed to delete';
?>