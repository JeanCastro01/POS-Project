<!------------------------------------------------ Starting Session --------------------------------------------------------------------->
<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Query to SQL ------------------------------------------------------------------------->
$username= $_POST['username'];
$password= $_POST['password'];
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$role= $_POST['role'];



$sql = "INSERT INTO Staff (username, password, fname, lname, role)
VALUES ( '$username', '$password', '$fname', '$lname' , '$role')";


if ($conn->query($sql) === TRUE) {
   
    header('Location: .././public/admin/newAdmin.php?message=New Staff ' . $_POST['username'] . ' Successufully Created!');
} else {
//cho "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('username is already being used. Please choose something else!')</script>";
}
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Closing Session----------------------------------------------------------------------->
$conn->close();
?>