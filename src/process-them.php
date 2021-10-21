<?php
if(isset($_POST['btnthem'])){
   
    include('connect.php');
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

    $sql = "INSERT INTO PATIENT(firstname,lastname,dateofbirth,gender,mobile,email,height,weight,blood_type,created_on,modified_on)
    VALUES('$firstname','$lastname','$dateofbirth','$gender','$mobile','$email','$height','$weight','$blood_type','$created_on','$modified_on');";
    
    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
    } else {
        header("Location:error.php");
    }
    

    mysqli_close($conn);
 }
?>