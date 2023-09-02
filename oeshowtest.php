<?php include("oeheader.php");


$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}


 if (!isset($_SESSION[login]))
{
   loginform($error); 
}

 
if (isset($_SESSION[login]))
{
   ?>  
  
  
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Select Subject for Quiz </h1> 
<?php
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";



$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{
	echo "<h2 style='color:red;'> No Quiz for this Subject </h2>";
	exit;
}
?>



                    <table class="table table-bordered"> <tr><th><h3>Select Quiz Name</h3> </th></tr>

<?php
 
 

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a></td></tr>";
}

echo '</table>';


 
                 
    ?>                
                    
                </div> 
              
                <div class="col-md-4">
						<a href="<?= $previous ?>"> <img src="images/b.png" class="img img-responsive" width="30px" height="30px" alt=""> </a>                  
                </div>

                <div class="col-md-4">
						<a href="oeindex.php"> <img src="images/h.png" class="img img-responsive" width="30px" height="30px" alt=""> </a>                 
                </div>
                
                <div class="col-md-4"> 
						<a href="<?= $previous ?>"> <img src="images/n.png" class="img img-responsive" width="30px" height="30px" alt=""> </a>                    
                </div>

 









            </div> 
            
             
 <?php
} 
 
  include("oefooter.php"); 
  
  ?>            
            