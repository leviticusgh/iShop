<?php
session_start();
include('../connect.php');

$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
// $c = $date->date('d-m-y');
$d = $_POST['ptype'];
$e = $_POST['amount'];
$z = $_POST['profit'];
$cname = $_POST['cname'];
if($d=='credit') {
$f = $_POST['due'];
$h = $f - $e;
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name,balance) VALUES (:a,:b,:c,:d,:e,:z,:f,:g,:h)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':f'=>$f,':g'=>$cname, ':h'=>$h));
header("location: preview.php?invoice=$a");
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
$h = $f - $e;
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name,balance) VALUES (:a,:b,:c,:d,:e,:z,:f,:g,:h)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':f'=>$f,':g'=>$cname, ':h'=>$h));
header("location: preview.php?invoice=$a");
exit();
}

?>