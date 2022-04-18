<?php
session_start();
if(!isset($_SESSION['email'])){
     header('Location:index.php?error=Please Sign in!');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>OFG</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">


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
            margin-top: 3px;
            margin-bottom:3px;
            margin-right: 15px;
            border: 1px solid #3498db;

            font-family: sans-serif;
            font-size: 16px;
            cursor: pointer;
            transition: 0.8s;
            color:#3498db;
        }
          .btn:hover{
            color: #fff;
             background-color: #3498db;

        }

        .btn11 {
            text-decoration: none;
            background: none;
            border-radius: 30px;
            margin-top: 15px;
            margin-right: 200px;
            border: 1px solid red;
            padding:10px 20px;
            font-family: sans-serif;
            font-size: 20px;
            cursor: pointer;
            transition: 0.8s;
            color:red;
        }
          .btn11:hover{
            color: #fff;
             background-color: red;

        }
        .movie-img
        {
          height: 350px;
          box-shadow: -4px 4px 5px 0 ;
        }
        .searchh{
            border: none;
            height: 100%;
            width:100%;
            padding: 0px 5px;
            border-radius: 50px;
            font-size: 18px;
            font-family: "Nunito";
            color: #424242;
            font-weight: 500;

        }
        .searchh:focus{
            outline: none;
            border: blue;
           transition: 0.8s;

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
      <a class="navbar-brand" href="#">OFG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">


          <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item">
            <a href="signout.php"  class="nav-link active" name="button"
            style="color:white; position:absolute; top:10px; right:7px;"
            onMouseOver="this.style.color='red'" onMouseOut="this.style.color='white'" >LOGOUT</a>
            <form action="recommand.php" method="post" style="margin-left:300px;">
              <a class="nav-link active" aria-current="page"  style="color:white;text-align:center; display: inline" href="recommand.php" ><button type="submit" value="Riyadh" name="mview" class="btn" >Riyadh</button></a>
              <a class="nav-link active" aria-current="page"  style="color:white;text-align:center; display: inline" href="recommand.php" ><button type="submit" value="Jeddah" name="mview" class="btn" >Jeddah</button></a>
              <a class="nav-link active" aria-current="page"  style="color:white;text-align:center; display: inline" href="recommand.php" ><button type="submit" value="Makkah" name="mview" class="btn" >Makkah</button></a>
              <a class="nav-link active" aria-current="page"  style="color:white;text-align:center; display: inline" href="recommand.php" ><button type="submit" value="Madinah" name="mview" class="btn" >Madinah</button></a>
              <a class="nav-link active" aria-current="page"  style="color:white;text-align:center; display: inline" href="recommand.php" ><button type="submit" value="Dammam" name="mview" class="btn" >Dammam</button></a>
              <a class="nav-link active" aria-current="page"  style="color:white;text-align:center; display: inline" href="recommand.php" ><button type="submit" value="Abha" name="mview" class="btn" >Abha</button></a>
              <a class="nav-link active" aria-current="page"  style="color:white;text-align:center; display: inline" href="recommand.php" ><button type="submit" value="Taif" name="mview" class="btn" >Taif</button></a>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


<?php
//session_start();
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPWD","");
define("DBNAME","OFG");
    $view="";

$name="";
$desc="";
$city="";
$specialty="";

   $id="";



 //  if(empty($_GET[""]) ){
   // header('Location:Homepage?error=Please fill the Required Parameters!');
//} //else{
    // $view= $_GET["mview"];

        $con = mysqli_connect(DBHOST,DBUSER,DBPWD,"OFG");
        //if ($con->connect_error) {
     //die("Connection failed: " . $conn->connect_error);
//}

?>
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
                                                      echo $rows['title'];
                                                      $title = ob_get_clean();
          ?>
            <div class="card-body">
            <h2 class="card-title" style="text-align: center;"><?php echo $rows['title'];?></h5>
            <h4 class="card-title">City: <?php echo $rows['location'];?></h6>
            <h4 class="card-title">Date: <?php echo $rows['date'];?></h6>
            <h4 class="card-title">Time: <?php echo $rows['time_from'];?> - <?php echo $rows['time_to'];?></h6>
            <a href="<?php echo $rows['link'];?>">apply here</a>
            <hr>
            <p class="card-text"><?php echo $rows['description'];?></p>
          </div>
          <div class="card-footer">
            <a type="button" class="add-btn" href="reminder.php?title=<?php echo $title?>" style="float: right; color: #0d6efd; border:0; background-color: #000000008">
              <i class="fa fa-plus"> add to calendar</i>
            </a>
          </div>
        </div>
      </div>

    <?php
              }// for while loop close
            }// for if check num row close
          // for if  check submit butten close
    ?>
    </div>


</body>
</html>
