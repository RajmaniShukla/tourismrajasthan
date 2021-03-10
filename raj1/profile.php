<?php
    include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title> DashBoard | user profile </title>
    </head>
    <body>
        <b>WELCOME : <i><?php echo $login_session ; ?></i></b>
        <b> <a href="logout.php"> LOG OUT</a></b>
    </body>
</html>