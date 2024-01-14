<?php

$connection =mysqli_connect("localhost","root","root","renting");
                     $error= mysqli_connect_error();
                     
                     if ($error != null){
            echo "<p>Could not connect to the database.</p>";
        }
        
$imageId = $_POST['id'];
$propertyId = $_POST['porperty_id'];


$query = "DELETE FROM PropertyImage WHERE id = $imageId";
$result= mysqli_query($connection, $query);

if($result){
  header('Location: Edit_property.php?id='.$propertyId);
  }
  else{
      echo 'Error deleting: ' . mysqli_error($connection);
  }
mysqli_close($connection);
?>