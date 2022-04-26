<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveexpenses.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Expenses</h4></center>
<hr>
<div id="ac">
<span>Name : </span><input type="text" style="width:265px; height:30px;" name="name" /><br>
<span>Item : </span><input type="text" style="width:265px; height:30px;" name="item" placeholder="Item" Required/><br>
<span>Amount : </span><input type="number" style="width:265px; height:30px;" name="amount" /><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>