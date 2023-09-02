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

//include("menu.php");

?>

	<div class="container">
		<div class="row myrow">
			<h1>Welcome to Administrator Area </h1>
			<div class="col-md-4 border">
              <ul class="mymenu">
  					<li><a class="active" href="#home">Home</a></li>
  					<li><a href="#news">News</a></li>
 					 <li><a href="#contact">Contact</a></li>
 					 <li><a href="#about">About</a></li>
					</ul>
				</div>
				
				<div class="cal-md-8 border">
				
				<p>Thjis os a sakl55555555555555
				5555555555555555555555555djklaj</p>
				</div>
				
		</div>
</div>

<p class="head1">Welcome to Admistrative Area </p>
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<p class="style7"><a href="subadd.php">Add Subject</a></p>
<p class="style7"><a href="testadd.php">Add Test</a></p>
<p class="style7"><a href="questionadd.php">Add Question </a></p>
<p align="center" class="head1">&nbsp;</p>
</div>
</div>
 
         
 <?php 
include("footer.php");
?>
