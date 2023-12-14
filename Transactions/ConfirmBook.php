<head>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$stat = $_GET['stat'];
$id = $_GET['id'];
$req = "SELECT * FROM Books";
$res = $pdo->query($req);
if($stat != "active") echo'You cant rent books ! You should renew your membership';
else {
    echo '<table border="1px">
    <th>Book Id</th>
    <th>Title</th>
    <th>Author</th>
    <th>Genre</th>
    <th>Publish Date</th>
    <th>Quantity</th>
    <th>Action</th>';
while($tab = $res->fetch())
{
    if($tab['Quantity'] > 0){

    echo"<tr><td>",$tab['Book_id'],"</td><td>",$tab['Title'],"</td><td>",$tab['Author'],"</td><td>",$tab['Genre'],"</td><td>",$tab['Pub_date'],"</td><td>",$tab['Quantity'],"</td>";
   
    echo'<td><a href=addTransaction.php?bookid=',$tab["Book_id"],'&id=',$id,'><button>Pick this book</button></a></td></tr>';}
}}

?>
