<?php

session_start();
error_reporting(1);
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
include("function.php");
require("../database.php");

include("header.php");


echo "<br><h2><div  class=head1>Add Test</div></h2>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysql_query("insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')",$cn) or die(mysql_error());
echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script> 

<div class="container">
	<div class="row">
	
<form class="form-horizontal" name="form1" method="post" onSubmit="return check();">
     
<div class="form-group">
    <label for=" ">Select Subject</label>
    
    
		<select class="myselect form-control" name="subid"> 
 <?php
	$rs=mysql_query("Select * from mst_subject order by  sub_name",$cn);
	  while($row=mysql_fetch_array($rs))
	  {
	  	if($row[0]==$subid)
	  	{
	  		echo "<option value='$row[0]' selected>$row[1]</option>";
	  		}
	  		else
	  		{
	  			echo "<option value='$row[0]'>$row[1]</option>";
	  			}
	  } 
?>

</select>  
 </div>

<div class="form-group">
    <label for="Enter Exam Name">Enter Exam Name</label>
    <input type="text" class="form-control"  placeholder="Enter Exam Name"  name="testname">
  </div>
  
  
<div class="form-group">
    <label for="Enter Total Question No.">Enter Total Question No.</label>
    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="10"  name="totque">
  </div>
  
  
  
  
  
 <input type="submit" class=" form-control btn btn-primary" name="submit" value="Add" > 
	
	</div>

</form>

</div>


 <?php
 
 include("footer.php");
 
 ?>
