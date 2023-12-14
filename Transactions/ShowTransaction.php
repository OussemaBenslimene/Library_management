<head>
    <link rel="stylesheet" href="styles.css">
</head>
<table>
    <th>Transaction id</th>
    <th>Member id</th>
    <th>Member Name</th>
    <th>Book id</th>
    <Th>Book Title</Th>
    <th>Transaction date</th>
    <th>Return date</th>
<?php
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$req = "SELECT * FROM transactions t , members m, books b where t.Book_id = b.Book_id and t.Member_id = m.Member_id";
$res = $pdo->query($req);
while($tab = $res->fetch()){
    echo"<tr><td>",$tab['Transaction_id'],"</td><td>",$tab['Member_id'],"</td><td>",$tab['First_name'],"</td><td>",$tab['Book_id'],"</td><td>",$tab['Title'],"</td><td>",$tab['Transaction_date'],"</td><td>",$tab['Return_date'],"</td></tr>";
}

?>
</table>