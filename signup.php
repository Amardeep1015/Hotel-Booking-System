<?php
session_start();
$msg="";
  if(isset($_GET['sinup']))
  {
          $name=$_GET['txt_name'];
          $email=$_GET['txt_email'];
          $pwd=$_GET['txt_password'];
          $contact=$_GET['txt_contact'];
          $city=$_GET['txt_city'];
          $address=$_GET['txt_address'];
          $h=@mysql_connect("localhost","root","");
          mysql_select_db("hotel");
          $qry="insert into users values('$name','$email','$pwd','$contact','$city','$address')";
          mysql_query($qry);
          if(mysql_affected_rows()>0)
          {
              $msg="<font color='green'>Signed Up Sucessfully....</font>";
          }
          else
          {
              $msg="Error";
          }
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
        <!-- Header 1-->
        <?php include 'includes/header1.php'; ?>
        <!-- Header 1 close-->
       <!-- Navbaar --> 
       <?php include 'includes/header2.php'; ?>
       <!-- Navbaar Close-->
       <div id="banner-image">
           <div class="container-fluid">
            <div class="row row-styl">
                <div class="col-sm-3 col-sm-offset-4" style="padding-left: 80px;">
                        <h2><font style="color: whitesmoke;">SIGN UP</font></h2>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="txt_name"  required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="txt_email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="txt_password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="txt_contact" pattern="^\d{10}$" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="txt_city" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="txt_address" required>
                            </div>
                            <button type="submit" name="sinup" class="btn btn-danger">SignUp</button>
                            <h4><font style="color: #030303;">Already have Account ?<a href="login.php" style="text-decoration: none; color:#041EFA;"> Login</a></font></h4>
                        </form>
                        <?php echo $msg; ?>
                    </div>
                </div>
            </div>
       </div>
       <!-- Footer -->
       <?php include 'includes/footer.php'; ?>
    </body>
</html>


