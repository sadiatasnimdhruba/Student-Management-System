<?php
session_start();

if(!isset($_SESSION['login']))
{
 header("Location: login.php");
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

    <title>Hello, world!</title>
  </head>
  <body>
    <br><br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-info mb-2" href="index.php">Student list</a>
        </div>
        <div class="col-md-9">
             <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-warning">
            <strong>Failed!</strong> Added successfully.
          </div>
        <?php }?>
          <h2>Add new Student</h2>
          <hr>
          <form action="store.php" method="POST">
            <div class="form-group">
              <label>Name :</label>
              <input required type="text" class="form-control" name="name" placeholder="Studnet name">
            </div><br>
                    <div class="form-group">
              <label>Department :</label>
              <input required type="text" class="form-control" name="department" placeholder="Department">
            </div><br>
                    <div class="form-group">
              <label>Phone number :</label>
              <input required type="text" class="form-control" name="phone number" placeholder="Phone number">
            </div><br>
                    <div class="form-group">
              <label>Date of birth :</label>
              <input required type="text" class="form-control" name="date of birth" placeholder="dd-mm-yyyy">
            </div><br><br>
           <button type="submit" class="btn btn-primary">Submit</button>
          </form>
       
        </div>
      </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
<?php unset($_SESSION['error']); ?>