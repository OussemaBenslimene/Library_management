<?php
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$id = $_GET['id'];
$reqx = "SELECT * FROM books where Book_id = $bookid and Book_id != '$id'";
$resx = $pdo->query($reqx);
if($resx->fetch()){
    echo 'failed ! : try another id';
}
else if(strlen($bookid) != 4)
{
    echo 'verify book id !';
}
else{
    $req = "UPDATE books SET Book_id = '$bookid' , Title = '$title' , Author = '$author' , Pub_date = '$pub_date' , Quantity = '$qte' WHERE Book_id = '$id'";
    $res = $pdo->exec($req);
    echo 'Book details Updated';
}
?>