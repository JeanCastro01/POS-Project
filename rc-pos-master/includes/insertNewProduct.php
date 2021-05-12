<!------------------------------------------------ Starting Session --------------------------------------------------------------------->
<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

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


$sql = "INSERT INTO Items (description, image, name, brand, type, colour,size, quantity, price)
VALUES ( '$description', '$image', '$name', '$brand' , '$type','$colour', '$size', '$quantity', '$price')";


if ($conn->query($sql) === TRUE) {
   
    header('Location: ../src/products.php?message=New Product ' . $_POST['name'] . ' Successufully Created!');
} else {

echo "<script type='text/javascript'>alert('username is already being used. Please choose something else!')</script>";
}
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Closing Session----------------------------------------------------------------------->
$conn->close();
?>