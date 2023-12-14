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
$req = "SELECT * FROM books where Book_id = '$id'";
$res = $pdo->query($req);
$tab = $res->fetch();
?>
<form action="modifyReqBook.php?id=<?php echo $id ?>" method="post">
        <label for="bookid">Book Id</label>
        <input type="number" id="bookid" name="bookid" placeholder="[4]digits" required value="<?php echo $tab['Book_id']?>">
        
        <label for="title">Title</label>
        <input type="text" id="title" name="title" placeholder="Book Title" required value="<?php echo $tab['Title']?>">

        <label for="author">Author</label>
        <input type="text" id="author" name="author" placeholder="Book Author" required value="<?php echo $tab['Author']?>">
       
        <label for="pub_date">Publish Date</label>
        <input type="date" id="pub_date" name="pub_date" required value="<?php echo $tab['Pub_date']?>">
 
        <label for="qte">Quantity</label>
        <input type="number" id="qte" name="qte" placeholder="quantity available"  required value="<?php echo $tab['Quantity']?>">
        
        
        <input type="submit" value="Modify">
    </form>
</body>
</html>
