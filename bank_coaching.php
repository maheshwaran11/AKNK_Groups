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
                            <h1>Bank exam coaching</h1>
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
                                        <img src="images/trendingCourse5.jpg" />
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="courseDetailsContent">
                                        <h3 class="courseTitle">Best for your banking exam preparation</h3>
                                        <span class="courseAuthor">by Ananth</span>
                                        <p class="courseIntro">Tricky and shortcut methods to solve Reasoning, Maths and English Language.</p>
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
                                <p>This Coaching Program is updated according to the latest pattern introduced by the board. The candidates will be trained using previous years bank exam papers and revised pattern.</p>
                                
                                <h2>What will you learn</h2>
                                <ul>
                                    <li>Latest and updated quality study materials.</li>
                                    <li>Online and offline regular test series.</li>
                                    <li>Online test portal to evaluate yourself.</li>
                                    <li>Individual attention to every student.</li>
                                    <li>Short-cuts and tricks to help students.</li>
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
