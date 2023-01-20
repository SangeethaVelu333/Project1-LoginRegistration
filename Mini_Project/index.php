<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  </head>


  <body>
     <div class="d-flex justify-content-center align-items-center vh-100">
      <div class="shadow w-450 p-3 text-center">
            <h3 class="display-4 ">Welcome Guvi Geek!!!</h3>
            <h5>FullName</h5>
            <h6>  <?php echo $user["name"]; ?></h6>
            <br>
             <h5>UserName</h5>
             <h6>  <?php echo $user["username"]; ?></h6>
             <br>
               <h5>Password</h5>
               <h6><?php echo $user["password"]; ?></h6>
            <br>
            <a href="logout.php" class = "btn btn-warning">Logout</a>
            
    </div>
   </div>
    
  </body>
</html>