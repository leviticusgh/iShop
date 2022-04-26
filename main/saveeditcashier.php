<?php
// configuration
include('../connect.php');

$id = $_POST['memi'];
$a = $_POST['name'];
$e = $_POST['username'];
$b = $_POST['address'];
$c = $_POST['contact'];
$d = $_POST['date'];

// $result = $db->prepare("SELECT * FROM cashier WHERE cashier_id = '$id'");
// $result->execute();
// $data = $result->fetch(PDO::FETCH_ASSOC);

// $fullname = $data['fullname'];
// $username = $data['username'];

// $res = $db->prepare("SELECT * FROM user WHERE username = '$username' AND name = '$fullname'");
// $res->execute();
// $rez = $res->fetch(PDO::FETCH_ASSOC);
// $rez_id = $rez['id'];

$sql = "UPDATE cashier SET fullname=:fullname, username=:username, address=:address, contact=:contact, starting_date=:starting_date WHERE cashier_id=:cashier_id";
$q = $db->prepare($sql);
$q->execute([':cashier_id'=>$id,':fullname'=>$a,':username'=>$e,':address'=>$b,':contact'=>$c,':starting_date'=>$d]);

// if($rez){

//     $query = "UPDATE user SET username=:username, name=:name WHERE id=:id";
//     $qry = $db->prepare($query);
//     $qry->execute([':username'=>$e,':name'=>$a,':id'=>$rez_id]);

// }


header("location: cashier.php");

?>