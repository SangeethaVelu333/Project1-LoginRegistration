<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/register.css">

  </head>
  <body>
     <div class="d-flex justify-content-center align-items-center vh-100">
    
    <form class="shadow w-450 p-3" action="" method="post">
      <h4 class="display-4  fs-1">Welcome , SignUp</h4>
      
      <input type="hidden" id="action" value="register">
      <div class="mb-3">
        <label class="form-label">FullName</label>
        <input type="text" 
               placeholder="Enter your FullName"
               class="form-control"
               id="name"
               value="" 
               
               >
      </div>
      <div class="mb-3">
        <label class="form-label">UserName</label>
        <input type="text"
               placeholder="Enter your UserName" 
               class="form-control"
               id="username"
               value="" 
             
               >
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" 
               placeholder="Enter your Password" 
               id="password"
               value="" 
               class="form-control"
              >
      </div>
      <br>
      <button type="button" class="btn btn-primary" onclick="submitData();">Register</button>
    
   <br>
    <br>
    <h6>Existing User?</h6>
    <a href="login.php">Go To Login</a>
    <?php require 'script.php'; ?>
    </form>
  </div>
  </body>
</html>