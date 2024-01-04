<?php 
session_start();
      $connect = mysqli_connect("localhost", "rashmi", "rashmi@123", "sih");
      if ($connect->connect_error) {
			die("Connection failed: " . $connect->connect_error);
		}
?>