<?php
session_start();
include('../connect.php');
$a = 00000;
$b = $_POST['product_name'];
$c = $_POST['expiry_date'];
$d = $_POST['o_price'];
$e = $_POST['price'];
$f = $_POST['profit'];
$g = $_POST['measure'];
$h = floatval($_POST['qty_left']);
$i = floatval($_POST['qty']);

// query
$sql = "INSERT INTO products(barcode,product_name,expiry_date,o_price,price,profit,measure,qty_left,qty) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i));
header("location: products.php");


?>