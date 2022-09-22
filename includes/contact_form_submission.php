<?php
include ("../config/dbconfig.php");
if (isset($_POST['submit-form'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $company = mysqli_real_escape_string($con, $_POST['company']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = $con->query("INSERT INTO `contact`( `name`, `phone`, `email`, `company`, `message`) VALUES ('$username','$phone','$email','$company','$message')");
    if($query){
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
                
                    <p style='text-align: center;color:green;font-weight:bold'>Thank you for reaching out us!</p>
                
                    <p style='color:black'>Our team is excited to join you on your journey with us!<br>
                        We look forward to speaking with you. One of our team member will contact you very soon.<br>
                        If there are any changes to your contact information or availability, please let us know by <a href='mailto:info@nirmanad.org'>info@nirmanad.org</a>
                        
                    </p>
                
                    <p style='color:black;text-align: center'>
                        <a href='https://www.nirmanad.org/' target='_blank'><button style='padding: 20px; background-color: #341c77;color: #ffffff;' >Visit our Website</button></a>
                    </p>
                </div>
                </body>
            </html>";
        if (mail($email_to, $subject, $messege, $headers)) {
            $_SESSION['status']="Your request is submitted. We will get back to you soon!";
            $_SESSION['status_code'] = "success";
            $_SESSION['status_title'] = 'Thank You!';
            echo "
               <script>window.location.replace('../index.php');
               </script>";
        }
        else{
            $_SESSION['status']="Something went wrong!";
            $_SESSION['status_code'] = "error";
            $_SESSION['status_title'] = 'Sorry!';
            echo "
               <script>window.location.replace('../index.php');
               </script>";
        }

    }else{
        $_SESSION['status']="Something went wrong!";
        $_SESSION['status_code'] = "error";
        $_SESSION['status_title'] = 'Sorry!';
        echo "
               <script>window.location.replace('../index.php');
               </script>";
    }
}