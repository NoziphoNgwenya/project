<?php
include'connection.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="myStyle.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: black;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    
    input[type=text]:focus {
  background-color:  rgb(255, 0, 0);
  
}
input[type=text] {
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 75%;
}
input[type=password]:focus {
  background-color:  rgb(255, 0, 0);
  
}
input[type=password] {
  transition: width 0.4s ease-in-out;
}

input[type=password]:focus {
  width: 75%;
}
.button{
    background-color:white;
    color: black;
    text-align: center;
    cursor: pointer;
    border: 2px solid;
}

.button:hover{
    background-color:  rgb(255, 0, 0);
}
.button:active {
    background-color: black;
    box-shadow: 0 5px black;
    transform: translateY(4px);
  }
     /* Style The Dropdown Button */
.dropbtn {
  background-color: red;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: black;
}
  </style>
</head>
<body>
<?php
include "loginPHP.php";
if(!isset($_SESSION['username']) AND !isset($_SESSION['passwords']))
{
?>
<form action="login.php" name="unlogged" method="post">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="logo.png" alt="logo" style="width:80px; height:50px;"/>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul> -->
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    

    </div>
    <div class="col-sm-8 text-center" style="Top:40%; backgound-color:black;"> 
    <p>Please enter your login details</p>

  <div>
  <form class="" action="login.php" method="post" >
    <label>Username<br>
      <input type="text" name="username" >
    </label><br>
    <label>Password<br>
      <input type="password" name="password">
    </label><br>
     <button type="submit" name="login" class="button">Login</button>
  </form></div>
  
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p><img src ="1.jpg" alt="Bird" style="width:100%; height:auto;"/></p>
      </div>
      <div class="well">
        <p><img src ="2.jpg" alt="Bird" style="width:100%; height:aut;"/></p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p> &copy Created by N Ngwenya</p>
</footer>
</form>
<?php
}
else{
  ?>
<form action="login.php" name="logged"method="post">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="logo.png" alt="logo" style="width:80px; height:50px;"/>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li><a href="register.php">Register</a></li>
        <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
       
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav left">
    <div class="dropdown">
  <button class="dropbtn"> <span class="glyphicon glyphicon-user"></span> User</button>
  <div class="dropdown-content">
  <?php
  $display="SELECT * FROM mytable WHERE username='$_SESSION[username]'";
$querylogin=mysqli_query($connection,$display);
$ver=mysqli_fetch_all($querylogin,MYSQLI_ASSOC);

foreach ($ver as $array) {
  ?>
    <a href="#"><?php echo$array['names'];?></a>
    <a href="#"><?php echo$array['surname'];?></a>
    <a href="#"><?php echo$array['email'];?></a>
    <?php
}

?>
<form action="register.php" name="logout" method="post" >
<button type="submit" name="logout" id="logout" class="btn"  >Logout</button>
</form>
  </div>
</div>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
     
 <p>YOU have Successfully logged in!</p>
      <p>Have fun!</p>
    </div>
    <div class="col-sm-2 sidenav right">
      <div class="well">
        <p><img src ="1.jpg" alt="Bird" style="width:100%; height:auto;"/></p>
      </div>
      <div class="well">
        <p><img src ="2.jpg" alt="Bird" style="width:100%; height:100%;"/></p>
      </div>
    </div>
  </div>
  
</div>

<footer class="container-fluid text-center">
  <p> &copy Created by N Ngwenya</p>
</footer>
</form>
<?php
}
?>
</body>
</html>

