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
    ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Edit</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>

    body{
      background: linear-gradient(-45deg, #2196F3 50%, #EEEEEE 50%);
      background-repeat: repeat;
    }
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
    .photo{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .spacecenter{
      margin-top: 5em;
      margin-bottom: 5em;
    }
    .form-row{
      display:flex;
      width=100%;
      padding:5px;
    }
    #Add{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="navbar.css" rel="stylesheet">
</head>

<body>
  <!--@@@@@@@@@@@@@@@@@@@@@@@@@@ NAVBAR --------------------------------->
  <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="Homepage1.php" style=""
      onMouseOver="this.style.color='#2196F3'" onMouseOut="this.style.color='white'">HOME PAGE</a>
      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
          <a href="signout.php"  class="nav-link active" name="button"
          style="color:white; position:absolute; top:10px; right:7px;"
          onMouseOver="this.style.color='red'" onMouseOut="this.style.color='white'" >LOGOUT</a>
            <?php

 ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--@@@@@@@@@@@@@@@@@@@@@@@@@@-CENTER ------------------------------------------------------------->

  <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@ ALBUM ------------------------------------------------------------->
<div class=""><div id="imgcontainer"></div>
<div class="container text-center spacecenter">
<h1 class="fw-light">Opportunities</h1>
  <a class="btn btn-primary my-2" href="#Add">Edit opportunity</a>
</div>
<hr class="mt-3 mb-5" style="border-top: 1px solid ">
<!--#######         @          CARD         @               ########-->

<div class="card mb-3 center">
  <?php
$id = $_GET['id'];
      $sql =  "SELECT * FROM `opportunity` WHERE `id` = '$id';";

        $result = mysqli_query($con, $sql);
         if(!$result)
            {
              die("eRROOR");
            }

              $rows=mysqli_fetch_assoc($result);
  ?>

  <div class="card-body">
    <h4 class="card-title" style="text-align: center;"><?php echo $rows['title'];?></h5>
    <h6 class="card-title">City: <?php echo $rows['location'];?></h6>
    <h6 class="card-title">Date: <?php echo $rows['date'];?></h6>
    <h6 class="card-title">Time: <?php echo $rows['time_from'];?> - <?php echo $rows['time_to'];?></h6>
    <a href="<?php echo $rows['link'];?>">apply here</a>
    <hr>
    <p class="card-text"><?php echo $rows['description'];?></p>
    </div>
  <?php

  ?>
</div>

<?php

?>
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@ Form ------------------------------------------------------------->
<hr class="mt-3 mb-5 spacecenter" style="border-top: 1px solid ">
<form id="Add" action="" method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">opportunity Title</label>
      <input type="text" class="form-control" name="title" id="validationDefault01" placeholder="opportunity" value="<?php echo $rows['title'];?>">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" class="form-control" name="location" id="validationDefault03" placeholder="City" value="<?php echo $rows['location'];?>">
    </div>
  </div>
<div class="form-row">
    <div class="col-md-4 mb-3">
    <label for="validationDefault01">Application link</label>
      <input type="text" class="form-control" name="link" id="validationDefault01" placeholder="link" value="<?php echo $rows['link'];?>">
    </div>
    <div class="col-md-4 mb-3">
      <label for="date" class="">Date</label><br>
        <div class="" id="">
            <input type="date" class="form-control" name="date" id="validationDefault01" placeholder="date" value="<?php echo $rows['date'];?>">
        </div>
</div>
  </div>
  <div class="form-row">
  <div class="col-md-4 mb-3">
      <label for="date" class="">Time from</label><br>
        <div class="" id="">
          <input type="time" class="form-control" name="time_from" id="validationDefault01" placeholder="time_from" value="<?php echo $rows['time_from'];?>">
        </div>
  </div>
  <div class="col-md-4 mb-3">
    <label for="date" class="">Time to</label><br>
      <div class="" id="">
          <input type="time" class="form-control" name="time_to" id="validationDefault01" placeholder="time_to" value="<?php echo $rows['time_to'];?>">
      </div>
  </div>
  </div>
  <div class="form-row">
    <div class="col-md-8 mb-3">
  <label for="exampleFormControlTextarea1">Add description</label>
  <textarea class="form-control" name="Description" id="exampleFormControlTextarea1" rows="2" value="<?php echo $rows['description'];?>"></textarea>
    </div>

  </div>
  <div class="form-group">
        <div class="form-group mt-5 mb-0" style="display: flex; justify-content:center; padding-bottom:3em;">
                <button type="submit" name="submit"  style="margin-right:5px;"  class="btn btn-primary">Submit</button>
                <button type="reset" action="#navbar" class="btn btn-secondary">Reset</button>
        </div>
    </div>

</form>

<?php
if (isset($_POST['submit'])) {
  $query = "UPDATE opportunity SET title='$_POST[title]' , location = '$_POST[location]'
   , description ='$_POST[Description]', date ='$_POST[date]' , time_from='$_POST[time_from]' ,
   time_to='$_POST[time_to]'
  WHERE id = '$id';";
   $result = mysqli_query($con, $query);
   if(!$result){
  echo'failed';

}

} header('Location:Homepage1.php');exit();
 ?>

</body>
</html>
