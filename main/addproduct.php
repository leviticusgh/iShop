<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveproduct.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Product</h4></center>
<hr>
<div id="ac">
<!-- <span>Bar Code Number : </span><input type="text" id="barcode" style="width:265px; height:30px;" onfocus="this.focus();" name="barcode" ><br> -->
<span>Product Name : </span><input type="text" style="width:265px; height:30px;" autofocus name="product_name" ><br>
<span>Expiry Date : </span><input type="date" style="width:265px; height:30px;" name="expiry_date"/><br>
<span>Original Price : </span><input type="text" id="txt2" style="width:265px; height:30px;" name="o_price" onkeyup="sum();"><br>
<span>Selling Price : </span><input type="text" id="txt1" style="width:265px; height:30px;" name="price" onkeyup="sum();"><br>
<span>Profit : </span><input type="text" id="txt3" style="width:265px; height:30px;" name="profit" readonly><br>
<!-- <span>Supplier : </span> -->
<!-- <select name="supplier"  style="width:265px; height:30px; margin-left:-5px;" >
<option></option>
	<?php
	include('../connect.php');
	$result = $db->prepare("SELECT * FROM supliers");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['suplier_name']; ?></option>
	<?php
	}
	?>
</select><br> -->
<span>Item Measure : </span>
<select name="measure"  style="width:265px; height:30px; margin-left:-5px;" >
	<option value="Null"> --- Select Measure --- </option>
	<option value="Unit">Unit</option>
	<option value="Box">Box</option>
	<option value="Pack">Pack</option>
	<option value="Sac">Sac</option>
	<option value="Row">Row</option>
</select><br>
<span>Quantity : </span><input type="number" style="width:265px; height:30px;" min="0" id="txt11" onkeyup="sum();" name="qty" ><br>
<span></span><input type="hidden" style="width:265px; height:30px;" id="txt22" name="qty_left" Required ><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>

<script>
	$(document).ready(function() {
    $("#barcode")
        .focus()
        .attr('autocomplete', 'off')
        .keyup(function(event){
            // if the timer is set, clear it
            if (barcode_watch_timer !== false)
                clearTimeout(barcode_watch_timer);
            // set the timer to wait 500ms for more input
            barcode_watch_timer = setTimeout(function () {
                process_barcode_input();
            }, 200);
            // optionally show a status message
            //$("#status").html('waiting for more input...').show();
            // return false so the form doesn't submit if the char is equal to "enter"
            return false;
        });
});
</script>
