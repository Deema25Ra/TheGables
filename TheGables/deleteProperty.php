<?php
if($_SERVER['REQUEST_METHOD']!="POST")die;
if(!isset($_POST['id']))die;

$connection =mysqli_connect("localhost","root","root","Renting");
                     $error= mysqli_connect_error();
                     
                     if ($error != null){
            echo "<p>Could not connect to the database.</p>";
        }
        
        $propertyId = $_POST['id'];
        


$query = "DELETE FROM RentalApplication WHERE property_id = $propertyId";
$result= mysqli_query($connection, $query);

$query = "DELETE FROM PropertyImage WHERE property_id = $propertyId";
$result= mysqli_query($connection, $query);

$query = "DELETE FROM Property WHERE id = $propertyId";
$result= mysqli_query($connection, $query);



  print_r(json_encode($propertyId));
 header('Content-Type: text/plain');
mysqli_close($connection);

?>