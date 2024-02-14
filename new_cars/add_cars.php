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

/*  */

?>
        <div class="col-md-12">
            <div>
                 <form id="compliant_form"  method="post" action="add_cars_reg.php" enctype="multipart/form-data">
                    <table class="table">
                       
                        <tr>
                            <td>Car Code:</td>
                            <td>
                            <input type="text" class="form-control" name="cars_code" required="required">
                            </td>
                        </tr>
                        <tr>
                            <td>Car type:</td>
                            <td>
                                <input type="text" class="form-control" name="cars_name" required="required">
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

