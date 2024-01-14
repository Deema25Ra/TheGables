<?php

  
 $connection=mysqli_connect("localhost","root","root","Renting");
 
                     $error= mysqli_connect_error();
                     
                     if ($error != null){
            echo "<p>Could not connect to the database.</p>";
        }
        
        
            
 
$seekerID=$_POST['SId'];

if( isset($_POST['CId']) ) {
    $category=$_POST['CId'];
    }
    
     
   $sql3="select *, p.id as property_id from Property p join PropertyCategory c on p.property_category_id=c.id where p.id not in (select property_id from RentalApplication where home_seeker_id=$seekerID) and c.id=$category";
    
   $result3= mysqli_query($connection, $sql3);
   
   $output=array();

   if(($result3!=null)){
       
   while($value1= mysqli_fetch_assoc($result3)){

       
            $output[]=$value1;
   }
   echo json_encode($output);
                  
   }
   
   
          