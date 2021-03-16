<?php

session_start();
$url="http://localhost/crud/";
if(!isset($_SESSION['login']))
{
 header("Location: http://localhost/crud/login&registration/login.php");
  die();
}
else
{
 $conn=mysqli_connect('localhost','root','dhruba0004','blog');
 $count_students=mysqli_query($conn,"SELECT * from students");
 $total_students=mysqli_num_rows($count_students);

  $count_users=mysqli_query($conn,"SELECT * from users");
 $total_users=mysqli_num_rows($count_users);

 $count_cse=mysqli_query($conn,"SELECT * from students where Department='CSE'");
 $total_cse=mysqli_num_rows($count_cse);
  $count_eee=mysqli_query($conn,"SELECT * from students where Department='EEE'");
 $total_eee=mysqli_num_rows($count_eee);
  $count_cee=mysqli_query($conn,"SELECT * from students where Department='CEE'");
 $total_cee=mysqli_num_rows($count_cee);
  $count_mce=mysqli_query($conn,"SELECT * from students where Department='MCE'");
 $total_mce=mysqli_num_rows($count_mce);
  $count_btm=mysqli_query($conn,"SELECT * from students where Department='BTM'");
 $total_btm=mysqli_num_rows($count_btm);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link href="css/font-awesome.min.css" rel="stylesheet">

    <title>Hello, world!</title>
        <style>
      .navbar-dark .navbar-nav .nav-link {
    color: #fff;
    font-size: larger;
    padding:10px;

}
.panel-heading
{
  border-top-left-radius: 13px;
  border-top-right-radius: 13px;
  color:#fff;
  background-image: linear-gradient(rgb(50 9 199 / 44%), rgb(0 7 16));
}
.panel-footer
{
   border:2px solid #0d6efd;
   border-bottom-left-radius: 13px;
   border-bottom-right-radius: 13px;
}
h4
{
    box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 30%);
    border-radius: 5px;
}
</style>
  </head>
  <body>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #00245a!important">
      <div class="container">
        <div class="col-lg-7">
    <img class="navbar-brand" src="<?php echo $url;?>images/UE Logo-01_1.png" width="80" height="80">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
    <div class="collapse navbar-collapse col-lg-5" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo $url; ?>admin/student/index.php">Student</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../teacher/teacher.php">Teacher</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../course/course.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Semester</a>
        </li> 

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>

    </div>
</div>
</nav>
</hr>
<br><br><br><br><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
</div>
<div class="col-sm-9">
  <div class="content">
    <h1 class="text-warning"><i class="fa fa-dashboard"></i> Dashboard <small>Statistics overview</small></h1><br><br>
      
    <h4 class=" bg-light p-3"><i class="fa fa-dashboard"></i> Dashboard</h4>
    <br><br>

  <div class="row">
    <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2">
          <div class="row">
            <div class="col-xs-3"><i class="fa fa-graduation-cap fa-5x"></i>
              <p class="pull-right" style="font-size: 45px"><?php echo $total_students; ?></p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All students</div>
            </div>
          </div>
        </div>
        <a href="<?php echo $url; ?>admin/student/index.php">
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">View All students</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>
        </div>
      </a>
      </div>
    </div>

        <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2 bg-primary">
          <div class="row">
            <div class="col-xs-3"><i class="fa fa-users fa-5x"></i>
              <p class="pull-right" style="font-size: 45px"><?php echo $total_users; ?></p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All Users</div>
            </div>
          </div>
        </div>
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">View All users</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>
        </div>
      </div>
    </div>

        <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2 bg-primary">
          <div class="row">
            <div class="col-xs-3"><i class="fa fa-users fa-5x"></i>
              <p class="pull-right" style="font-size: 45px">10</p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All students</div>
            </div>
          </div>
        </div>
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">All students</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>
        </div>
      </div>
    </div><br>
  </div>
  <hr/>
</div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Student", { role: "style" } ],
        ["CSE", <?php echo $total_cse;?>, "blue"],
        ["EEE", <?php echo $total_eee;?>, "yellow"],
        ["MCE", <?php echo $total_mce;?>, "red"],
        ["CEE", <?php echo $total_cee;?>, "green"],
        ["BTM", <?php echo $total_btm;?>, "purple"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total student of each department",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div class="container mb-5" id="columnchart_values" style="width: 900px; height: 300px;"><br><br><br></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>