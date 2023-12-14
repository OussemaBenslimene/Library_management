<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <table border="1px">
        <th>Book Id</th>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Publish Date</th>
        <th>Quantity</th>
        <th>Action</th>
        
<?php
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$req = "SELECT * FROM Books";
$res = $pdo->query($req);
while($tab = $res->fetch())
{
    echo"<tr><td>",$tab['Book_id'],"</td><td>",$tab['Title'],"</td><td>",$tab['Author'],"</td><td>",$tab['Genre'],"</td><td>",$tab['Pub_date'],"</td>";
    if($tab['Quantity'] > 0) echo "<td>",$tab['Quantity'],"</td>";
    else echo "<td style='color:red;'>Not Available</td>";
    echo'<td><a href=modifyBook.php?id=',$tab["Book_id"],'><button>Modify</button></a>';
    echo'<a href=deleteBook.php?id=',$tab["Book_id"],'><button>delete</button></a></td></tr>';
}
?>


    
</body>
</html>