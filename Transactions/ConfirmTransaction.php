<?php
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$dt = date("Y-m-d",strtotime("+$rent Days"));
$req = "INSERT INTO transactions values ('',$memberid,$bookid,sysdate(),'$dt')";
$res = $pdo->exec($req);

if($res){
    $reqx = "UPDATE books SET Quantity = Quantity - 1 where Book_id = $bookid";
    $resx = $pdo->exec($reqx);
    echo'<h3>Transaction succeeded</h3>';
    echo'You should return this book on ',$dt;
}

?>