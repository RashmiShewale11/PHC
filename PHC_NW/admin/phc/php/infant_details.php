<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'shivani';
$dbName = 'sih';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error)
    echo "Connection Failed .." . $db->connect_error;
else
    echo "<p>Connected</p>";

if(isset($_POST['sub'])) {

    $total = mysqli_real_escape_string($db, $_POST['total']);
    $mortal = mysqli_real_escape_string($db, $_POST['mortal']);
    $male = mysqli_real_escape_string($db, $_POST['male']);
    $female = mysqli_real_escape_string($db, $_POST['female']);
    $above = mysqli_real_escape_string($db, $_POST['above']);
    $below = mysqli_real_escape_string($db, $_POST['below']);
    $vaccination = mysqli_real_escape_string($db, $_POST['vaccination']);


    $insert_query = $db->query("insert into infant_details values ('1','$total','$mortal','$male','$female','$above','$below','$vaccination')");

    //$insert_query = $db->query("insert into staff_details (phcid)values ('1')");
    if ($insert_query) {
        //  echo "<script>alert('Inserted Successfully')</script>";
        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';

        header("Location: /infant.php");
        //  exit();
    } else
        echo '<script>alert("Problem Inserting Data")</script>';
}

$db->close();
?>