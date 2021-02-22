<?php
$name = "Jyoti prakash Mohanta";
$email = "teachmeonline365@gmail.com";
$order_id = "order_ytqjhgjdas65afhg";
$pay_id = "pay_tyufgkys654yf";
$body = '<div style="text-align: center;font-family: sans-serif; margin: 0 100px; background-color: rgb(245, 252, 239);">
    <div style="border: 2px solid #ddd; padding: 25px;">
        <div style=" border-bottom: 2px solid #ddd; margin-bottom: 20px;">
            <img src="https://github.com/jyotiprakash-m/node/raw/master/logo-peopleCare.jpg" alt="Logo">
            <h1 style="color: #5fd359;">Payment Successfull !</h1>
        </div>
        <div style="display: flex;justify-content: space-between;">
            <div style="text-align:left;">
                <p>Name:  ' . $name . '  </p>
                <p>Email:' . $email . ' </p>
                <p>Oder Id:' . $order_id . ' </p>
                <p>Payment Id: ' . $pay_id . '</p>
            </div>
            <div>
                <p>City</p>
                <p>Pincode</p>
            </div>
        </div>
        <div>
            <h2 style="background-color: cadetblue; padding: 15px;color:white;"><span style="margin:0px 10px;">Thank you for donating 5000 rupee</span>🥳 </h2>
        </div>
        <div style="text-align: right;">
            <p>With Regards,</p>
            <p>People Care Team</p>
            <p>Bhubaneswar,757081</p>
        </div>

    </div>
</div>';

echo $body;
