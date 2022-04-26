<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['username'];
$c = $_POST['address'];
$d = $_POST['contact'];
$e = $_POST['password'];
$hash = md5($d);
$f = $_POST['date'];
$g = "Cashier";

$sql = "INSERT INTO cashier (fullname, username, address, contact, password, starting_date) VALUES (:a,:b,:c,:d,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e, ':f' => $f));

header("location: cashier.php");


?>