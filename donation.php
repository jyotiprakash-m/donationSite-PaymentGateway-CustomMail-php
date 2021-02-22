<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 left-item">
                        <ul>
                            <li><i class="fas fa-envelope-square"></i> sales@smarteyeapps.com</li>
                            <li><i class="fas fa-phone-square"></i> +123 987 887 765</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block right-item">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li> <a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li> <a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
                        <img src="assets/images/logo.jpg" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about_us.php">About Us</a></li>
                            <li><a href="donationList.php">Our Donation</a></li>
                            <li><a href="contact_us.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a href="donation.php"><button class="btn btn-success">Donate Now</button></a>
                    </div>
                </div>

            </div>
        </div>

    </header>
    <br>
    <section class="what-we-do mt-5">
        <div class="container">

            <div class="session-title row">
                <h2>Support Us For Growth</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <div class="donat-form">
                        <div class="form-titl">
                            <b>Enter the amount for Donation</b>
                        </div>
                        <form action="pay.php" method="post">
                            <div class="form-dong">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₹</span>
                                    </div>
                                    <input type="number" name="price" class="form-control" placeholder="Enter Amount" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">INR</span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Full Name" required>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email Address" required>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="contactno" placeholder="Enter Your Contact no" required>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="city" placeholder="Enter City" required>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="pin" placeholder="Enter Pin Code" required>
                                </div>
                                <div class=" no-margin ">
                                    <input type="submit" name="submit" value="Donate Now" class="btn btn-success">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="donation-list">
                        <div class="we-ro">
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="detail">
                                <h6>We Care Student Education</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                        <div class="we-ro">
                            <div class="icon">
                                <i class="fas fa-medkit"></i>
                            </div>
                            <div class="detail">
                                <h6>Care Student Health</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>
                        <div class="we-ro">
                            <div class="icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="detail">
                                <h6>We Care Student Education</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="we-ro">
                            <div class="icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="detail">
                                <h6>100% Goes to the Field</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </section>
    <div class="copy">
        <div class="container">
            <a href="https://www.smarteyeapps.com/">2021 &copy; All Rights Reserved | Designed and Developed by
                Jyotiprakash</a>

            <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>

    </div>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>