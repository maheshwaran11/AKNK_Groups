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
                            <h1>Java application development with SQL server</h1>
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
                                        <img src="images/trendingCourse1.jpg" />
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="courseDetailsContent">
                                        <h3 class="courseTitle">Java application development with SQL server</h3>
                                        <span class="courseAuthor">by Ananth</span>
                                        <p class="courseIntro">AKNK Groups provides the Best Java Training through Online Platform with your flexible hours and provide 100% Job Assistance till you get placed in a company.</p>
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
                                <p>Gain a competitive advantage by learning and getting certified as a Java Developer with Oracle. Learn how to build highly functional, reliable, portable, and secure applications with training created by Oracle's Java experts, who are at the forefront of high-tech solutions in the world of Java. With this training, you can stay ahead of the curve with the latest updates and iterations, and boost your confidence in your own expertise.</p>
                                <!--<p>Popular for its versatility and ability to create a wide variety of applications, learning Java opens up your possibilities when coding. With it, you’ll be able to develop large systems, software, and mobile applications — and even create mobile apps for Android. Learn important Java coding fundamentals and practice your new skills with real-world projects.</p>-->
                                <h2>What will you learn</h2>
                                <ul>
                                    <li>JavaServer pages (JSP) and servlets </li>
                                    <li>Web frameworks (e.g., Struts and Spring)</li>
                                    <li>Service-oriented architecture/web services (SOAP/REST)</li>
                                    <li>Object-oriented programming (OOP) concepts and patterns</li>
                                    <li>Java keywords: static, final, volatile, synchronized, transient, this super, etc.</li>
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
