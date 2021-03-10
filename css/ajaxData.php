<?php
include 'dbConfig.php';

if(!empty($_POST["district_id"])){
    $query = $db->query("SELECT * FROM hotels WHERE district_id = ".$_POST['district_id']." AND status = 1 ORDER BY hotel_name ASC");
    
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<div value="">Select hotel</div>';
        while($row = $query->fetch_assoc()){ 
            echo '<div value="'.$row['hotel_id'].'">'.$row['hotel_name'].'</div>';
            echo '<div class="col-md-3"><div  style="border:1px solid #ccc; paddind:20px; margin-bottom:20px;" value="'.$row['hotel_id'].'">'.$row['hotel_name'].'</div></div>';
        }
    }
    else
    {
        echo '<div value="">hotel not available</div>';
    }
    }
    elseif(!empty($_POST["hotel_id"])){
    $query = $db->query("SELECT * FROM cities WHERE hotel_id = ".$_POST['hotel_id']." AND status = 1 ORDER BY city_name ASC");
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<div value="">Select city</div>';
        while($row = $query->fetch_assoc()){ 
            echo '<div value="'.$row['city_id'].'">'.$row['city_name'].'</div>';
        }
    }else{
        echo '<div value="">City not available</div>';
    }
}
?>