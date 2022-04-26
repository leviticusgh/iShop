<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM products WHERE product_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditproduct.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Product</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<!-- <span>Barcode : </span><input disabled type="text" style="width:265px; height:30px;"  name="barcode" value="<?php echo $row['barcode']; ?>" Required/><br> -->
<span>Product Name : </span><input type="text" style="width:265px; height:30px;"  name="product_name" value="<?php echo $row['product_name']; ?>" Required /><br>
<span>Expiry Date : </span><input type="date" style="width:265px; height:30px;"  name="expiry_date" value="<?php echo $row['expiry_date']; ?>" /><br>
<span>Selling Price : </span><input type="text" style="width:265px; height:30px;" id="txt1" name="price" value="<?php echo $row['price']; ?>" onkeyup="sum();"/><br>
<span>Original Price : </span><input type="text" style="width:265px; height:30px;" id="txt2" name="o_price" value="<?php echo $row['o_price']; ?>" onkeyup="sum();" /><br>
<span>Profit : </span><input type="text" style="width:265px; height:30px;" id="txt3" name="profit" value="<?php echo $row['profit']; ?>" readonly><br>
<span>Measure : </span>
<select name="measure" style="width:265px; height:30px; margin-left:-5px;" >
	<option value="<?php echo $row['measure']; ?>"><?php echo $row['measure']; ?></option>
	<option> ---------------------------------- </option>
	<option value="Unit">Unit</option>
	<option value="Box">Box</option>
	<option value="Pack">Pack</option>
	<option value="Sac">Sac</option>
	<option value="Row">Row</option>
</select><br>
<span>QTY: </span><input type="number" style="width:265px; height:30px;" step="any" min="0" name="qty" value="<?php echo $row['qty_left']; ?>" /><br>
<span>Qty Left: </span><input type="number" step="any" min="0" style="width:265px; height:30px;" name="sold" value="<?php echo $row['qty']; ?>" /><br>

<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>