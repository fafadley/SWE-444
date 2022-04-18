<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "OFG";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    echo"failed";
}




$id = $_GET['id'];
    $sql =  "DELETE FROM `opportunity` WHERE id = '$id';";
    $result = mysqli_query($con, $sql);
    if($result)
    {

        header("location:Homepage1.php");
        exit;
    }
    else
    {
        echo "Error deleting record"; // display error message if not delete
    }
?>
