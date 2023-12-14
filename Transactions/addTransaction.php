<head>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
$bookid = $_GET['bookid'];
$id = $_GET['id'];
?>
<form action="ConfirmTransaction.php" method="post">
    <label>Member Id</label>
    <input type="number" name="memberid" value="<?php echo $id ?>" readonly>
    <label>Book Id</label>
    <input type="number" name="bookid" value="<?php echo $bookid ?>" readonly>
    <label for="rent">Rental Period</label>
    <select name="rent" id="rent">
        <option value="7" selected>for 7 days</option>
        <option value="14">for 14 days</option>
        <option value="21">for 21 days</option>
    </select>
    <input type="submit" value="Confirm">
</form>