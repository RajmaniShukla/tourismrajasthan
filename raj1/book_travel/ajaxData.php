<html>
    <head>
        <?php
require('dbconfig.php');
session_start();
?>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
</head>
        <?php
include 'dbConfig.php';
if(!empty($_POST["district_id"])){
    $s=$_POST['district_id'];
    $query = $db->query("SELECT * FROM Book_travel WHERE district_id = ".$s." AND status = 1");
    $rowCount = $query->num_rows;
    if($rowCount > 0){
        echo '<div value="">    </div>';
        while($row = $query->fetch_assoc()){ 
            echo '<form action="bookingform.php"><div class="col-md-3"><div  style="border:1px solid #ccc; paddind:20px; margin-bottom:20px;" value="'.$row['book_co_id'].'"><b>'.$row['book_co_name'].'</b><br><div class="more">'.$row['book_desc'].'</div><br>'.$row['book_cost'].'<br><input type="submit" name="n1" value="submit"></div></div></form>';
        }    
    }
    else   {
        echo '<div value="">hotel not available</div>';
    }
    }
    
?>
 
    
    <script>
      
$(document).ready(function() {
	var showChar = 200;
	var ellipsestext = "";
	var moretext = "more";
	var lesstext = "less";
	$('.more').each(function() {
		var content = $(this).html();
		if(content.length > showChar) {
			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);
			var html = c + '<span class="moreelipses">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';
			$(this).html(html);
		}

	});
	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});      
</script>
</html>