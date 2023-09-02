<?php include("oeheader.php");
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
                    <table class="table table-bordered"> <tr><th>Subject Name </th></tr>
<?php

$rs=mysql_query("select * from mst_subject");
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=left ><a href=oeshowtest.php?subid=$row[0]>$row[1] </a>";
}  

                 
    ?>                
                    
                </div> 
              
                

 









            </div> 
            
             
 <?php
} 
 
  include("oefooter.php"); 
  
  ?>            
            