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

    <html lang="en">
  <head>
    <meta charset="utf-8">

    <title>OFG</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Favicons -->

<meta name="theme-color" content="#7952b3">


    <style>
        body{

            background: linear-gradient(-45deg, #2196F3 50%, #EEEEEE 50%);
    background-repeat: repeat;

  /* Center and scale the image nicely */

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

         .btn {
            text-decoration: none;
            background: none;
            border-radius: 30px;
            margin-top: 15px;
            margin-right: 15px;
            border: 1px solid #3498db;
            padding:10px 20px;
            font-family: sans-serif;
            font-size: 20px;
            cursor: pointer;
            transition: 0.8s;
            color:#3498db;
        }
          .btn:hover{
            color: #fff;
             background-color: #3498db;

        }
        .movie-img
        {
          height: 350px;
          box-shadow: -4px 4px 5px 0 ;
        }
        .div1{
            width:400px;
            height:200px;
            border-radius: 50%;
            position: relative;
            top: 10%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
         .abohmeed{
            background-color: #FFF;
    border-radius: 25px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    padding: 40px;
    z-index: 0;
        }



    </style>


    <!-- Custom styles for this template -->
    <link href="bootstrap/css/homepage.css" rel="stylesheet">
      <link href="bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>
  <body style="padding:0px;">

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid" >
      <a class="navbar-brand" href="homepage.php">OFG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">


          <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item">
            <a href="signout.php"  class="nav-link active" name="button"
            style="color:white; position:absolute; top:10px; right:7px;"
            onMouseOver="this.style.color='red'" onMouseOut="this.style.color='white'" >LOGOUT</a>

          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


<?php
$title = $_GET['title'];
    $sql =  "SELECT * FROM `opportunity` WHERE `title` = '$title';";

      $result = mysqli_query($con, $sql);
       if(!$result)
          {
            die("eRROOR");
          }

            $rows=mysqli_fetch_assoc($result);
?>

<?php
include_once 'DB-CONFG.php';

$postData = '';
if(!empty($_SESSION['postData'])){
    $postData = $_SESSION['postData'];
    unset($_SESSION['postData']);
}

$status = $statusMsg = '';
if(!empty($_SESSION['status_response'])){
    $status_response = $_SESSION['status_response'];
    $status = $status_response['status'];
    $statusMsg = $status_response['status_msg'];
}
?>

<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>

<div class="col-md-12">
    <form method="post" action="reminderHandler.php" class="form">
        <div class="form-group">
            <label>Opportunity Title</label>
            <input type="text" class="form-control" name="title" value="<?php echo $rows['title'];?>" required="">
        </div>
        <div class="form-group">
            <label>opportunity Description</label>
            <textarea name="description" class="form-control"><?php echo $rows['description'];?></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control" value="<?php echo $rows['location'];?>">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" value="<?php echo $rows['date'];?>" required="">
        </div>
        <div class="form-group time">
            <label>Time</label>
            <input type="time" name="time_from" class="form-control" value="<?php echo $rows['time_from'];?>">
            <span>TO</span>
            <input type="time" name="time_to" class="form-control" value="<?php echo $rows['time_to'];?>">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-primary" name="submit" value="Set reminder" />
        </div>
    </form>
</div>
