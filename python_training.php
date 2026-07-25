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
                            <h1>Python and DJango development</h1>
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
                                        <img src="images/trendingCourse2.jpg" />
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="courseDetailsContent">
                                        <h3 class="courseTitle">Python and DJango development</h3>
                                        <span class="courseAuthor">by Ananth</span>
                                        <p class="courseIntro">Learn Python Programming Language from Beginner to Advanced level exclusively designed with practical, real-time Scenarios for meeting the purpose of the Industry Demands. Best Course Content with hands-on Python Course for Assured Placements.</p>
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
                                <p>Python is considered as one of the most loved programming languages by developers and data scientists. The best thing is that It is recommendable for both freshers and experienced professionals Its broad range of libraries, several frameworks, numerous modules and file extensions makes it one of the popular languages. Hence by choosing Python as a career, one would be taking the wisest decision in their life as it offers the lucrative career in current scenario.</p>
                                
                                <h2>What will you learn</h2>
                                <ul>
                                    <li>Integers and Floating-Point Numbers in Python.</li>
                                    <li>Operators in Python</li>
                                    <li>Membership Operator in Python</li>
                                    <li>Enumerate() Function in Python</li>
                                    <li>Counter() Function in Python</li>
                                    <li>List Comprehension in Python</li>
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
