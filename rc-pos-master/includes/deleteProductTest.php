<!------------------------------------------------ Starting Session --------------------------------------------------------------------->
<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Query to SQL -------------------------------------------------------------------------> 
$sql= "DELETE FROM Items
      WHERE  Item_ID = '$_GET[Item_ID]'";


if ($conn->query($sql) === TRUE) {
    header('Location: ../src/products.php?message=Shoes ' . $_GET['Item_ID'] . ' Successufully Deleted!');
    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}
// -------------------------------------------------------------------------------------------------------------------------------------->

$conn->close();
?>