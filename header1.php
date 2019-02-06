<div class="col-sm-12" style="background-color: white;">
            <a href="index.php"><img src="images/logo.png" style="padding-top: 10px; padding-left: 10px;" alt="logo"/></a>
            <font color="#DC7633" style="padding-left: 50px;">India's Largest Hotel Booking Company</font>
            <font style="padding-left: 180px;">
            <font style="color: black;">Welcome <?php if(isset($_SESSION["uname"])) 
                {
                    echo $_SESSION["uname"];
                }
                else {
                    echo "Guest";
                      }
                    ?></font>
            </font>
            <font><a href="signup.php" style="padding-left: 300px; text-decoration: none;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></font>
            <font><?php if(isset($_SESSION["uname"]))
             {
               echo '<a href="logout.php">Logout</a>';
             }
             else {
               echo '<a href="login.php">Login</a>';  
               }
            ?></font>
            <font><a href="#" style="padding-left: 10px;"><span class="glyphicon glyphicon-question-sign">Help</span></a></font>
            <font><a href="" style="padding-left: 10px; text-decoration: none;"><image src="images/clock.png"/> +91 9564552813</a></font>
</div><br><br><br>

