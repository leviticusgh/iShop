<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['product_name'];
$b = $_POST['expiry_date'];
$e = $_POST['price'];
$d = $_POST['o_price'];
$f = $_POST['profit'];
$h = $_POST['measure'];
$i = $_POST['qty'];
$j = $_POST['sold'];
// query
$sql = "UPDATE products 
        SET product_name=?, expiry_date=?, price=?, o_price=?, profit=?, measure=?, qty_left=?, qty=?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$e,$d,$f,$h,$i,$j,$id));
header("location: products.php");

?>