<?php // include 'bubbles.php'; ?>
<div class="topInfo">
    <p>Get a free demo session - meet our executive <a href="tel:+918428493897">+91 84284 93897</a></p>
</div>  
<header>
      
    <div class="container-fluid topBar">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ul class="topbar-contact d-flex">
                        <li class="d-flex">
                            <i class="material-icons">phone</i>
                            <a href="tel:+918428493897">Call: +91 84284 93897</a>
                        </li>
                        <li class="d-flex">
                            <i class="material-icons">email</i>
                            <a href="mailto:support@aknkgroups.com">support@aknkgroups.com</a>
                        </li>
                    </ul>
                </div>
                
<!--                <div class="col-6">
                    <ul class="topbar-right">
                        <li class="login-register">
                            <i class="fa fa-sign-in"></i>
                            <a href="#">Login</a> / <a href="register.html">Register</a>
                        </li>
                    </ul>
                </div>-->
                
            </div>
        </div>
    </div>
    
    
    <div class="container-fluid" id="fixedHeader">
        <div class="container position-relative">
            <div class="row">
                <div class="col col-4">
                    <a href="index.php" title="">
                        <div class="logo">
                            <img src="images/Logo1.png" alt="" />
                        </div>
                    </a>
                </div>
                <div class="col col-8 position-relative">
                    <div class="menu">
                        <ul>
                            <li class="<?php echo $pageTitle == 'Home' ? 'active' : '' ?>"><a href="index.php" title="">Home</a></li>
                            <li class="<?php echo $pageTitle == 'About' ? 'active' : '' ?>"><a href="about.php" title="About">About</a></li>
                            <li class="<?php echo $pageTitle == 'Courses' ? 'active' : '' ?>">
                                <a href="courses.php" title="">Courses</a>
                                <i class="material-icons">expand_more</i>
                                <ul class="subMenu">
                                    <li><a href="./java_training.php">Java Training </a></li>
                                    <li><a href="./python_training.php">Python Training </a></li>
                                    <li><a href="./php_training.php">PHP Development</a></li>
                                    <li><a href="./react_training.php">Front End Technologies</a></li>
                                    <li><a href="./bank_coaching.php">Bank Coaching</a></li>
                                    <li><a href="./tally.php">Tally</a></li>
                                    <li><a href="./placement_training.php">Placement Training</a></li>
                                    <!--<li><a href="./other_services.php">Other Services</a></li>-->
                                </ul>
                            </li>
                            <li class="<?php echo $pageTitle == 'Contact' ? 'active' : '' ?>"><a href="contact.php" title="We located in">Contact</a></li>
                            <li class="bookLink"><a href="#" title="Stay in touch with us">Enroll Now</a></li>
                        </ul>
<!--                        <div class="searchDiv">
                            <input type="text" name="search" />
                            <button type="submit"><i class="material-icons">search</i></button>                            
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="menuIcon" id="menuIcon">
                <i class="material-icons">menu</i>
            </div>
        </div>
    </div>
</header>