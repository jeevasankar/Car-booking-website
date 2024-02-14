<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('header.htm')?>
    <script type="text/javascript" src="js/export_print.js"></script>
</head>
<body>
    <div class="container-fluid">
    <?php  require_once('assets/DBcon.php')?>

    <div class="row" style="padding:5px;">

<?php  require_once('assets/navbar.php'); ?>
               <div class="col-sd-12 full_page " >
 				         <?php
                          include('assets/DBcon.php');
                          //$empid=$_SESSION['empid'];
                          $sql = "SELECT cp.*,np.carstype_name  FROM `clippings` as cp,`newspaper` as np WHERE np.cars_code=cp.cars order by cp.pub_date DESC";
                          $sql = "SELECT *  FROM `clippings` WHERE cars_code="HIGH" order by entry_on DESC";
                          SELECT *  FROM `clippings` WHERE cars="HIGH" order by pub_date DESC";
                          $result = $conn->query($sql);

                        

                          $i = 0;
                          if ($result->num_rows > 0) {   ?>
                            <table id="reglisttbl"  class="table table-striped ">
                           

                <?php
                            while($row = $result->fetch_assoc())
                            {
                                $i++;
   						 ?>
                           <tr class="text-center">
                            <td>
                                <?php $dtime = new DateTime($row['pub_date']); ?>
                                <?php   echo "<img src='clippings/".$row["clip_name"]."' width='440' height='400'>"; ?></br> 
                                <?php   echo "<br/>".$row["cars"]. " - ". $dtime->format("d-m-Y");?>
                            </td>   
                            <td>
                                <?php if ($row = $result->fetch_assoc()) { ?>
                                <?php $dtime = new DateTime($row['pub_date']); ?>
                                <?php   echo "<img src='clippings/".$row["clip_name"]."' width='440' height='400'>"; ?></br> 
                                <?php   echo "<br/>".$row["cars"]. " - ". $dtime->format("d-m-Y");?>
                                <?php } ?>
                            </td>                           
                            </tr> 
                             <?php } 

                               $conn->close();
                            }
                        ?>
                   </table>
                </div>
    </div>
</div>
</body>
</html>
