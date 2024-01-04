<?php 
session_start();
      if($_SESSION['logged in'])
      {

      $username=$_SESSION['user'];
      $connect = mysqli_connect("localhost", "rashmi", "rashmi@123", "sih");
      }
      else
      {
      	//header("location:login.php");
      }
?>