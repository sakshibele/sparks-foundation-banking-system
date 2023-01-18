<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="create.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="div">
  <?php
  include 'navbar.php';
  ?>
  <div class="box">
        <h2>Create User</h2>
        <form action="userinfo.php" method="get" class="form">
          <!-- <p>Username</p> -->
          <input type="text" name="user_name" placeholder="Enter Username">
          <input type="text" name="user_email" placeholder="Enter Email">
          <input type="text" name="user_balance" placeholder="Enter Balance">
          <!-- <div class="row g-3 align-items-center">
            <div class="col-auto">
              <input type="password" id="inputPassword6" placeholder="Enter Password" class="form-control"
                aria-describedby="passwordHelpInline">
            </div>
          </div> -->
          <input type="submit" value="Create">
        </form>
      </div>
  
  </div>

</body>
</html>