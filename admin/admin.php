<?php
session_start();
if(!$_SESSION)
{
 echo '<script type="text/javascript">alert("You  are not logged IN");
 window.location.href = "../index.php";
</script>';
}
include('../connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aditya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.btn{
    width:35rem;
    height:10rem;
    font-size:2rem;
    padding:4rem;
}
.col-md-6{
  padding:5rem;
}
body{
  background-color:#e6ffff;
}
@media only screen and (max-width: 600px) {
.col-md-6 a{
   width:20rem;
   height:7rem;
   font-size:2rem;
   padding:2rem;
 }
}
</style>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../index.php"><span class="glyphicon glyphicon-home"></span> Start</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../about-us.html"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <hgroup>
    <h1 class="site-title" style="text-align: center; color: Red;">Admin Page</h1>
  </hgroup>
<hr>
<main class="main-content container-fluid">
 <div class="row ">
     <div class="col-md-6 ">
          <center>
          <a href="users-list.php"class="btn btn-danger"  role="button">User's List</a>
          </center>
     </div>
     <div class="col-md-6">
        <center>
        <a href="donor-list.php" class="btn btn-danger" role="button">Donor's List</a>
        </center>
     </div>
     <br>
 </div> 
 <div class="row">
     <div class="col-md-6 ">
         <center>
           <div class="tabs">
           <a href="request-list.php" class="btn btn-danger" role="button">Request List</a>
          </div>
          </center>
     </div>
     <div class="col-md-6">
           <center>
           <a href="#" class="btn btn-danger" role="button">Link Button</a>
          </center>
     </div>
     <br>
 </div>
  <br>

<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>

</main>
<br>

</body>
</html>