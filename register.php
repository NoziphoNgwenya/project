<?php
include "connection.php";
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
input[type=email]:focus {
background-color: rgb(255, 0, 0);

}
input[type=email] {
transition: width 0.4s ease-in-out;
}

input[type=email]:focus {
width: 75%;
}
input[type=number]:focus {
background-color: rgb(255, 0, 0);

}
input[type=number] {
transition: width 0.4s ease-in-out;
}

input[type=number]:focus {
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


  </style>
</head>
<body>

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
        <li><a href="index.php">Home</a></li>
        <li  class="active"><a href="register.php">Register</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/><br/>
    <form action="register.php" name="logout" method="post" >
<button type="submit" name="logout" id="logout" class="btn"  >Logout</button>
</form>
    </div>
    <div class="col-sm-8 text-center"> 
      <h1></h1>
      <form action="register.php" name="registerForm" id="registerForm" method="post">
        <label for="name">Name </label><br>
        <input type="text" id="name" name="name" ><br><br>
        <label for="surname">Surname </label><br>
        <input type="text" id="surname" name="surname"><br><br>
        <label for="name">Username </label><br>
        <input type="text" id="username" name="username" ><br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="contact">Cellphone</label><br>
        <input type="tel" id="contact" name="contact" ><br><br>
        <label for="sname">Password </label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" value="Submit" name="register" class="button" >SUBMIT</button>
        
    </form>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p><img src ="1.jpg" alt="Bird" style="width:100%; height:auto;"/></p>
      </div>
      <div class="well">
        <p><img src ="2.jpg" alt="Bird" style="width:100%; height:auto;"/></p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p> &copy Created by N Ngwenya</p>
</footer>

</body>
</html>
<?php
include "registePHP.php";
?>