<div class="overlayContainer" id="bookFormPopup">
    <div class="overlayWrapper">
        <div class="overlayContent">
            <div class="bookAppointmentForm" id="bookingFormModal">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enquire Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="material-icons">close</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="bookFormWrapper" id="bookingFormModal">
                        <div class="errorMsg"></div>
                        <form class="bookingForm" id="bookingForm1">
                            <div class="wrapper">
                                <label>Your Name: </label>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="wrapper">
                                <label>Mobile: </label>
                                <input type="number" name="mobile" id="mobile">
                            </div>
                            <div class="wrapper">
                                <label>Email: </label>
                                <input type="email" name="email" id="email">

                            </div>
                            <div class="wrapper">                    
                                 <label>Service you needed </label>
                                <select name="service" id="service">
                                    <option value=""></option>
                                    <option value="Java Training">Java Training</option>
                                    <option value="Python Training">Python Training</option>
                                    <option value="PHP Development">PHP Development</option>
                                    <option value="Front End Technologies">Front End Technologies</option>
                                    <option value="Bank Coaching">Bank Coaching</option>
                                    <option value="Tally">Tally</option>
                                    <option value="Placement Training">Placement Training</option>
                                </select>

                            </div>
                            <div class="wrapper  col-12">
                                <label>Message: </label>
                                <textarea name="message" id="message"></textarea>

                            </div>
                        </form>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="sendBtn">Send  <i class="fa fa-arrow-right">    </i></button>
                </div>
                
                <div class="loader d-none">
                    <div>
                        <img src="images/loading.gif">
                        <p>Loading...</p>
                    </div>   
                </div>

                <div class="respMsg d-none">
                    <div>
                        <i class="material-icons"></i>
                        <p>Success</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container-fluid">
        <div class="container">
            <div class="row align-left rowMobileColumn">
                <div class="col col-3">
                    <div class="footerDiv">
                        <div class="footerLogoWrapper">
                            <h4><span>AKNK</span> Groups</h4>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <div>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col col-3">
                    <div class="footerDiv">
                    <h4>Located In</h4>
                    <p class="mb-4"><i class="material-icons">room</i>AKNK Groups,<br> 27/4 scheme road corner, Senthoor complex, Nagal nagar, <br> Dindigul - 624003</p>
                    <p><i class="material-icons">room</i>AKNK Groups,<br> MGR Nagar, Thiruthangal<br> Sivakasi - 626130</p>
                    
                </div>
                </div>
                <div class="col col-3">
                    <div class="footerDiv">
                    <h4>Quick Links</h4>
                    <div>
                        <a href="./index.php" title=""><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a href="./about.php" title=""><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a href="./courses.php" title=""><i class="fa fa-angle-right mr-2"></i>Courses</a>
                        <a href="./contact.php" title=""><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                    </div>
                </div>
                <div class="col col-3">
                    <div class="footerDiv">
                    <h4>For Queries</h4>
                    <p><i class="material-icons">phone</i><a href="tel:+8428493897"> +91 8428493897</a></p>
                    <p><i class="material-icons">email</i><a href="mailto:support@aknkgroups.com"> support@aknkgroups.com</a></p>
                    <p><i class="material-icons">email</i><a href="mailto:aknkgroups@gmail.com"> aknkgroups@gmail.com</a></p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid copyright">
        <div class="container">
            <p>&COPY; 2026, AKNK Groups, All Rights Reserved.</p>
        </div>
    </div>





    <script src="./js/jquery.js"></script>
    <script src="./js/main.js"></script>
    
</footer>