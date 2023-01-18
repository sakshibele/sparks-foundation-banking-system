
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
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
        </style>
</head>
<body>
<div class="div">
<?php
include 'navbar.php';
include 'db.php'; 
?>
<h1>Transaction History</h1>
<br>
<div class="container">
<div class="table-responsive">
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th class="text-center" scope="col">Transaction ID</th>
      <th class="text-center" scope="col">Sender</th>
      <th class="text-center" scope="col">Receiver</th>
      <th class="text-center" scope="col">Amount</th>
      <th class="text-center" scope="col">Date & Time</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $selectquery = "select * from transaction ";
    $query= mysqli_query($con, $selectquery);
    $row_n= mysqli_num_rows($query);
    while ($res = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td class="text-center"><?php echo $res['transaction_ID']; ?></td>
        <td class="text-center"><?php echo $res['sender']; ?></td>
        <td class="text-center"><?php echo $res['receiver']; ?></td>
        <td class="text-center"><?php echo $res['balance']; ?></td>
        <td class="text-center"><?php echo $res['date_time']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
</div>
</div>
</body>
</html>