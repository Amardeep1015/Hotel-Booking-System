<?php
session_start();
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
        <!-- Header 1-->
        <?php include 'includes/header1.php'; ?>
        <!-- Header 1 close-->
       <!-- Navbaar --> 
       <?php include 'includes/header2.php'; ?>
       <!-- Navbaar Close-->
       <div id="banner-image"></div>
       <div class="container">
           
           <br><br>
           <h2>Deals For You</h2><br>
           <div class="row text-center">
                
                <?php
                    $h=@mysql_connect("localhost","root","");
                    mysql_select_db("hotel");
                    $res=mysql_query("select * from home");
                    if(mysql_affected_rows()>0)
                    {
                       $x=0;
                       echo "<table width='100%'>";
                       while($r=mysql_fetch_assoc($res))
                       {
                           if($x==0)
                            echo "<tr>";  
                            echo "<td><table>";
                            echo "<tr>";
                            echo "<td colspan='2'><a href='#'><img src='$r[h_image]' style='padding-left: 30px;'/></a></td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td><h4>$r[h_about]</h4></td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "</tr>";
                            echo "</table></td>";
                            if($x==3)
                              {
                                 echo "</tr>";
                                 $x=0;
                              }
                            else
                              {
                                  $x++;
                              }
                           }
                           echo "</table>";
                          }
                        else
                        {
                            echo "No products found......";
                        }
                ?>
               
           </div>
           
       </div><br><br><br><br><br>
       <!-- Footer -->
       <?php include 'includes/footer.php'; ?>
    </body>
</html>
