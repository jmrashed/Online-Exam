<?php
session_start();
error_reporting(1);
 
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("../database.php");
	$rs=mysql_query("select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}

include("menu.php");

?>

<h1>Welcome to Admistrative Area </h1>
<hr>
<div class="row">
	<div class="col-md-3">
		<a href="testadd.php">
			<img src="images/adde.png" style="height:60px; width: 100px" class="img img-responsive img-thumbnail" alt="">
		</a>	
	</div>
	
	
		<div class="col-md-3">
		<a href="subadd.php">
			<img src="images/adds.png" style="height:60px; width: 100px" class="img img-responsive img-thumbnail" alt="">
		</a>	
	</div>
	
		<div class="col-md-3">
		<a href="questionadd.php">
			<img src="images/addq.png" style="height:60px; width: 100px" class="img img-responsive img-thumbnail" alt="">
		</a>	
	</div>
	
	
	
	
	
</div>	
 
 
         
 <?php 
include("footer.php");
?>
