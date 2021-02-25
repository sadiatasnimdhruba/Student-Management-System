<?php

session_start();

if(!isset($_SESSION['login']))
{
 header("Location: login.php");
  die();
}
else
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
          <a class="btn btn-info mb-2" href="insert.php">New student</a><br>
          
        </div>
        <div class="col-md-9">
          <?php if(isset($_SESSION['success'])){?>
          <div class="alert alert-success">
            <strong>Success!</strong> Added successfully.
          </div>
        <?php }?>
          <a class="btn btn-danger pull-right" style="float:right;" href="logout.php">Logout</a><br>
          <h2>Student list</h2>
          <hr>
          <table class="table">
            <thead>
              <th>Id</th>
              <th>Name</th>
              <th>Department</th>
              <th>Phone number</th>
              <th>Date of birth</th>
              <th class="text-center">Actions</th>
            </thead>
            <tbody>
              <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
              <tr>
                <td><?php echo $row['ID']?></td>
                <td><?php echo $row['Name']?></td>
                <td class="text-center"><?php echo $row['Department']?></td>
                <td><?php echo $row['Phone number']?></td>
                <td><?php echo $row['Date of birth']?></td>
                <td>
                  <a class="btn btn-info mb-2" href="view.php?id=<?php echo $row['ID'];?>">View  </a>
                  <a class="btn btn-warning mb-2" href="edit.php?id=<?php echo $row['ID'];?>">Edit</a>
                  <a class="btn btn-danger mb-2" onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $row['ID'];?>">Delete</a>
                </td>

              </tr>

                <?php  }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>

<?php unset($_SESSION['success']); ?>