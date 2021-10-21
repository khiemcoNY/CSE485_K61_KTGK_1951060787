<?php
if(isset($_POST['btnsua'])){
   
    include('connect.php');
    $id=$_POST['id'];
    $firstname=$_POST['ten'];
    $lastname=$_POST['hodem'];
    $dateofbirth=$_POST['ngaysinh'];
    $gender=$_POST['gioitinh'];
    $mobile=$_POST['sdt'];
    $email=$_POST['email'];
    $height=$_POST['chieucao'];
    $weight=$_POST['cannang'];
    $blood_type=$_POST['nhommau'];
    $created_on=$_POST['ngaylapso'];
    $modified_on=$_POST['ngaycapnhat'];

    $sql = "UPDATE PATIENT SET firstname='$firstname',lastname='$lastname',dateofbirth='$dateofbirth',gender='$gender',mobile='$mobile',email='$email',height='$height',weight='$weight',blood_type='$blood_type',created_on='$created_on',modified_on='$modified_on' WHERE patientid='$id'";
   
    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
      } else {
          header("Location:error.php");
      }
      
      mysqli_close($conn);
}