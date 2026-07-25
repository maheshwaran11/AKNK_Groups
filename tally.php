<html>
    <head>
        <?php 
            $pageTitle = "Courses";
            include './includes.php';
        ?>
    </head>
    <body>
      
        
        <?php include './header.php'; ?>
        
        <section id="pageHeader1" class="mb-0">
            <div class="container-fluid">
                <div class="container">
                    <div class="row rowMobileColumn">
                        <div class="col">
                            <h1>Tally 9 & Accounts softwares</h1>
                            <!--<h2>Lorem Ipsum is simply dummy text of the printing</h2>-->
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        
        
        <section id="courseDetails">
            <div class="container-fluid">
                <div class="container">
                    
                    <div class="row courseDetails">
                        <div class="col col-8">
                            <div class="row courseDetailsSection">
                                <div class="col-4">
                                    <div class="courseDetailsImage">
                                        <img src="images/trendingCourse6.jpg" />
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="courseDetailsContent">
                                        <h3 class="courseTitle">Tally 9 & Accounts softwares</h3>
                                        <span class="courseAuthor">by Ananth</span>
                                        <p class="courseIntro">AKNK provides the best-in-class training of the Tally software and its application under the mentorship of Real-time professionals with certification.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-4">
                            <div class="coursestarted">
                                <p class="startDate">May 01, 2023</p>
                                <p class="trainingMode">Online</p>
                                <button class="btn btn-primary bookAppointment">Enroll Now</button>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row align-start">
                        <div class="col-8">
                            <div class="aboutCourse">
                                <h2>About this course</h2>
                                <p>We provides the best-in-class training of the Tally software and its application under the mentorship of Real-time professionals with certification.</p>
                                
                                <h2>What will you learn</h2>
                                <ul>
                                    <li>Simple accounting management</li>
                                    <li>One stop solution for compliance</li>
                                    <li>Support for banking transactions</li>
                                    <li>Faster access to business report</li>
                                    <li>Flexible inventory management</li>
                                    <li>Easy application management</li>
                                </ul>
                                
                                <h2>Instructors</h2>
                                <span>Ananth</span>
                                
                            </div>
                        </div>
                        
                         <?php 
                        include 'course_sidebar.php'
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>
        
        
        

        
        
        
        
               
        <?php include './footer.php'; ?>

    </body>
</html>
