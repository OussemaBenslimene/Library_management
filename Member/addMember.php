<?php
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$reqx = "SELECT * FROM members where Member_id = '$id'";
$resx = $pdo->query($reqx);
if($resx->fetch()) echo'User already existing !';
else if(strlen($id) != 4 || strlen($phone) != 8)
{
    echo 'verify member id or phone number !';
}
else if(!isset($membership)) echo 'select membership status !';
else{
$req = "INSERT INTO members values ($id,'$firstname','$lastname',$phone,'$adress','$email','$membership')";
$res = $pdo->exec($req);
if($res) echo 'Member Added';
else echo'failed !';}

?>