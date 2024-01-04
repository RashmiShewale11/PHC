<?php
/**
 * Created by IntelliJ IDEA.
 * User: shivani
 * Date: 22/2/19
 * Time: 11:24 PM
 */

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'shivani';
$dbName = 'sih';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error)
    die("Connection Failed .." . $db->connect_error);

if (isset($_POST['sub'])) {

    $name = $_POST['eq_name'];
    $available = $_POST['available'];
    $functioning = $_POST['functioning'];



        $insert_query = $db->query("insert into equipment_details values ('1','$name','$available','$functioning')");

        if ($insert_query) {

            echo "<script>alert('Inserted Successfully')</script>";
            header("Location: /inventory.php");
            exit();
        } else
            echo '<script>alert("Problem Inserting Data")</script>';

}

$db->close();
?>