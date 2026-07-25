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
                            <h1>Job oriented placement training</h1>
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
                                        <img src="images/trendingCourse7.jpg" />
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="courseDetailsContent">
                                        <h3 class="courseTitle">Job oriented placement training</h3>
                                        <span class="courseAuthor">by Ananth</span>
                                        <p class="courseIntro">We undertake Classroom Training, Corporate Training and Video Based Training on latest Technologies on latest versions. We make sure that all our sessions are very much interactive and well structured.</p>
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
                                <p>Our Trainings are focused on perfect improvement of technical skills for Freshers and working professional. Our Training classes are sure to help the trainee with COMPLETE PRACTICAL TRAINING and Realtime methodologies.</p>
                                
                                <h2>What will you learn</h2>
                                <ul>
                                    <li>Beginner & Advanced level Classes.</li>
                                    <li>Hands-On Learning in Placement.</li>
                                    <li>Best Practice for interview Preparation Techniques in Placement.</li>
                                    <li>Lifetime Access for Student’s Portal, Study Materials, Videos & Top MNC Interview Question.</li>
                                    
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
