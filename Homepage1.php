<?php
    $servename = "localhost";
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


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Home page</title>

  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


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
    .photo{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
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
      <a class="navbar-brand" href="Homepage1.php">OFG</a>
      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a href="signout.php"  class="nav-link active" name="button"
            style="color:white; position:absolute; top:10px; right:7px;"
            onMouseOver="this.style.color='red'" onMouseOut="this.style.color='white'" >LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--@@@@@@@@@@@@@@@@@@@@@@@@@@-CENTER ------------------------------------------------------------->

  <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@ ALBUM ------------------------------------------------------------->

<div class="container text-center spacecenter">
<h1 class="fw-light">Opportunities</h1>
  <a class="btn btn-primary my-2" href="#Add">Add opportunity</a>
  <p class="lead text-muted">You can View, Edit, Delete from the cards</p>

</div>
<hr class="mt-3 mb-5" style="border-top: 1px solid ">

<!--#######         @          CARDS          @               ########-->

<div class="row row-cols-1 row-cols-md-3 g-4">
  <?php
      $sql =  "SELECT * FROM `opportunity`";
        $result = mysqli_query($con, $sql);

        if(!$result)
          {
              die("eRROOR");
            }

        if( mysqli_num_rows($result) >= 0){
              while($rows=mysqli_fetch_assoc($result)){
  ?>
  <div class="col" style="padding:40px;">
    <div class="card h-100" >
      <?php
                                                  ob_start();
                                                  echo $rows['id'];
                                                  $id = ob_get_clean();
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
      <div class="card-footer">
        <a href="Delete.php?id=<?php echo $id?>" class="dlt-btn ml-2" style="color: #0d6efd; float:right;">
          <i class="fa fa-trash"></i></a>
        <a type="button" class="edit-btn" href="Edit.php?id=<?php echo $id?>" style="float: right; color: #0d6efd; border:0; background-color: white">
          <i class="fa fa-edit"></i></a>
      </div>
    </div>
  </div>


<?php
          }// for while loop close
        }// for if check num row close
      // for if  check submit butten close
?>
</div>

<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@ Form ------------------------------------------------------------->
<hr class="mt-3 mb-5 spacecenter" style="border-top: 1px solid ">
  <form id="Add" action="Add.php" method="post" style="">
    <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationDefault01">opportunity Title</label>
          <input type="text" class="form-control" name="title" id="validationDefault01" placeholder="opportunity" >
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefault03">City</label>
          <input type="text" class="form-control" name="location" id="validationDefault03" placeholder="City" >
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationDefault01">Application link</label>
          <input type="text" class="form-control" name="link" id="validationDefault01" placeholder="link" >
        </div>
        <div class="col-md-4 mb-3">
          <label for="date" class="">Date</label><br>
              <input type="date" class="form-control" name="date" id="validationDefault01" placeholder="date">
          </div>
    </div>
    <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="date" class="">Time from</label><br>
                      <div class="" id="">
                          <input type="time" class="form-control" name="time_from" id="validationDefault01" placeholder="time_to">
                      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="date" class="">Time to</label><br>
      <input type="time" class="form-control" name="time_to" id="validationDefault01" placeholder="time_from">
</div>
    </div>
    <div class="form-row">
      <div class="col-md-8 mb-3">
        <label for="exampleFormControlTextarea1">Add description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="2"></textarea>
      </div>
    </div>
    <div class="form-group">
          <div class="form-group center mt-5 mb-0" style="display: flex;  padding-bottom:3em;">
                  <button type="submit" name="submit" style="margin-right:5px;" class="btn btn-primary">Submit</button>
                  <button type="reset" action="#navbar" class="btn btn-secondary">Reset</button>
          </div>
      </div>

  </form>


</body>
