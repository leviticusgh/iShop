<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM expenses WHERE exp_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>