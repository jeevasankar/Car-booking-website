<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<?php
if(isset($_POST['save']))
{   
   $empid="KEC"; 
   $news_paper = trim($_POST['news_paper']); 
   $pub_date = trim($_POST['pub_date']); 
   $clip_title = trim($_POST['clip_title']); 
   $clip_desc = trim($_POST['clip_desc']); 

   
   /*EVENT IMAGE FILE UPLOAD*/
   $eventtmp= $_FILES['clip_name']["tmp_name"];
   $target_file =   basename($_FILES["clip_name"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   $clip_name= date('m_d_Y_h_i_s', time()).".".$imageFileType;
   $eventpath= "clippings/".$clip_name;

   if($imageFileType != "jpg" && $imageFileType != "jpeg")
   {
      echo "Sorry, only JPG and JPEG files are allowed.";
   }
   else
   { 
      if($_FILES["clip_name"]["size"] == 0)
      {
         $clip_proof = "--"; //$row['certificate'];			
      }
      else{ 
         if(move_uploaded_file($eventtmp,$eventpath))
         {
            $clip_proof = $clip_name;
         }
      }


      include('assets/DBcon.php');
      /*QUERY*/
      $sql = "INSERT INTO clippings (cars,pub_date,clip_title,clip_desc,clip_name) VALUES 
         ('$news_paper','$pub_date','$clip_title','$clip_desc','$clip_proof')";   
      
      if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      
      }
      else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close(); 
   }
}

?>