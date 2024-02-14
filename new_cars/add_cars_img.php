<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php  require_once('header.htm')?>

</head>
<body>
    <!-- TOP  -->

    <!-- TOP  -->


<div class="container-fluid">

<?php
require_once('assets/navbar.php');
function disp_newspaper()
					{
						include('assets/DBcon.php');
						$sql = "SELECT * FROM newspaper";
						$result = $conn->query($sql);
						$msg="";
						if ($result->num_rows > 0)
						{

						  while($row = $result->fetch_assoc())
						  {
							$msg.= "<option value='". $row["cars_code"] ."' >". $row["carstype_name"] ."</option>";
						  }
						}
						$conn->close();
						return $msg;
					}

?>
        <div class="col-md-12">
        <div>
                 <form id="compliant_form"  method="post" action="add_cars_img_reg.php" enctype="multipart/form-data" >
                    <table class="table">
                        <tr>
                            <td>Car type:</td>
                            <td>
									<select class="form-control" id="news_paper" name="news_paper">
										<option value="">Select  car type</option>
										<?php  echo disp_newspaper(); ?>
									</select>
                              </td>
                        </tr>
                        <tr>
                            <td>launched date:</td>
                            <td>
                                <input type="date" class="form-control" name="pub_date" value="empid" required="required" >
                            </td>
                        </tr>
                        <tr>
                            <td>Title:</td>
                            <td>
                                <input type="text" class="form-control" name="clip_title" required="required" >
                            </td>
                        </tr>
                        <tr>
                            <td>Description:</td>
                            <td>
                                 <textarea class="form-control" rows="6" id="comment" name="clip_desc" required></textarea>
                                 <br/>
																 		<b>Do not use single or double quote </b><br/>
                                 Note: Description should have all the necessary information.
                            </td>
                        </tr>
                        <tr>
                            <td>Upload Image:</td>
                            <td>
                                <input class="form-control" type="file" id="clip_name" name="clip_name" accept=".jpg,.jpeg" required>
                            </td>
                        </tr>
                       
                        <tr>
                            <td colspan="2">
                                <center>
                                    <input type="submit" id="saveBtn" value="Submit" name="save" class="btn btn-success" />
                                </center>
                            </td>
                        </tr>
                    </table>
                </form>

                </div>

        </div>


</div>

</div>
<hr>
<?php   include_once('assets/footer.php');?>
</body>
</html>

