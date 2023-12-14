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
        <th>Member Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Membership Status</th>
        <th>Action</th>
        
<?php
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$req = "SELECT * FROM members";
$res = $pdo->query($req);
while($tab = $res->fetch())
{
    echo"<tr><td>",$tab['Member_id'],"</td><td>",$tab['First_name'],"</td><td>",$tab['Last_name'],"</td><td>",$tab['Phone'],"</td><td>",$tab['Adress'],"</td><td>",$tab['Membership'],"</td>";
    echo'<td><a href=modifyMember.php?id=',$tab["Member_id"],'><button>Modify</button></a>';
    echo'<a href=deleteMember.php?id=',$tab["Member_id"],'><button>delete</button></a></td></tr>';
}
?>


    
</body>
</html>