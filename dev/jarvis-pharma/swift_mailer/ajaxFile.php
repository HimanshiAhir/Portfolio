<?php
//Include database configuration file
include('config.php');

if(isset($_POST["country_id"])){
    //Get all state data
	$country_id= $_POST['country_id'];
    $result = mysql_query("SELECT * FROM states WHERE country_id = '$country_id' 
    ORDER BY state_name ASC");
                  
    $count = mysql_num_rows($result);

    
    //Display states list
    if($count > 0){
        echo '<option value="">Select state</option>';
        while($row = mysql_fetch_array($result)){
		$state_id=$row['state_id'];
		$state_name=$row['state_name'];
        echo "<option value='$state_id'>$state_name</option>";
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

if(isset($_POST["state_id"])){
	$state_id= $_POST['state_id'];
    //Get all city data
    $result = mysql_query("SELECT * FROM cities WHERE state_id = '$state_id' 
    ORDER BY city_name ASC");
                  
    $count = mysql_num_rows($result);

    
    //Display cities list
    if($count > 0){
        echo '<option value="">Select city</option>';
        while($row = mysql_fetch_array($result)){
		$city_id=$row['city_id'];
		$city_name=$row['city_name']; 
        echo "<option value='$city_id'>$city_name</option>";
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>