<!------------------------------------------------ Starting Session --------------------------------------------------------------------->
<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Query to SQL -------------------------------------------------------------------------> 
$sql= "DELETE FROM Staff
      WHERE  username = '$_GET[username]'";


if ($conn->query($sql) === TRUE) {
    header('Location: .././public/admin/deleteAdmin.php?message=Admin ' . $_GET['username'] . ' Successufully Deleted!');
    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}
// -------------------------------------------------------------------------------------------------------------------------------------->

$conn->close();
?>