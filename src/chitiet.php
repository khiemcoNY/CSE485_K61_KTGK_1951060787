<?php 
include('connect.php');
$id=$_GET['id'];

$sql = "SELECT * FROM PATIENT WHERE patientid='$id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "id" . $row["patientid"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    header("Location:error.php");
  }
  
  mysqli_close($conn);
?>