<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'shivani';
$dbName = 'sih';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error)
    die("Connection Failed .." . $db->connect_error);

if (isset($_POST['save'])) {

    $total = mysqli_real_escape_string($db, $_POST['total']);
    $expert = mysqli_real_escape_string($db, $_POST['expert']);
    $doctor = mysqli_real_escape_string($db, $_POST['doctor']);

    $sba = mysqli_real_escape_string($db, $_POST['sba']);
    $home = mysqli_real_escape_string($db, $_POST['home']);
    $inst = mysqli_real_escape_string($db, $_POST['inst']);
    $comp = mysqli_real_escape_string($db, $_POST['comp']);
    $death = mysqli_real_escape_string($db, $_POST['death']);
    $abort = mysqli_real_escape_string($db, $_POST['abort']);
    $age1 = mysqli_real_escape_string($db, $_POST['age1']);
    $age2 = mysqli_real_escape_string($db, $_POST['age2']);
    $age3 = mysqli_real_escape_string($db, $_POST['age3']);
    $inc = mysqli_real_escape_string($db, $_POST['inc']);
    $anc = mysqli_real_escape_string($db, $_POST['anc']);
    $pnc = mysqli_real_escape_string($db, $_POST['pnc']);


    if ($expert == NULL)
        $expert = 0;
    if ($doctor == NULL)
        $doctor = 0;
    if ($sba == NULL)
        $sba = 0;
    if ($home == NULL)
        $home = 0;
    if ($inst == NULL)
        $inst = 0;
    if ($comp == NULL)
        $comp = 0;
    if ($death == NULL)
        $death = 0;
    if ($age1 == NULL)
        $age1 = 0;
    if ($age2 == NULL)
        $age2 = 0;
    if ($age3 == NULL)
        $age3 = 0;
    if ($inc == NULL)
        $inc = 0;
    if($pnc==NULL)
        $pnc=0;
    if($anc==NULL)
        $anc=0;



    $insert_query = $db->query("insert into pregnancy_details values ('1','$total','$expert','$doctor','$sba','$home','$inst','$comp','$death','$age1','$age2','$age3','$abort','$anc','$pnc','$inc')");

    if ($insert_query) {
        //  echo "<script>alert('Inserted Successfully')</script>";
        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';

        header("Location:/pregnancy.php");
    } else
        echo '<script>alert("Problem Inserting Data")</script>';
}

$db->close();
?>