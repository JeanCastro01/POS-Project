<?php
//------------------------------------------------ Starting Session --------------------------------------------------------------------->
session_start();
include 'connection.php';
// -----------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------ Query to SQL -------------------------------------------------------------------------> 
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$username= $_POST['username'];
$role= $_POST['role'];
$password= $_POST['password'];
$Staff_ID = $_POST['Staff_ID'];
 
$sql="UPDATE Staff SET fname='$fname', lname = '$lname', username = '$username' , role = '$role', password = '$password'
WHERE Staff_ID='$Staff_ID'";

// -----------------------------------------------------------------------------------------------------------------------------------

if ($conn->query($sql) === TRUE) { 
    //echo $oldAdmin;
    //echo "Error: " . $sql . "<br>" . $conn->error;
    //echo "Error: " . $sql . "<br>" . $conn;
    header('Location: ../src/staff.php?message=Staff ' . $_POST['Staff_ID'] . '  Successufully Updated!');
    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}

$conn->close();
?>