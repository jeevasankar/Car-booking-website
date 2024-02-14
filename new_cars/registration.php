<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<style>
    *{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

.sign_up{
    height: 100vh;
    background: url("mus5.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container{
    background-color: white;
    width: 380px;
    height: 400px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

h1{
    color: red;
    font-size: 30px;
}
#create{
    font-size: 12px;
}

input{
    padding: 6px;
    margin-top: 10px;
    margin-left: 10px;
}

.details input{
   width: 335px;
}

.details{
    display: flex;
    flex-direction: column;
}

.check{
    display: inline-block;
}

#register_btn{
    text-decoration: none;
    padding: 10px 120px;
    border: 1px solid green;
    background: green;
    color: white;
    border-radius: 8px;
    margin-top: 20px;
}

#register_btn:hover{
    background: transparent;
    color: black;
    border: 1px solid black;
    transition: .5s;
}

.term a{
    color: rgb(141, 27, 254);
}

#privacy{
    color: green;
}

.signIn{
    display: block;
    color: black;
    position: absolute;
    top: 73%;
}

.checkbox{
    width: 355px;
    margin-top: 10px;
}

.signIn p span a{
    color: black;
    margin-left: 6px;
}
    </style>
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>


<section class="sign_up">
        <div class="container">
            <h1>Register</h1>
            <p id="create">Create your account. It's free and only takes a minute</p>
            <form name="registration" action="" method="post">
            
            <div class="details">
            <input type="text" name="username" placeholder="Username" required />
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required />

                
            </div>
            <div class="checkbox">
                <input type="checkbox" class="check" required>
                <p class="check">I accept the<span class="term"><a href="#">Terms of use</a></span> & <span><a id="privacy" href="#">Privacy Policy</a></span></p>
            </div>
            <input type="submit" name="submit" value="Register" />
    </form>
    
         
        </div>
        <div class="signIn">
            <p>Already have an account?<a href="index.php">Sign in</a></p>
        </div>
    </section>
<?php } ?>
</body>
</html>