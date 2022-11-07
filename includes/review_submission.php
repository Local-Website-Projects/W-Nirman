<?php
include("../config/dbconfig.php");
if (isset($_POST['submitform'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $designation = mysqli_real_escape_string($con, $_POST['designation']);
    $company = mysqli_real_escape_string($con, $_POST['company']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = $con->query("INSERT INTO `review`( `name`, `email`, `designation`, `company`, `message`, `star`) VALUES ('$username','$email','$designation','$company','$message','5')");

    if ($query) {
        $email_to = $email;
        $subject = 'Email From Nirman Architecture & Development';


        $headers = "From: Nirman Architecture & Development  <info@nirmanad.org>\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $messege = "
           <html>
                <body style='background-color: #eee; font-size: 16px;'>
                <div style='max-width: 600px; min-width: 200px; background-color: #ffffff; padding: 20px; margin: auto;'>
                
                    <div style='text-align: center'>
                        <img src='https://nirmanad.org/signboard.jpg' style='width:500px'/>
                    </div>
                    <h3 style='color:black'>Hi $username</h3>
                
                    <p style='text-align: center;color:green;font-weight:bold'>Thank you for your feedback!</p>
                
                    <p style='color:black'>
                    Thank you so much for your kind words, $username. We really appreciate you 
                    taking the time out to share your experience with us, 
                    We count ourselves lucky for customers like you. 
                    We look forward to working with you again in the future!<br/>
                    
                        Our team is excited to receive your feedback!<br>
                        We are looking forward to focous on your suggestions. Your opinion always incourage us to improve our services.<br>
                        If you have any mnore suggestion for us, please let us know by <a href='mailto:info@nirmanad.org'>info@nirmanad.org</a>
                    </p>
                    <p style='color:black;text-align: center'>
                        <a href='https://www.nirmanad.org/' target='_blank'><button style='padding: 20px; background-color: #341c77;color: #ffffff;' >Visit our Website</button></a>
                    </p>
                </div>
                </body>
            </html>";
        if (mail($email_to, $subject, $messege, $headers)) {
            $_SESSION['status'] = "Your opinion is always important for us!";
            $_SESSION['status_code'] = "success";
            $_SESSION['status_title'] = 'Thank You!';
            echo "
               <script>window.location.replace('../index.php');
               </script>";
        } else {
            $_SESSION['status'] = "Something went wrong!";
            $_SESSION['status_code'] = "error";
            $_SESSION['status_title'] = 'Sorry!';
            echo "
               <script>window.location.replace('../index.php');
               </script>";
        }

    } else {
        $_SESSION['status'] = "Something went wrong!";
        $_SESSION['status_code'] = "error";
        $_SESSION['status_title'] = 'Sorry!';
        echo "
               <script>window.location.replace('../index.php');
               </script>";
    }
}
