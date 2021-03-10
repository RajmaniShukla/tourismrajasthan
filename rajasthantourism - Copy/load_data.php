<?php 
//load_data.php
$connect = mysqli_connect("localhost", "root", "root", "rajasthanhotels");
$output = '';
if(isset($_POST["d_id"]))
{
    if($_POST["d_id"] != '')
    {
        $sql = "SELECT * from hotels WHERE dh_id ='".$_POST["d_id"]."'";
    }
    else
    {
        $sql = "SELECT * FROM hotels";
    }
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result))
    { 
        $output .= '<div class="col-md-3"><div style="border:1px solid #ccc; paddind:20px; margin-bottom:20px;">'.$row["desc"].'</div></div>';
    }
    echo $output;
}

?>