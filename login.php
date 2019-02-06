<?php
session_start();
$msg="";
  if(isset($_POST['btn_login']))
  {
      $email=$_POST['email'];
      $pwd=$_POST['pass'];
      $h=@mysql_connect("localhost","root","");
      mysql_select_db("hotel");
      $res=mysql_query("select* from users where u_email='$email' and u_password='$pwd'");
      //$r=mysql_fetch_array($res);
      if(mysql_affected_rows()>0)
      {
          if(isset($_POST['ckb']))
          {
              setcookie("username",$email,time()+60);
              setcookie("password",$pwd,time()+60);
          }
          $r=mysql_fetch_array($res);
          $_SESSION['uname']=$r[0];
          $msg="<font color='green'> Welcome !!!!</font>";
      }
      else {
         $msg="Invalid..";
      }
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
       <div id="banner-image"><br><br>         
        <div class="container">
        <div class="row row-style">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Login</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning">Enter Your Login Details.</p>
                        <form method="post">
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="pass" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" placeholder="Password" required>
                            </div>
                            <button type="submit" name="btn_login" class="btn btn-primary">Login</button><input type="checkbox" name="ckb" style="margin-left: 35px;"> Remember me<br><br>
                            <p class="text-warning">Forgot<a href="#" style="text-decoration: none;"> Password ?</a></p>
                            
                        </form>
                        <?php echo $msg; ?>
                    </div>
                    <div class="panel-footer"><p>Don't have an account?<a href="signup.php" style="text-decoration: none;">Register</a></p></div>
                </div>
            </div>
        </div>
        </div>
       </div>
       <!-- Footer -->
       <?php include 'includes/footer.php'; ?>
    </body>
</html>


