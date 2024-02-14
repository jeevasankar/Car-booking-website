<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css" />
<style>
    body
{
    margin: 0;
    padding: 0;
    background-image: url("track.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    font-family: 'Arial';
}
.login{
        width: 382px;
        overflow: hidden;
        margin: auto;
        margin: 20 0 0 450px;
        padding: 80px;
        background: #71d6ed;
        border-radius: 15px ;

}
h2{
    text-align: center;
    color: #090909;
    padding: 20px;
}
label{
    color: #0a0a0a;
    font-size: 17px;
}
#Uname{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;
}
#Pass{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;

}
#log{
    width: 150px;
    height: 30px;
    border: none;
    border-radius: 14px;
    padding-left: 3px;
    color: blue;


}
span{
    font-size: 20px;
}
a{
    margin-left: 15px;
    background-color: white;
}
    </style>
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
	    exit();
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>


<h2>Login Page</h2><br>
    <div class="login">
    <form action="" method="post" name="login">
        <label><b>User Name</b></label>
        <input type="text" name="username" placeholder="Username" required />
        <br><br>
        <label><b>Password</b></label>
        <input type="password" name="password" placeholder="Password" required />
        <br><br>
        <input type="checkbox" id="check">
        <span>Remember me</span>
        <br><br>
        <input name="submit" type="submit" value="Login" />
        <br><br>
        <p>If you don't have account <a href="registration.php">Register</a></p>
    </form>
</div>
<?php } ?>
</body>
</html>