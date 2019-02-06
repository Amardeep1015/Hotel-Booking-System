<?php
session_start();
if(isset($_GET['id']))
{
    $did=$_GET['id'];
    $h=@mysql_connect("localhost","root","");
    mysql_select_db("hotel");
    $res=mysql_query("select * from description where d_id='$did'");
    $r=  mysql_fetch_array($res);
    $res=mysql_query("select* from delhi_all where d_id=$did");
    $q=  mysql_fetch_array($res);
    mysql_close($h);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <title>Book Your Hotel</title>
    </head>
    <body>
       <!-- Header 3-->
        <?php include 'includes/header3.php'; ?>
        <!-- Header 3 close-->
        <div class="container" style="background-color: whitesmoke">
            <div ><br>
            <?php echo "<img src='$q[d_image]' height='400' width='800'/><br><br>"; ?>
            </div>
                <div class="thumbnail" style="width: 800px;">
                <h2>Amenities</h2>
                <label id="am"><?php echo $r['a1'] ?></label>
                <label style="padding-left: 300px;"><?php echo $r['a2'] ?></label><br>
                <label id="am"><?php echo $r['a3'] ?></label>
                <label style="padding-left: 260px;"><?php echo $r['a4'] ?></label><br>
                <label id="am"><?php echo $r['a5'] ?></label>
                <label style="padding-left: 205px;"><?php echo $r['a6'] ?></label>
                <br><br>
                <h2>Hotel Rules</h2>
                <label><i class="fas fa-circle"><?php echo $r['h1'] ?></i></label><br>
                <label><i class="fas fa-circle"><?php echo $r['h2'] ?></i></label><br>
                <label><i class="fas fa-circle"><?php echo $r['h3'] ?></i></label>
                </div><br><br>
        </div>
       <!-- Footer -->
       <?php include 'includes/footer.php'; ?>
    </body>
</html>


