<?php
//------------------------------------------------ Starting Session --------------------------------------------------------------------->
session_start();
include 'connection.php';
// -----------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------ Query to SQL -------------------------------------------------------------------------> 

$description= $_POST['description'];
$image= $_POST['image'];
$name= $_POST['name'];
$brand= $_POST['brand'];
$type= $_POST['type'];
$colour= $_POST['colour'];
$size= $_POST['size'];
$quantity= $_POST['quantity'];
$price= $_POST['price'];
$id= $_POST['Item_ID'];


$sql="UPDATE Items SET description='$description', image='$image', name = '$name', brand = '$brand' , type='$type', colour = '$colour', size = '$size' , quantity = '$quantity', price = '$price'
 WHERE Item_ID='$id'";

// -----------------------------------------------------------------------------------------------------------------------------------

if ($conn->query($sql) === TRUE) { 
    
   header('Location: ../src/products.php?message=Product ' . $_POST['name'] . '  Successufully Updated!');
    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}

$conn->close();
?>