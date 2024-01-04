<?php
/**
 * Created by IntelliJ IDEA.
 * User: rashmi
 * Date: 25/2/19
 * Time: 5:22 PM
 */

include 'dbconfig.php5';

    if(isset($_GET['phcid']))
        $i=$_GET['phcid'];
$sqli="UPDATE phcregister set Status1=2 where PHCid=$i";
$result=$conn->query($sqli);
if($result)
{
    header("location:phcReq.php5");
}
$conn->close();
?>