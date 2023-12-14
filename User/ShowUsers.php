<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <table border="1px">
        <th>Full Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Action</th>
        
<?php
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$req = "SELECT * FROM users where Role like 'librarian'";
$res = $pdo->query($req);
while($tab = $res->fetch())
{
    echo"<tr><td>",$tab['Full_name'],"</td><td>",$tab['Username'],"</td><td>",$tab['Password'],"</td><td>",$tab['Email'],"</td>";
    echo'<td><a href=modifyUser.php?user=',$tab["Username"],'><button>Modify</button></a>';
    echo'<a href=deleteUser.php?user=',$tab["Username"],'><button>delete</button></a></td></tr>';
}
?>


    
</body>
</html>