<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modify</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
<?php 
extract($_POST);
require_once('connect.php');
$cnx=new connect();
$pdo=$cnx->Cnx();
$id = $_GET['id'];
$req = "SELECT * FROM members where Member_id = '$id'";
$res = $pdo->query($req);
$tab = $res->fetch();
?>
<form action="modifyReqMembre.php?id=<?php echo $id ?>" method="post">
        
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="First Name" required value="<?php echo $tab['First_name'] ?>">
        
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" placeholder="Last Name" required value="<?php echo $tab['Last_name'] ?>">

        <label for="memberid">Member Id</label>
        <input type="number" id="memberid" name="memberid" placeholder="[4]digits"  required value="<?php echo $tab['Member_id'] ?>">

        <label for="phone">Phone Number</label>
        <input type="number" id="phone" name="phone" placeholder="[8]digits" required value="<?php echo $tab['Phone'] ?>">

        <label for="adress">Adress</label>
        <textarea name="adress" id="adress" placeholder="Your Adress" required ><?php echo $tab['Adress'] ?></textarea>
         
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="name@example.com" required value="<?php echo $tab['Email'] ?>">
        <input type="submit" value="Modify">
    </form>
</body>
</html>
