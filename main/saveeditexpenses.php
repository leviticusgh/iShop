<?php

include('../connect.php');

$id = $_POST['memi'];
$a = $_POST['name'];
$e = $_POST['item'];
$b = $_POST['amount'];
date_default_timezone_get(); 
date_default_timezone_set("Africa/Accra"); 
$d = date("Y-m-d");

$sql = "UPDATE expenses SET name=:name, item=:item, amount=:amount, date=:date WHERE exp_id=:exp_id";
$q = $db->prepare($sql);
$q->execute([':exp_id'=>$id,':name'=>$a, ':item'=>$e, ':amount'=>$b, ':date'=>$d]);

header("location: expenses.php?d1=0&d2=0");

?>