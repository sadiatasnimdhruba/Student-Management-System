<?php
session_start();

$url="http://localhost/crud/";

if(!isset($_SESSION['login']))
{
 header("Location: http://localhost/crud/login&registration/login.php");
  die();
}
$conn=mysqli_connect('localhost','root','dhruba0004','blog');
if($conn)
{
  $sql="SELECT * fROM students";
  $result=mysqli_query($conn,$sql);

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
    <title>Hello, world!</title>

        <style>
      

.form-control
{
 background-color: #d6dcff;
     border: 1.5px solid #09427c;


  }
  hr
  {
    color: #0d0f1a;
    padding: 1.2px;
  }

  label{
      background-color: #d5faff;
    color: #080858;
    border-radius: 5px;
    font-weight: bold;
    padding: 5px;
    margin: 10px 0;
}
h2
{
      font-weight: bold;
    color: #06075e;
}
.link
{
  margin:0 10px;
}

    </style>
  </head>
  <body style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(2 67 147));">
    <br><br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-info mb-2" href="index.php">Student list</a><br><br><br><br><br>
          <img src="<?php echo $url; ?>images/insert.jpg" style="float: left; width:280px;height:300px">
        </div>
        <div class="col-md-9">
             <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-warning">
            <strong>Failed!</strong> Something wrong.
          </div>
        <?php }?>
          <h2><i class="fa fa-user fa-2x"></i> Add new Student</h2>
          <hr>
          <form action="store.php" method="POST" enctype="multipart/form-data">
             <div class="form-group">
              <label>ID :</label>
              <input required type="number" class="form-control" name="id" placeholder="Student id">
            </div><br>
            <div class="form-group">
              <label>Name :</label>
              <input required type="text" class="form-control" name="name" placeholder="Student name">
            </div><br>
            <div class="form-group">
              <label>Father's Name :</label>
              <input required type="text" class="form-control" name="fathername" placeholder="Father's name">
            </div><br>
            <div class="form-group">
              <label>Mother's Name :</label>
              <input required type="text" class="form-control" name="mothername" placeholder="Mother's name">
            </div><br>
            <div class="form-group">
              <label>Address :</label>
              <input required type="text" class="form-control" name="address" placeholder="Address">
            </div><br>
                   <div class="form-group">
              <label>Date of birth :</label>
              <input required type="text" class="form-control" name="date of birth" placeholder="dd-mm-yyyy">
            </div><br>
                    <div class="form-group">
              <label>Department :</label>
              <input required type="text" class="form-control" name="department" placeholder="Department">
            </div><br>
            <div class="form-group">
              <label>Year :</label>
              <input required type="text" class="form-control" name="year" placeholder="Year">
            </div><br>
                    <div class="form-group">
              <label>Phone number :</label>
              <input required type="text" class="form-control" name="phone number" placeholder="Phone number">
            </div><br>
            <div class="form-group">
              <label>Email address :</label>
              <input required type="text" class="form-control" name="email" placeholder="Email Address">
            </div><br>
             <div class="form-group">
              <label>Image :</label>
              <input required type="file" class="form-control" name="image">
            </div><br>
          
             <br>
           <button type="submit" class="btn btn-primary">Submit</button><br><br><br>
        
          </form>
        
       
        </div>
      </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
<?php unset($_SESSION['error']); ?>