<!------------------------------------------------ Starting Session --------------------------------------------------------------------->
<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Query to SQL -------------------------------------------------------------------------> 
$sql= "DELETE FROM SalesRequestQueue
      WHERE  reservation_ID = '$_GET[reservation_ID]'";


if ($conn->query($sql) === TRUE) {
    header('Location: .././public/admin/deleteArt.php?message=Art ' . $_GET['reservation_ID'] . ' Successufully Deleted!');
    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}
// -------------------------------------------------------------------------------------------------------------------------------------->

$conn->close();
?>