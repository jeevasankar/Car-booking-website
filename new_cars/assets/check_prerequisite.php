
<?php 
function prerequisite_status()
{
            include('dbconnect.php');  
            $empid = $_SESSION['empid'];
         
              /* Ensure Mail / Phone Not Register Before  */
         
            $sql = "SELECT * FROM  appraisal_prerequisite where empid='$empid'";
            $result = $conn->query($sql);      
            if ($result->num_rows == 1)
            {
                 return true;
            }
            else 
             return false;
}

?>