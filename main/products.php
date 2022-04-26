<html>
<head>
<title>
Pacewealth Ventures
</title>

<?php 
require_once('auth.php');
?>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>

<script>
function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var result = txtFirstNumberValue - txtSecondNumberValue;
            if (!isNaN(result)) {
                document.getElementById('txt3').value = result;
            }
			
			 var txtFirstNumberValue = document.getElementById('txt11').value;
            var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt22').value = result;				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt11').value;
            var txtSecondNumberValue = document.getElementById('txt33').value;
            var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt55').value = result;
            }
			
			 var txtFirstNumberValue = document.getElementById('txt4').value;
			 var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt5').value = result;
				}
			
        }
</script>


 <script language="javascript" type="text/javascript">
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
</SCRIPT>	

<body>
<?php include('navfixed.php');?>
<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav noprint">
              <ul class="nav nav-list">
				<li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
				<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Sales</a></li>             
				<li class="active"><a href="products.php"><i class="icon-list-alt icon-2x"></i> Products</a></li>
				<li><a href="cashier.php"><i class="icon-group icon-2x"></i> Cashiers</a></li>
				<li><a href="expenses.php?d1=0&d2=0"><i class="icon-credit-card icon-2x"></i> Expenses</a></li>
				<li><a href="supplier.php"><i class="icon-truck icon-2x"></i> Suppliers</a></li>
				<li><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Sales Report</a></li>
				<li><a href="sales_inventory.php"><i class="icon-table icon-2x"></i><br> Sales Inventory</a></li>
				<!-- <li><a href="purchaselist.php"><i class="icon-truck icon-2x"></i><br> Purchases </a></li> -->

			<br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				
				</ul>             
          </div>
        </div>
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Products - Pacewealth Ventures
			</div>
			<ul class="breadcrumb noprint">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Products</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large noprint" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
			<?php 
			include('../connect.php');
				$result = $db->prepare("SELECT * FROM products ORDER BY qty DESC");
				$result->execute();
				$row = $result->fetch();
				$rowcount = $result->rowcount();

			?>
			<?php
			include('../connect.php');

						$result = $db->prepare("SELECT * FROM products WHERE qty < 5 ORDER BY product_id DESC");
						$result->execute();
						$rowcount123 = $result->rowcount();			
			?>


				<div style="text-align:center;" class="noprint">
			Total Number of Products:  <font color="green" style="font:bold 22px 'Aleo';">[<?php echo $rowcount;?>]</font>
		</div>
		
		<div style="text-align:center;" class="noprint">
			<font style="color:rgb(255, 95, 66); font:bold 22px 'Aleo';">[<?php echo $rowcount123;?>]</font> Product[s] is/are below QTY of 5 
		</div>
<a href="#" onclick="window.print()"><button  style="float:right; width: 100px;" class="btn btn-success btn-mini noprint"> Print</button></a>

</br>
		

			<div style="text-align: center;" class="noprint"> <span style="color: red; font-weight: bold;">Red Text</span> + White Bg = Item < 5</div>
			<div style="text-align: center;" class="noprint"> <span style="color: red; font-weight: bold;">Red Text</span> + Black Bg = Item < 5 and Close to Expiry</div>
			<div style="text-align: center;" class="noprint"> <span style="color: black; font-weight: bold;">Black Bg</span> + White Text = Item Expiration is Closer</div>
			<div style="text-align: center;" class="noprint"> <span style="color: black; font-weight: bold;">Black Text</span> + White Bg = Item is Safe</div>
</div>

<div class="noprint">
<input type="text" style="padding:15px; color: black;" name="filter" value="" id="filter" placeholder="Search Product..." autocomplete="off" />
</div>
<a rel="facebox" href="addproduct.php"><Button type="submit" class="btn btn-info noprint" style="float:right; width:230px; height:35px;"><i class="icon-plus-sign icon-large"></i> Add Product</button></a><br><br>
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<!-- <th width="10%"> Barcode </th> -->
			<th width="20%"> Product Name</th>
			<th width="10%"> Expiry Status </th>
			<th width="10%"> Original Price </th>
			<th width="10%"> Selling Price </th>
			<th width="8%"> QTY</th>
			<th width="8%"> QTY Left</th>
			<th width="8%"> Measure </th>
			<th width="8%"> Total (Box) </th>
			<th class="noprint" width="8%"> Action </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
			function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}
				function formatProduct($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}
				include('../connect.php');
				$result = $db->prepare("SELECT *, price * qty as total FROM products ORDER BY product_id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				$total=$row['total'];
				$qty_sold =	$row['qty'];
				date_default_timezone_get();
				date_default_timezone_set("Africa/Accra");
				$today_date = date("Y-m-d H:i:s");
				$exp = $row['expiry_date'];
				$check_expiry = strtotime($today_date) - strtotime($exp);
				$x = abs(floor($check_expiry / (60 * 60 * 24)));
				if ($qty_sold < 5 && $x > 60) {
					echo '<tr class="alert alert-warning record" style="color: red; background:white;">';
				}
				elseif ($qty_sold < 5 && $x < 60) {
					echo '<tr class="alert alert-warning record" style="color: red; background:rgb(0, 0, 0);">';
				}
				elseif ($qty_sold > 5 && $x < 60) {
					echo '<tr class="alert alert-warning record" style="color: #fff; background:rgb(0, 0, 0);">';
				}
				else {
				echo '<tr class="record">';
				}
			?>
		

			<!-- <td><?php echo $row['barcode']; ?></td> -->
			<td><?php echo $row['product_name']; ?></td>
			<td><?php echo $x." Days More"; ?></td>
			<td><?php
			$oprice=$row['o_price'];
			echo formatMoney($oprice, true);
			?></td>
			<td><?php
			$pprice=$row['price'];
			echo formatMoney($pprice, true);
			?></td>
			<td><?php 

				$qty =	$row['qty_left'];
				echo formatProduct($qty, true);
			?>
			</td>
			<td><?php 

				$qty_left = $row['qty']; 
				echo formatProduct($qty_left, true);
				
				
				?>
				
			</td>
			<td><?php echo $row['measure']; ?></td>
			<td>
			<?php
			$total=$row['total'];
			echo formatMoney($total, true);
			?>
			<?php
			?>
			</td>			
			<td><a rel="facebox" title="Click to edit the product" href="editproduct.php?id=<?php echo $row['product_id']; ?>"><button class="btn btn-warning noprint"><i class="icon-edit"></i> </button> </a>
			<a href="#" id="<?php echo $row['product_id']; ?>" class="delbutton" title="Click to Delete the product"><button class="btn btn-danger noprint"><i class="icon-trash"></i></button></a></td>
			</tr>
			<?php
				}
			?>
	</tbody>
</table>
<table>
	<tbody>
		<strong>
		<tr>
			<th colspan="8" style="border-top:1px solid #999999; font-size: 50px;"> Total: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
			<th colspan="1" style="border-top:1px solid #999999; font-size: 50px;"> 
			<?php

				include('../connect.php');
				$result = $db->prepare("SELECT SUM(price * qty) as total FROM products");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				$total_sum=$row['total'];
				echo formatMoney($total_sum, true);
				}
	
				?>
			</th>
		</tr>
			</strong>
	</tbody>
	</table>
<div class="clearfix"></div>
</div>
</div>
</div>

<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this Product? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteproduct.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
<?php include('footer.php');?>

</html>