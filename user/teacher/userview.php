<?php
session_start();
$url="http://localhost/crud/";

if(!isset($_SESSION['login']))
{
 header("Location: login.php");
  die();
}else
{
$id= $_GET['id'];
$conn=mysqli_connect('localhost','root','dhruba0004','blog');
if($conn)
{
  $sql="SELECT * FROM teachers where id=$id";
  $result=mysqli_query($conn,$sql);

  $std=mysqli_fetch_assoc($result);

}
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
  <body style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(2 67 147));">
    <br><br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-info mb-2" href="userteacher.php">Teachers list</a>
            <br><br><br><br><br>
          <img src="<?php echo $url; ?>images/teacher.png" style="float: left; width:280px;height:300px">
        </div>
        <div class="col-md-9">
           <?php if(isset($_SESSION['success'])){?>
          <div class="alert alert-success">
            <strong>Success!</strong> Edited successfully.
          </div>
        <?php }?>
          <h2>Teacher's individual information</h2>
          <hr>
          <table class ="table">
            <tr>
              <th>Image :</th>
              <td><img src="<?php echo $url; ?>admin/<?php echo $std['image'] ;?>" width="300"></td>
          </tr>
               <tr>
            <th class="text-right" width="150">ID :</th>
            <td><?php echo $std['id'] ;?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Name :</th>
            <td><?php echo $std['name'];?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Post :</th>
            <td><?php echo $std["post"];?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Date of birth :</th>
            <td><?php echo $std["birthdate"];?></td>
          </tr>
           <tr>
            <th class="text-right" width="150">Address :</th>
            <td><?php echo $std["address"];?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Department :</th>
            <td><?php echo $std["department"];?></td>
          </tr>
    
                 <tr>
            <th class="text-right" width="150">Skills :</th>
            <td><?php echo $std['skills'];?></td>
          </tr>

          <tr>
            <th class="text-right" width="150">Phone number :</th>
            <td><?php echo $std['phone'];?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Email address :</th>
            <td><?php echo $std["email"];?></td>
          </tr>


          </table>
  
        </div>
      </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
<?php unset($_SESSION['success']); ?>