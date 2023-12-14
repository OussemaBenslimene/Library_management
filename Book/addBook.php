<?php
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$reqx = "SELECT * FROM books where Book_id = '$id'";
$resx = $pdo->query($reqx);

if($resx->fetch()) echo'Book already existing !';
else if(strlen($id) != 4)
{
    echo 'verify book id !';
}
else if(!isset($genre)) echo 'specify book genre !';
else{
$req = "INSERT INTO books values ($id,'$title','$author','$genre','$pub_date',$qte)";
$res = $pdo->exec($req);
if($res) echo 'Book Added';
else echo'failed !';}

?>