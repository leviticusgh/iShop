<?php 

date_default_timezone_get();
date_default_timezone_set("Africa/Accra");
$datetime = date("F j, Y, g:i a");
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once ('auth.php');?>
<title>
iShop Enterprise
</title>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=100%, height=100%, left=10, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open(); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 100%; font-size: 10px; font-family: arial;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<?php
$invoice=$_GET['invoice'];
include('../connect.php');
$result = $db->prepare("SELECT * FROM sales WHERE invoice_number= :userid");
$result->bindParam(':userid', $invoice);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$cname=$row['name'];
$invoice=$row['invoice_number'];
$date=$row['date'];
$cash=$row['due_date'];
$cashier=$row['cashier'];

$pt=$row['type'];
$am=$row['amount'];
if($pt=='cash'){
$cash=$row['due_date'];
$amount=$cash-$am;
}
}
?>
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
		 <div class="well sidebar-nav">
<?php
$position=$_SESSION['SESS_LAST_NAME'];
$name=$_SESSION['SESS_FIRST_NAME'];
if($position=='Cashier') {
?>
                 <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li class="active"><a href="sales.php?id=cash&invoice"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
			<!-- <li><a href="products.php"><i class="icon-list-alt icon-2x"></i> Products</a>                                     </li> -->
			<!-- <li><a href="cashier.php"><i class="icon-group icon-2x"></i> Cashiers</a>                                    </li> -->
			<!-- <li><a href="supplier.php"><i class="icon-truck icon-2x"></i> Suppliers</a>                                    </li> -->
			<!-- <li><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Sales Report</a>                </li> -->
			<!-- <li><a href="sales_inventory.php"><i class="icon-table icon-2x"></i> Product Inventory</a>                </li> -->
				<br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				
				</ul> 
				<?php } ?>				
<?php
if($position=='Admin') {
?>      
                 <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li class="active"><a href="sales.php?id=cash&invoice"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
			<li><a href="products.php"><i class="icon-list-alt icon-2x"></i> Products</a>                                     </li>
			<li><a href="cashier.php"><i class="icon-group icon-2x"></i> Cashiers</a>                                    </li>
			<li><a href="supplier.php"><i class="icon-truck icon-2x"></i> Suppliers</a>                                    </li>
			<li><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Sales Report</a>                </li>
			<li><a href="sales_inventory.php"><i class="icon-table icon-2x"></i> Sales Inventory</a>                </li>
				<br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				
				</ul> 
<?php } ?>    
          </div><!--/.well -->
        </div><!--/span-->
		
	<div class="span10">
	<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><button class="btn btn-default"><i class="icon-arrow-left"></i> Back to Sales</button></a>
<div class="content" id="content">
<div style="padding: 7px; width: 100%; height: 100%; font-weight: normal;">
	<div style="width: 100%; height: 100%;" >
	<center><div style="font:bold 40px 'Aleo';">Sales Receipt</div>
	<div style="font-size: 30px; font: 'Roboto';">Pacewealth Ventures</div>
	<div style="font-size: 20px;">Dansoman - Accra,</div>
	<div style="font-size: 20px;">Adjacent Nick Petroleum</div><br>
	<div style="font-size: 15px;">Contact: 0599791147 / 0245414463</div>
	<div style="font-size: 15px;">Tin Number - P0004511689</div><br>
	<div style="font-size: 15px;">PLEASE MONEY PAID IS NOT REFUNDABLE</div>
	<div style="font-size: 15px;">ITEM(S) BOUGHT IS/ARE NOT RETURNABLE</div><br>

	<div>
	</div>
	<div style="width: 100%; height: 100%; margin-bottom: 10px;">
	<table cellpadding="4" cellspacing="2" style="font-family: arial; font-size: 18px; text-align:left; width : 100%;">

		<tr>
			<td>Cust. Name:</td>
			<td><?php echo $cname ?></td>
		</tr>
		<tr>
			<td>OR No. :</td>
			<td><?php echo $invoice ?></td>
		</tr>
		<tr>
			<td>Date / Time :</td>
			<td><?php echo $date ?></td>
		</tr>
		<tr>
			<td>Cashier :</td>
			<td><?php echo $name; ?></td>
		</tr>
	</table>
	<br>
	<div class="clearfix"></div>
	<br>
	<div style="width: 60%; height: 100%; margin-top: 0px; float: left; padding-left: 0px;">
		<table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 20px; text-align:left; width: 60%;">
			<thead>
			<tr>
				<th width="70%"> Product</th>
				<th width="10%"> Qty </th>
				<th width="10%"> Price </th>
				<th width="10%"> Amt </th>
			</tr>
		</thead>
		<tbody>
			
				<?php
					$id=$_GET['invoice'];
					$result = $db->prepare("SELECT * FROM sales_order WHERE invoice= :userid");
					$result->bindParam(':userid', $id);
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
				?>
				<tr class="record">
				<td><?php echo $row['product_name']; ?></td>
				<td><?php echo $row['qty']; ?></td>
				<td>
				<?php
				$ppp=$row['price'];
				echo formatMoney($ppp, true);
				?>
				</td>
				<!-- <td>
				<?php
				$ddd=$row['discount'];
				echo formatMoney($ddd, true);
				?>
				</td> -->
				<td>
				<?php
				$dfdf=$row['amount'];
				echo formatMoney($dfdf, true);
				?>
				</td>
				</tr>
				<?php
					}
				?>
			
				<tr>
					<td colspan="3" style=" text-align:right;"><strong style="font-size: 20px;">Total: &nbsp;</strong></td>
					<td colspan="1"><strong style="font-size: 12px;">
						<?php
					$sdsd=$_GET['invoice'];
					$resultas = $db->prepare("SELECT sum(amount) FROM sales_order WHERE invoice= :a");
					$resultas->bindParam(':a', $sdsd);
					$resultas->execute();
					for($i=0; $rowas = $resultas->fetch(); $i++){
					$fgfg=$rowas['sum(amount)'];
					echo formatMoney($fgfg, true);
				}
				?>
					</strong></td>
				</tr>
				<?php if($pt=='cash'){
				?>
				<tr>
					<td colspan="3"style=" text-align:right;"><strong style="font-size: 12px; color: #222222;">Cash Tendered:&nbsp;</strong></td>
					<td colspan="1"><strong style="font-size: 12px; color: #222222;">
						<?php
					echo formatMoney($cash, true);
					?>
					</strong></td>
				</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="3" style=" text-align:right;"><strong style="font-size: 12px; color: #222222;">
					<font style="font-size:20px;">
					<?php
					if($pt=='cash'){
					echo 'Change:';
					}
					if($pt=='credit'){
						echo 'Due Date:';
					}
					?>&nbsp;
					</strong></td>
					<td colspan="1"><strong style="font-size: 20px; color: #222222;">
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
					if($pt=='credit'){
					echo $cash;
				}
					if($pt=='cash'){
					echo formatMoney($amount, true);
					}
					?>
					</strong></td>
				</tr>
				
			</tbody>
		</table>

	</div>
</div>
</div>
</div>
</div>
</div>
</center>
<div class="pull-right" style="margin-right:100px;">
		<a href="javascript:Clickheretoprint()" style="font-size:20px;"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
		</div>	
	</div>
</div>


