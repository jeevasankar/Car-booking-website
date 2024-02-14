<style>
      body {
      margin: 0;
      box-sizing: border-box;
      cursor: pointer;
    }

    /* CSS for header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: white;
    }

    .header {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }
    .logo{
        width: 150px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
    }
    .nav-item:hover{
      background-color: #5edaf0;
    }
    .dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 25px;  
  border: none;
  outline: none;
  color: rgb(12, 12, 12);
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ee9595;
}

.dropdown:hover .dropdown-content {
  display: block;
}
h1{
  text-align: center
}

</style>
<h1>CAR BOOKING</h1>
<header class="header">
    <img class="logo"  src="logo-1.png" alt="me" width="100px">
    <nav class="nav-items">
      <a href="home.php">Home</a>
      <a href="add_cars.php">Add cars</a>
      <a href="add_cars_img.php">add cars details</a>
      <a href="report.php">view cars</a>
      <a href="web_view.php">web_view</a>
      <a href="logout.php">  Logout</a>
      <?php
            if(isset($_SESSION['login_status']) ) { ?>
              <a href="#">Welcome:  <?php echo $_SESSION['username']; ?></a>
          <?php }?>
    </nav>
  </header>
  

