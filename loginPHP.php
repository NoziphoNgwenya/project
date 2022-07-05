<?php
include 'connection.php';


if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $verifyLog="SELECT * FROM mytable WHERE username='$username' AND passwords='$password'";
  $query=mysqli_query($connection,$verifyLog);
  $final=mysqli_num_rows($query) or die ("<script> alert('something went wrong!')</script>");
  if($final>0)
  {
    $_SESSION['username']=$username;
    $_SESSION['passwords']=$password;
    header('Location:login.php');
  }
  else
  {
    echo"<script> alert('Incorrect credentilals!')</script>";
  }
}
if(isset($_POST['logout']))
{
  session_destroy();
  header('Location:login.php');
}
?>