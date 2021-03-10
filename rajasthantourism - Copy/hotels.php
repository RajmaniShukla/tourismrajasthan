<html>
    <?php
    $link=mysqli_connect("localhost","root","root");
    mysqli_select_db($link,"rajasthanhotels");
    ?>
<head>
</head>
<body>
<h1 align="center">Hotels</h1>
<form name="form1" action="" method="post">
    <table>
        
        <tr>
            <td>Select State</td>
            <td><select id="statedd" onchange="change_state">
            <option>Select</option>
                <?php 
                $res=mysqli_query($link,"select * from state");
                while($row=mysqli_fetch_array($res))
                {
                ?>
                <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                <?php
                }
                ?>
                </select></td>
        </tr>
        <tr>
            <td>Select District</td>
            <td>
            <div id="district"></div>
                <select>
                <option>Select</option>
                </select>
            </td>
        </tr>
    </table>
    </form>
    <script type="text/javascript">
    function change_state()
        {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","ajax.php?state="+document.getElementById("statedd").value,false);
            xmlhttp.sened(null);
            document.getElementById("district").innerHTML=xmlhttp.responseText;
            
        }
    </script>
</body>
</html>