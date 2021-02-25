<?php
session_start();
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
        <div class="col-md-6">

             <?php if(isset($_SESSION['error'])) { ?>
          <div class="alert alert-warning">
            <strong>Warning!</strong> Wrong email address and password.
          </div>
        <?php } ?>

             <?php if(isset($_SESSION['regi_msg'])) { ?>
          <div class="alert alert-success">
            <strong>Registration successfully! </strong><?php echo $_SESSION['regi_msg']; ?>
          </div>
        <?php } ?>


          <h2>Login</h2>
          <hr>
          <form action="confirmlogin.php" method="POST">
            <div class="form-group">
              <label>Email :</label>
              <input required type="email" class="form-control" name="email" placeholder="Email address">
            </div><br>
                    <div class="form-group">
              <label>Password :</label>
              <input required type="password" class="form-control" name="password" placeholder="Type a password">
            </div><br><br>
           <button type="submit" class="btn btn-primary">Submit</button>
           <a class="btn btn-primary" href="registration.php">Create new account</a>
          </form>
       
        </div>
      </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
<?php unset($_SESSION['error']); ?>
<?php unset($_SESSION['regi_msg']); ?>
<?php unset($_SESSION['error_msg']); ?>