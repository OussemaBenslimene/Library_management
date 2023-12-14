<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$user = $_GET['user'];
$req = "SELECT * FROM users where username = '$user'";
$res = $pdo->query($req);
$tab = $res->fetch();
?>
<form action="modifyReqUser.php?user=<?php echo $user ?>" method="post">

        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Full Name" required value="<?php echo $tab['Full_name'] ?>">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="user name" required value="<?php echo $tab['Username'] ?>">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="password" required value="<?php echo $tab['Password'] ?>">
        <label for="email" >Email</label>
        <input type="email" id="email" name="email" placeholder="name@example.com" required value="<?php echo $tab['Email'] ?>">
        <input type="submit" value="Modify">  
    </form>
</body>
</html>
