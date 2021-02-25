<?php
session_start();
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

             <?php if(isset($_SESSION['error_msg'])) { ?>
          <div class="alert alert-warning">
            <strong>Warning!</strong> <?php echo $_SESSION['error_msg']; ?> 
          </div>
          <?php } ?>

  
          <h2>Create an account</h2>
          <hr>
          <form action="confirmregi.php" method="POST">
             <div class="form-group">
              <label for="Name">Name :</label>
              <input required type="name" class="form-control" name="name" placeholder="Write your name">
            </div><br>
            <div class="form-group">
              <label>Email :</label>
              <input required type="email" class="form-control" name="email" placeholder="Email address">
            </div><br>
                    <div class="form-group">
              <label>Password :</label>
              <input required type="password" class="form-control" name="password" placeholder="Set a password">
            </div><br>
             <div class="form-group">
              <label>Confirm Password :</label>
              <input required type="password" class="form-control" name="confirm_password" placeholder="Confirm password">
            </div><br><br>
           <button type="submit" class="btn btn-primary">Submit</button><br>Already have an account?
           <a class="btn btn-link" href="login.php">Login</a>
          </form>
       
        </div>
      </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>

<?php unset($_SESSION['error_msg']); ?>
<?php unset($_SESSION['error']); ?>
