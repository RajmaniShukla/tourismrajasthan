<html>
    <?php
    //load_data_select.php
    
    $connect = mysqli_connect("localhost", "root", "root", "rajasthanhotels");

    function fill_district($connect)
    {
        $output = '';
        $sql = "SELECT * from district";
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_array($result))
        {
            $output .= '<option value="'.$row["d_id"].'">'.$row["d_name"].'</option>';
        }
        return $output;
    }
    function fill_hotels($connect)
    {
        $output = '';
        $sql = "SELECT * from hotels";
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_array($result))
        {
            $output .= '<div class="col-md-3">';
            $output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["h_name"].'';
            $output .= '</div>';
            $output .= '</div>';
        } 
        return $output;
    }
    ?>
<head>
    <script type="text/javascript" src="jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquey/2.2.0/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#district').change(function(){
        var d_id = $(this).val(); 
        $.ajax({
            method:"POST",
            url:"load_data.php",
            data:{d_id:d_id},
            success:function(data){
                $('#show_hotels').html(data);
            }
        });
    });
    </script>
   </head>
<body>
<h1 align="center">Hotels</h1>
    <br>
    <div class="container">
    <h3>
        <select name="district" id="district">
        <option value="">Show All Districts</option>
            <?php echo fill_district($connect); ?>
        </select>
        <br/><br/>
        <div class="row" id="show_hotels">
        <?php echo fill_hotels($connect) ?>
        </div>
        </h3>
    </div>   
</body>
</html>