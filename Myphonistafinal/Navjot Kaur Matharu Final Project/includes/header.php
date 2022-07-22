<?php
        include 'includes/modal.php';
        include 'includes/common.php';
        ?>
   <div class="navbar navbar-default navbar-fixed-top" style="color:#ffffff; background-color:#000000">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span style="color:#fff" class="glyphicon glyphicon-phone">Phonista</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar" style="color:#ffffff">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                     
                    <li><a style="color:#ffffff" href = "cart.php"><span style="color:#fff" class = "glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a style="color:#ffffff" href = "settings.php"><span style="color:#fff" class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li style="color:#ffffff"><a style="color:#ffffff" href = "logout_script.php"><span style="color:#ffffff" class = "glyphicon glyphicon-log-in"></span> Logout</a></li>

                    <?php
                } else {
                    ?>
                    <li><a style="color:#ffffff" href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a style="color:#ffffff" href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
                    <li><a style="color:#ffffff" href="about_us.php"><span class="glyphicon glyphicon-th-list"></span> About Us</a></li>
                    <li><a style="color:#ffffff" href="contact_us.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>


