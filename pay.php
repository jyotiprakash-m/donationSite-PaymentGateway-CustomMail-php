<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//

$price = $_POST['price'];
$_SESSION['price'] = $price;
$customername = $_POST['name'];
$_SESSION['name'] = $customername;
$email = $_POST['email'];
$_SESSION['email'] = $email;
$contactno = $_POST['contactno'];
$_SESSION['contactno'] = $contactno;
$city = $_POST['city'];
$_SESSION['city'] = $city;
$pin = $_POST['pin'];
$_SESSION['pin'] = $pin;

$orderData = [
    'receipt'         => 3456,
    'amount'          => $price * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}


$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "People Care",
    "description"       => "A private charity Company",
    "image"             => "https://raw.githubusercontent.com/jyotiprakash-m/node/master/logo-peopleCare.jpg",
    "prefill"           => [
        "name"              => $customername,
        "email"             => $email,
        "contact"           => $contactno,
    ],
    "notes"             => [
        "address"           => $city,
        "merchant_order_id" => "12312321",
    ],
    "theme"             => [
        "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR') {
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

?>

<form style="text-align: center;" action="verify.php" method="POST">
    <img src='https://raw.githubusercontent.com/jyotiprakash-m/node/master/logo-peopleCare.jpg' alt='Logo'>
    <h2 style="margin:50px auto;">Click the below button for proceed your transaction</h2>
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $data['key'] ?>" data-amount="<?php echo $data['amount'] ?>" data-currency="INR" data-name="<?php echo $data['name'] ?>" data-image="<?php echo $data['image'] ?>" data-description="<?php echo $data['description'] ?>" data-prefill.name="<?php echo $data['prefill']['name'] ?>" data-prefill.email="<?php echo $data['prefill']['email'] ?>" data-prefill.contact="<?php echo $data['prefill']['contact'] ?>" data-notes.shopping_order_id="3456" data-order_id="<?php echo $data['order_id'] ?>" <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount'] ?>" <?php } ?> <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency'] ?>" <?php } ?>>
    </script>
    <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
    <input type="hidden" name="shopping_order_id" value="3456">
</form>