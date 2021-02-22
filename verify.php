<?php

echo "<div style='text-align:center;'><imgsrc='https://raw.githubusercontent.com/jyotiprakash-m/node/master/logo-peopleCare.jpg' alt='Logo'></div>";

use PHPMailer\PHPMailer\PHPMailer;


require('config.php');

// Database connection
require('connection.php');

session_start();

require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false) {
    $api = new Api($keyId, $keySecret);

    try {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true) {
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $price = $_SESSION['price'];
    $contactno = $_SESSION['contactno'];
    $city = $_SESSION['city'];
    $pin = $_SESSION['pin'];
    $sql = "INSERT INTO `donations`(`order_id`, `payment_id`, `name`, `email`, `contactno`, `city`, `pin`, `status`, `amount`) 
    VALUES ('$razorpay_order_id','$razorpay_payment_id','$name','$email','$contactno','$city','$pin','Success',$price)";
    if (mysqli_query($conn, $sql)) {
        echo "<div style='text-align:center;font-size:20px;'>
        <p >Payment details inserted to database</p>
        </div>";
    }
    $html = "
    <div style='text-align:center;font-size:20px;'>
    <p>Your payment was successful</p> 
    <p>Payment ID: {$_POST['razorpay_payment_id']}</p>
    <a style='text-decoration:none;background-color:#71b61b;color:white;padding:8px 15px;border-radius:5px;' href='index.php'>Go Home</a>
    </div>
    ";

    // Sending invoice to customer

    $subject = "Thank you for donating us !";
    $myMailId = "your mail";
    $myName = "PeopleCare Organization";
    $body = '<div style="text-align: center;font-family: sans-serif; margin: 0 2vw; background-color: rgb(245, 252, 239);border: 2px solid #ddd;">
    <div style=" padding: 15px;">
        <div style=" border-bottom: 2px solid #ddd; margin-bottom: 20px;">
            <img src="https://raw.githubusercontent.com/jyotiprakash-m/node/master/logo-peopleCare.jpg" alt="Logo">
            <h1 style="color: #5fd359;">Payment Successfull !</h1>
            <h3 style="background-color: #60c5c9; padding: 8px;color:white;">Thank you, ' . $name . ' for donating ' . $price . ' rupees</h3>
        </div>
        <div>
            <div style="text-align:left;">
                <div style="text-align:left;">
                    <p>Name:  ' . $name . '  </p>
                    <p>Email: ' . $email . ' </p>
                    <p>Donation: ' . $price . ' ₹</p>
                    <p>Oder Id: ' . $razorpay_order_id  . ' </p>
                    <p>Payment Id: ' . $razorpay_payment_id . '</p>
                </div>
            </div>
            <div style="text-align:right;">
                <div style="text-align:left;">
                    <p>City: ' . $city . '</p>
                    <p>Pin Code: ' . $pin . '</p>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align:left;margin-left:25px;">
        <p>With Regards,</p>
        <p>People Care Team</p>
        <p>Bhubaneswar,757081</p>
        <p>query@peoplecare.com</p>
    </div>
</div>';
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    // Stmp Setting
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = $myMailId;
    $mail->Password = "Your pass";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    // Email Setting
    $mail->isHTML(true);
    $mail->setFrom($email, $myName);
    $mail->addAddress("$email");
    $mail->Subject = $subject;
    $mail->Body = $body;
    if ($mail->send()) {
        echo "<script>";
        echo "alert('Payment successful !, We send the mail in your mail address');";
        echo "</script>";
    }
} else {
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
