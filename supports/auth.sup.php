<?php 


    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../vendor/autoload.php';

    
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';


    //Create an instance; passing `true` enables exceptions

    if(!empty($name) && !empty($email) && !empty($phone) && !empty($message)){

        try {
            $mail = new PHPMailer(true);
            //Server settings
            // $mail->SMTPDebug = 4;                                    //Enable verbose debug output
            $mail->isSMTP();    
                                        
            $mail->Host       = 'smtp.gmail.com';                        //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                    //Enable SMTP authentication
            $mail->Username   = '';                 //SMTP username or enter email
            $mail->Password   = '';                      //SMTP password or app password
            $mail->SMTPSecure = 'tls';                                   //Enable implicit TLS encryption
            $mail->Port       = 587;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('tvelappan99@gmail.com', 'velappan');
            $mail->addAddress('r377911@gmail.com');                       //Add a recipient
        

            //Content
            $mail->isHTML(true);                                          //Set email format to HTML
            $mail->Subject = 'Some one is contact you';
            $mail->Body    = '<html><head>
            <style>
                @import url("https://fonts.googleapis.com/css?family=Nunito+Sans:400,700&display=swap");
        
                body{
                    background-color : #F2F4F6;
                }
                
                .d-flex{
                    min-width : 300px;
                    max-width : 540px;
                    width : 100%;
                    margin : 0 auto;
                }
                .message-content{
                    font-family: "Nunito Sans", Helvetica, Arial, sans-serif;
                }
                #messagebody
                {
                    background : white;
                    padding : 30px;
                    line-height:24px;font-size:14px;
                }
                .footer{
                    background-color : rgb(26, 32, 46);
                    padding : 25px 0px;
                    margin-bottom: 20px;
                }
                .footer p{
                    color : #A8AAAF;
                    text-align : center;
                    font-size : 13px;
                    margin : 0px;
                }
                .h-100{
                    display: flex;
                    height: 100%;
                    align-items: center;
                    justify-content: center;
                }
                .about-info{
                    list-style: none;
                }
                .text-dark{
                    color: #000;
                    width: 130px;
                }
                .text-gray{
                    color: #999;
                }
                .display-flex{
                    display: flex;
                }
                .text-center{
                    text-align: center;
                }
                h2{
                    color: #3e64ff;
                }
            </style>
            </head>
            <body>
                <div class="h-100">
                    <div class="d-flex">
                        <div class="message-content">
                            <div class="text-center">
                                <h2>velappan</h2>
                            </div>
                            <div id="messagebody">
                                Hello <br /><br />                
                                <ul class="about-info mt-4 ps-0">
                                    <li class="display-flex">
                                        <span class="text-dark">Name :</span> <span class="text-gray">'.$name.'</span>
                                    </li>
                                    <li class="display-flex">
                                        <span class="text-dark">Phone :</span> <span class="text-gray"><a href="tel:'.$phone.'" class="text-decoration-none mt-3">'.$phone.'</a></span>
                                    </li>
                                    <li class="display-flex">
                                        <span class="text-dark">Email :</span> <span class="text-gray"><a href="mailto: '.$email.'" class="text-decoration-none mt-3">'.$email.'</a></span>
                                    </li>
                                    <li class="display-flex">
                                        <span class="text-dark">Message :</span> <span class="text-gray">'.$message.'</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer">
                                <p>&copy; All rights reserved. by &#60; / &#62;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
            </html>';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo json_encode(array("statusCode"=>200,"message"=>'Thank you for filling out your information! ...'));  
        } 
        catch (Exception $e) {
            echo json_encode(array("statusCode"=>500,"message"=>'Something is wrong. Please try again later')); 
        }

    }else{
        echo json_encode(array("statusCode"=>500,"message"=>'Fill the all fields')); 
    }
?>


