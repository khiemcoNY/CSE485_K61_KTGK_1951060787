<?php
if (isset($_GET['id'])) {
    include('connect.php');
    $id=$_GET['id'];
    $sql = "DELETE FROM PATIENT WHERE patientid='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
    } else {
        header("Location:error.php");
    }
   


    mysqli_close($conn);
}
?>