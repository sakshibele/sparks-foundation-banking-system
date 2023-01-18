<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Managment system</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="styleindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="div">
  <?php
  include 'navbar.php';
  ?>
  <br>
  <br>
  <div class="home">
    <center>
  <img src="sparkslogo.png"  alt="" class="img">
  </center>
  <h1>Welcome To Sparks Foundation Bank</h1>
  <h3>We are here to keep your money safe!</h3>
  <div class="buttons">
  <a href="createuser.php"><button type="button"  class="buttonindex">Create User</button></a>
  <a href="transfermoney.php"><button type="button" class="buttonindex" id="midbutton">Transfer Money</button></a>
  <a href="transactionhistory.php"><button type="button" class="buttonindex">Transaction History</button></a>
  </div>
  <div class="about"><a href="https://www.linkedin.com/in/sakshi-bele-23483420a/"><button type="button" class="buttonindex">About Us</button></a>
</div>
  </div>
  </div>
</body>
</html>