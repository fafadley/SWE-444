<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "OFG";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (mysqli_connect_errno()) {
        die("Can not connect the DB ".mysqli_connect_error());
    }
    ?>



 <?php

    $title    =    $_POST['title'];
    $description = $_POST['description'];
    $location =    $_POST['location'];
    $date =        $_POST['date'];
    $TF =          $_POST['time_from'];
    $TT =          $_POST['time_to'];
    $link =        $_POST['link'];

  /*  if(is_dir($directory) == false){
    mkdir("img/" . $Rname); }

    $filedir = $directory .'/'. basename($_FILES['uploadedFile']['name']);
    move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $filedir);
    echo '<h1> you have successfully upload your file( ' . $_FILES['uploadedFile']['name'] . ' )</h1>';
*/


    if (isset($_POST['submit'])) {
      $query = "INSERT INTO opportunity
       VALUES ('0','$title' , '$description' , '$location' ,'$date','$TF','$TT','$link'); ";

echo'failed';
      $result = mysqli_query($con, $query);

       if(!$result){

      echo'failed';

    }
       header('Location:Homepage1.php');
    }



?>











    ///
