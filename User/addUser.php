<?php
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$reqx = "SELECT * FROM users where username like '$username'";
$resx = $pdo->query($reqx);
if(!isset($role))
{
    echo 'failed ! choose a role';
}
else if($resx->fetch()){
    echo 'failed ! : try another username';
}
else{
$req = "INSERT INTO users values('$username','$password','$fullname','$email','$role')";
$res = $pdo->exec($req);
echo'User added succesfully';
}



?>