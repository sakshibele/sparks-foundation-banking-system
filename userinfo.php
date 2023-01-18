<?php
$user_name=$_GET['user_name'];
$user_email=$_GET['user_email'];
$user_balance=$_GET['user_balance'];

if($user_name==null || $user_email==null){
    header("Location:createuser.php");
}
elseif($user_name!=null && $user_email!=null){

    include 'db.php';   
     $sql= "INSERT INTO `user` (`name`, `email`, `balance`) VALUES ('$user_name', '$user_email', '$user_balance')";
     $result=mysqli_query($con,$sql);
     if($result){
        echo "<script> alert('User created successfully');
                               window.location='transfermoney.php';
                     </script>";
     }
     else{
        echo "error in inserting".mysqli_error($con);
     }
}
?>