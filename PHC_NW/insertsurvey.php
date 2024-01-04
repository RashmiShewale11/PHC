<?php


$connect = mysqli_connect("localhost", "rashmi", "rashmi@123", "sih");
session_start();
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
if(isset($_POST['sur']))
{
    $date=mysqli_real_escape_string($connect, $_POST['date']);
    $state=mysqli_real_escape_string($connect, $_POST['state']);
    $phctype=mysqli_real_escape_string($connect, $_POST['phctype']);
    $hours=mysqli_real_escape_string($connect, $_POST['hours']);
    $camp=mysqli_real_escape_string($connect, $_POST['camp']);
    $training=mysqli_real_escape_string($connect, $_POST['training']);
    $water=mysqli_real_escape_string($connect, $_POST['water']);
    $clean=mysqli_real_escape_string($connect, $_POST['clean']);
    $sep_toilet=mysqli_real_escape_string($connect, $_POST['sep_toilet']);
    $experts=mysqli_real_escape_string($connect, $_POST['experts']);
    $vac_women=mysqli_real_escape_string($connect, $_POST['vac_women']);
    $vac_child=mysqli_real_escape_string($connect, $_POST['vac_child']);
    $diet=mysqli_real_escape_string($connect, $_POST['diet']);
    $rate=mysqli_real_escape_string($connect, $_POST['rate']);


    $sql="INSERT into survey(date,state,phctype,hours,camp,training,water,clean,sep_toilet,experts,vac_women,vac_child,diet,rate)  VALUES ('$date','$state','$phctype','$hours','$camp','$training','$water','$clean','$sep_toilet','$experts','$vac_women','$vac_child','$diet','$rate')";
    $row=$connect->query($sql);

    if($row)
    {
        echo "Inserted succesfully";
        header("location:phcsurvey.php");
    }

$connect->close();
}
?>
