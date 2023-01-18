<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    
    <link rel="stylesheet" href="style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
             h1{
                text-align: center;
                text-decoration: underline;
            }
            h3{
                
color: black;
font: bold;
            }
            .form-control {
    display: block;
    margin-left: 5px;
    width: 98%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
        </style>
</head>
<body>
<div class="div">
<?php
include 'navbar.php';
include 'db.php'; 
?>
<h1>Transaction Details</h1>
<?php
include 'db.php';
$sid=$_GET['id'];
$selectquery = "select * from user where id=$sid";
$query= mysqli_query($con, $selectquery);
if(!$query){
 echo "Error>>".$selectquery."<br>".mysqli_error($con);
}
$res=mysqli_fetch_assoc($query);
?>

<form  method="post" class="form" >
<table class="table table-striped table-condensed table-dark table-bordered">
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Balance</th>
    </tr>
    <tr>
        <td><?php echo $res['id']; ?></td>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['email']; ?></td>
        <td><?php echo $res['balance']; ?></td>
    </tr>
</table>
<br><br>
<div class="selectuser">
<label style="color : #212529;"><b>Transfer To:</b></label>

<!-- <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select> -->


<select class="form-control"  name="to" required>
<option value="" disabled selected>Choose</option>
  <?php
 include 'dp.php';
 $sid=$_GET['id'];
 $selectquery = "select * from user where id!=$sid";
 $query= mysqli_query($con, $selectquery); 
 if(!$query){
    echo "Error>>".$selectquery."<br>".mysqli_error($con);
   }
   while($res=mysqli_fetch_assoc($query)){
    ?>
<option class="table" value="<?php echo $res['id'];?>">
<?php echo $res['name']; ?> (balance:
<?php echo $res['balance']; ?>)
</option>

<?php
   }

  ?>
</select>

<br>

            <label style="color : #212529;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required> 
        </div>
        
              
            <br><br>
                <div class="text-center" >
            <button class="btn btn-dark" name="submit" type="submit" id="myBtn" >Transfer Amount</button>
            </div>        
</form>

</div>
</body>
</html>
<?php
include 'db.php'; 
if(isset($_POST['submit']))
{
   $from = $_GET['id'];
   $to=$_POST['to'];
   $amount=$_POST['amount'];

   $selectquery = "select * from user where id=$from";
   $query= mysqli_query($con, $selectquery);
   $res1=mysqli_fetch_array($query);

   $selectquery = "select * from user where id=$to";
   $query= mysqli_query($con, $selectquery);
   $res2=mysqli_fetch_array($query);


   //constraints for value of amount
   if(($amount)<0 || $amount==0)
   {
    echo "<script> alert('Transaction failed! Enter valid amount');
                     </script>";
   }
   elseif ($amount> $res1['balance'] ) {
    echo "<script> alert('Transaction failed! Insufficient Balance');
                     </script>";
   }
    else{

        //to deduct amount from sender's account
        $updatedbalance= $res1['balance']-$amount;
        $selectquery = "UPDATE user set balance=$updatedbalance where id=$from";
        mysqli_query($con,$selectquery);

        //to add amount in reciever's account
        $updatedbalance=$res2['balance']+$amount;
        $selectquery = "UPDATE user set balance=$updatedbalance where id=$to";
        mysqli_query($con,$selectquery);

        $sender = $res1['name'];
        $receiver= $res2['name'];
        $selectquery= "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query= mysqli_query($con, $selectquery);
        if ($query) {
            echo "<script> alert('Transaction Completed');
            window.location='transactionhistory.php';
  </script>";
        }

        $updatedbalance=0;
        $amount =0;
    }

}
?>