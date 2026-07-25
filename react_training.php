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
                            <h1>Front end technologies - React & Vue JS</h1>
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
                                        <img src="images/trendingCourse4.jpg" />
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="courseDetailsContent">
                                        <h3 class="courseTitle">Front end technologies - React & Vue JS</h3>
                                        <span class="courseAuthor">by Mahesh</span>
                                        <p class="courseIntro">React is a declarative, efficient, and flexible JavaScript library for building Web Applications. It follows component-based approach.</p>
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
                                <p>Easy to create smaller components and build large-scale applications. The main goal is to build large-scale high-performance applications with smaller and reusable stateful components. We provide ReactJS Training by Real-Time Experts with Real-Time Scenarios and always support.</p>
                                
                                <h2>What will you learn</h2>
                                <ul>
                                    <li>Original DOM vs Virtual DOM</li>
                                    <li>React Components</li>
                                    <li>React Components with JSX</li>
                                    <li>React Components with ES6</li>
                                    <li>Props and state</li>
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
