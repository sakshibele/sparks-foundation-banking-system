
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transfer money</title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            h1{
                text-align: center;
                text-decoration: underline;
                color: black;
            }
            .div{
  background-image: url(bg2.webp);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
height: 100vh;
}
.btn{
    color: #fff;
    background-color: #1fb3a4;
    border-color: #1faea0;
}
a {
    color: #3dccbf;
    text-decoration: underline;
}
a:hover {
    color: #3dccbf;
}
        </style>
</head>
<body>
<div class="div">
<?php
include 'navbar.php';
include 'db.php'; 
?>
<h1>Transfer Money</h1>
<div class="table-responsive">
<table class="table table-striped table-condensed table-dark table-bordered">
  <thead>
    <tr>
      <th class="text-center" scope="col">User ID</th>
      <th class="text-center" scope="col">Name</th>
      <th class="text-center" scope="col">Email</th>
      <th class="text-center" scope="col">Balance</th>
      <th class="text-center" scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $selectquery = "select * from user ";
    $query= mysqli_query($con, $selectquery);
    $row_n= mysqli_num_rows($query);
    while ($res = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td class="text-center"><?php echo $res['id']; ?></td>
        <td class="text-center"><?php echo $res['name']; ?></td>
        <td class="text-center"><?php echo $res['email']; ?></td>
        <td class="text-center"><?php echo $res['balance']; ?></td>
        <td class="text-center"><a href="selectuser.php?id= <?php echo $res['id'] ;?>"><button type="button" class="btn">Transact</button></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
</div>
</body>
</html>