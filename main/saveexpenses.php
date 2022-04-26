<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['item'];
$c = $_POST['amount'];
date_default_timezone_get(); 
date_default_timezone_set("Africa/Accra"); 
$d = date("Y-m-d H:i:s");

$sql = "INSERT INTO expenses (name, item, amount, date) VALUES(:a,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d));

header("location: expenses.php?d1=0&d2=0");


?>