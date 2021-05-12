<?php
//------------------------------------------------ Starting Session --------------------------------------------------------------------->
session_start();
include 'connection.php';
// -----------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------ Query to SQL -------------------------------------------------------------------------> 
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$userName= $_POST['username'];
$role= $_POST['role'];
$password= $_POST['password'];
$oldAdmin = $_POST['test'];
 
$sql="UPDATE Staff SET fname='$fname', lname = '$lname', username = '$userName' , role = '$role', password = '$password'
WHERE username='$oldAdmin'";

// -----------------------------------------------------------------------------------------------------------------------------------

if ($conn->query($sql) === TRUE) { 
    //echo $oldAdmin;
    //echo "Error: " . $sql . "<br>" . $conn->error;
    //echo "Error: " . $sql . "<br>" . $conn;
    header('Location: .././public/admin/listAdmin.php?message=Staff ' . $_POST['username'] . '  Successufully Updated!');
    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}

$conn->close();
?>