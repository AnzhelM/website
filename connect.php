<?php
echo "<script>alert('submit')</script>";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $phone=$_POST['number'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $message=$_POST['message'];
}
$con= new mysqli("localhost", "root","","webpage");
if($con){
    $sql = "insert into form (name,phone,address,email,message)values('$name','$phone','$address','$email','$message')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Location:contact.php");
    }else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
}
?>
