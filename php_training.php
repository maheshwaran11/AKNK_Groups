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
                            <h1>PHP Web development - dashboards</h1>
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
                                        <img src="images/trendingCourse3.jpg" />
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="courseDetailsContent">
                                        <h3 class="courseTitle">PHP Web development - dashboards</h3>
                                        <span class="courseAuthor">by Mahesh</span>
                                        <p class="courseIntro">PHP- Hypertext Preprocessor is the server-side scripting language. It is one of the fundamental web technologies, with a majority of websites using this language.</p>
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
                                <p>The usage statistics displayed on the various leading websites portray that a large number of PHP developers prefer Laravel among other PHP frameworks. Many businesses appreciate its simple and secure authentication mechanism, robust features, elegant syntax pattern and affordable price.</p>
                                
                                <h2>What will you learn</h2>
                                <ul>
                                    <li>Object Oriented Programming</li>
                                    <li>APIs</li>
                                    <li>Dependency Injection</li>
                                    <li>Working with Databases</li>
                                </ul>
                                
                                <h2>Instructors</h2>
                                <span>Mahesh</span>
                                
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
