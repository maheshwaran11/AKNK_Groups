<?php error_reporting(0); ?>
<?php
    include_once('db.php');
    
    header('Content-type: application/json');
    // echo json_decode('test');
  
    $name = $_POST['data']['name'];
    $email = $_POST['data']['email'];
    $mobile = $_POST['data']['mobile'];
    $service = $_POST['data']['service'];
    $message = $_POST['data']['message'];
    
    
    
//    $name = $_PO
    
    
    $to = 'maheshwaran11@gmail.com';
    $subject = 'Email from AKNK Enquiry';
    $from = $email;

    $headers .= "Reply-To: The Sender <support@Aknkgroups.com>\r\n"; 
    $headers .= "Reply-To: AKNK Enquiry <support@Aknkgroups.com>\r\n"; 
    $headers .= "Return-Path: AKNK Enquiry <sender@sender.com>\r\n"; 
    $headers .= "From: support@Aknkgroups.com" ."\r\n" .
    $headers .= "Organization: AKNK Groups\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
    
    
    
    // Compose a simple HTML email message
    $message = '<div style="width: 400px; background: #f2f2f2; border: 1px solid #ccc; font-family: arial;">
                    <div style="text-align: center;">
                        <img src="\&quot;https://tnsltu.in/stage2/images/Logo1.jpg\&quot;" width="100px"/>
                    </div>
                    <div style="padding: 15px;">
                        <h2>Enquiry from AKNK Group</h2>
                        <p><strong>Name:</strong> '.$name.'</p>
                        <p><strong>Email:</strong> '.$email.'</p>
                        <p><strong>Phone:</strong> '.$mobile.'</p>
                        <p><strong>Service:</strong> '.$service.'</p>
                        <p><strong>Message:</strong> '.$message.'</p>
                    </div>
                </div>';

    // Sending email
    if(mail($to, $subject, $message, $headers)){
        $json = array("status" => 1, "info" => 'Mail sent successfully');
    } else{
        $json = array("status" => 0, "info" => 'Unable to sent email, try again');
    }
    
            
    echo json_encode($json);

    @mysqli_close($conn);
?>