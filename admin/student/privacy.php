<?php
session_start();
$url="http://localhost/crud/";
if(!isset($_SESSION['login']))
{
 header("Location: http://localhost/crud/login&registration/login.php");
  die();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">


    <title>Hello, world!</title>

  </head>
  <body style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(2 67 147));">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #00245a!important">
      <div class="container">
        <div class="col-lg-4">
          <img class="navbar-brand" src="<?php echo $url;?>images/ums.png" width="80" height="50">
    <img class="navbar-brand" src="<?php echo $url;?>images/UE Logo-01_1.png" width="80" height="80">
    <br>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
    <div class="collapse navbar-collapse col-lg-8" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php"><i class="fa fa-user"></i> Student</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../teacher/teacher.php"> Teacher</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../course/course.php"><i class="fa fa-book-open"></i> Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><i class="fa fa-university"></i> Semester</a>
        </li> 

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo $url;?>login&registration/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
            <li><a class="dropdown-item" href="privacy.php"><i class="fa fa-lock"></i> Privacy & Security</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>

    </div>
</div>
</nav>
</hr>
    <br><br><br><br><br><br>

     <div class="container">
      <div class="row">
        <div class="col-md-4"><br><br>
         <img src="<?php echo $url;?>images/security.png" style="float: left; width:300px;height:300px">

          
        </div>
        <div class="col-md-8  privacy">
      
      <h2 class="p-3">Privacy & Security</h2>
      <hr/>
      <p>It is possible to see the login credentials of admin from here. So this page is highl confidential. If any admin forgets his/her password, they will be able to manage the password from here. So, this page is not sharable with anyone else rather than admin.</p><br><br>
          <div class="form-group" style="padding-left:50px;">
              <label>Email address :</label>admin@gmail.com
              
            </div>
             <div class="form-group" style="padding-left:50px;">
              <label>Password :</label>sms123
              
            </div>
     </div>
   </div>
 </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>