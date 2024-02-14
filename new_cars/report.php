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
                          $result = $conn->query($sql);

                        

                          $i = 0;
                          if ($result->num_rows > 0) {   ?>
                            <table id="reglisttbl"  class="table table-striped ">
                            <tr>
                                    <td>Clipping ID</td>
                                    <td>Newspaper Name</td>
                                    <td>Published Date</td>
                                    <td>Title</td>
                                    <td>Description</td>
                                    <td>File</td>
                            </tr>

                <?php
                            while($row = $result->fetch_assoc())
                            {
                                $i++;
   						 ?>
                           <tr>
                        
                            <td><?php   echo $row["ID"]; ?></td>
                            <td><?php   echo $row["cars"]; ?></td>
                            <td>
                                <?php $dtime = new DateTime($row['pub_date']); 
                                   echo $dtime->format("d-m-Y"); ?> 
                            </td>
                            <td><?php   echo $row["clip_title"]; ?></td>
                            <td><?php   echo $row["clip_desc"]; ?></td>
                            <td><?php   echo "<img src='clippings/".$row["clip_name"]."' width='50px' height='50px'>"; ?></td>
                        </tr>
                        <?php
                               }
                               $conn->close();
                            }
                        ?>
                   </table>
                </div>
    </div>
</div>
</body>
</html>
