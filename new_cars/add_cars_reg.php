<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<?php
if(isset($_POST['save']))
{   
   $cars_code = trim($_POST['cars_code']); 
   $carsname_name = trim($_POST['cars_name']); 
   
  
      include('assets/DBcon.php');
      /*QUERY*/
      $sql = "INSERT INTO newspaper (cars_code,carstype_name) VALUES 
         ('$cars_code','$carsname_name')";
      
      if ($conn->query($sql) === TRUE) {
      echo "New car added successfully";
      
      }
      else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close(); 
   
}

?>