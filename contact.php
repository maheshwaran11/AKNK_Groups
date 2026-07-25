<html>
    <head>
        <?php 
            $pageTitle = "Contact";
            include './includes.php';
        ?>
    </head>
    <body>
      
        
        <?php include './header.php'; ?>
        
        <section id="pageHeader" class="contactPage">
            <div class="container-fluid">
                <div class="container">
                    <div class="text-center">
                        <div class="">
                            <h1 title="">Stay In Touch</h1>
                            <h2>Just drop us a line. We will be glad to answer your enquiries.</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <section id="contactWrapper">
            <div class="container-fluid">
                <div class="container">
                    <div class="row rowMobileColumn">
                        <div class="col-6">
                            <div class="contactForm">
                                <div class="contactInfoSection">
                                    <div class="contactImageWrapper">
                                        <img src="./images/contact.png"  alt="" />
                                    </div>
<!--                                    <h3>Contact Information</h3>
                                    <h4>Get In Touch</h4>-->
                                    <p class="mb-4"><i class="material-icons">room</i>AKNK Groups,<br> 27/4 scheme road corner, Senthoor complex, Nagal nagar, <br> Dindigul - 624003</p>
                                    <p><i class="material-icons">room</i>AKNK Groups,<br> MGR Nagar, Thiruthangal<br> Sivakasi - 626130</p>
                    
                                   <p><i class="material-icons">phone</i><a href="tel:+8428493897"> +91 8428493897</a></p>
                    <p><i class="material-icons">email</i><a href="mailto:support@aknkgroups.com"> support@aknkgroups.com</a></p>
                    <p><i class="material-icons">email</i><a href="mailto:aknkgroups@gmail.com"> aknkgroups@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="bookFormWrapper" id="bookFormWrapper">
                                 <h4>Get In Touch</h4>
                                <div class="errorMsg"></div>
                                    <form class="bookingForm" id="bookingForm">
                                            <div class="wrapper">
                                                <label>Your Name: </label>
                                                <input type="text" name="name" id="name">
                                            </div>
                                            <div class="wrapper">
                                                <label>Mobile: </label>
                                                <input type="number" name="mobile" id="mobile">
                                            </div>
                                            <div class="wrapper">
                                                <label>Area: </label>
                                                <input type="text" name="area" id="area">

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
                                            <div class="buttonWrapper">
                                                <button type="button" class="btn btn-primary" id="submit">Submit</button>
                                            </div>
                                        </form>

                                
                                
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
            </div>
        </section>
        
               
        <?php include './footer.php'; ?>

        
        <script>
        $('#submit').on('click', function() {
            $('#bookFormWrapper .errorMsg').html('');
            $mob = $('#bookFormWrapper #mobile').val();
            if($mob === '') {
                $('#bookFormWrapper .errorMsg').html('<span>Enter your mobile number</span>');
            } else {
                $('#bookFormWrapper .errorMsg').html('');
                $('#bookFormWrapper .loader').removeClass('d-none');
                $form = document.getElementById('bookingForm');
                $formData = new FormData($form);
                $form_values = Object.fromEntries($formData);
                console.log($form_values);
                $.ajax({
                    type: "POST",
                    url: "./admin/api/booking_enquiry.php",
                    data: { data: $form_values },
                    dataType: "JSON",
                    success: function (response) {
                        $('#bookFormWrapper .loader').addClass('d-none');
    //                    $('.modal-header').addClass('d-none');
                        $('#bookFormWrapper .modal-footer').addClass('d-none');
                        $('#bookFormWrapper .respMsg').removeClass('d-none');
                        $('#bookFormWrapper #bookingForm').hide();
                        console.log(response);
                        if(response.status == 1) {
                            $('#bookFormWrapper .respMsg i').html('mail');
                            $('#bookFormWrapper .respMsg').addClass('success');
                            $('#bookFormWrapper .respMsg p').html(response.info);
                        } else {
                            $('#bookFormWrapper .respMsg i').html('mail');
                            $('#bookFormWrapper .respMsg').addClass('error');
                            $('#bookFormWrapper .respMsg p').html(response.info);
                        }

                    }
                });
            }
        });
    
        </script>
        
    </body>
</html>
