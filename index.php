<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> People Care</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <!-- ################# Header Starts Here#######################--->
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
    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail ">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner mt-4">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slide-02.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bounceInDown">Support Child for Education</h5>
                        <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo
                            neque, <br>
                            aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                            sed sagittis at, sagittis quis neque. Praesent.</p>

                        <div class="row vbh">

                            <div class="btn btn-success  bounceInUp"><a href="#donation"> Donate Now</a> </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/slide-03.jpg" alt="Third slide">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class=" bounceInDown">We Need Your Support</h5>
                        <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo
                            neque, <br>
                            aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                            sed sagittis at, sagittis quis neque. Praesent.</p>

                        <div class="row vbh">

                            <div class="btn btn-success  bounceInUp"><a href="#donation"> Donate Now</a> </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

    <!-- ################# What we Do Here#######################--->
    <section id="donation" class="what-we-do">
        <div class="container">
            <div class="session-title row">
                <h2>Support Us For Growth</h2>
                <p>We are a non-profital & Charity raising money for child education</p>
            </div><br>
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


    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row session-title">
                    <h2>Our Achievemtns in Numbers</h2>
                    <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment
                        facilities.
                        But you can read the following facts in order to make sure of all pluses of our clinic:</p>
                </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>12+</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>1812+</h3>
                        <span>HAPPY CHILDRENS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>52+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>48+</h3>
                        <span>FUNT RAISED</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- ################# About Us Starts Here#######################--->

    <section class="with-medical">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <img src="assets/images/about.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 txtr">
                    <h4>Why choos Peole Care for your <br>
                        <span>Next Charity Donation</span>
                    </h4>
                    <p>The word ‘charity’ means generosity in giving some­thing to the needy out of loving kindness towards them; and a charitable organization is an institution with funds to help the needy.


                        Thus charity begins at home. In other words, it begins in the near neighbourhoods of a person. One first comes forward to help his neighbours, relatives and friends in the very beginning. Afterwards, he extends his, same helping hand to the distant places, where thousands of the needy and the weak people await his help and sympathy.</p>
                    <p> There is a proverb: ‘Charity begins at home.’ A per­son, who is kind at heart and possesses compassion from his early days towards the weak and the needy in the society, is generally found to help and make gifts to the poor. He finds joy and satisfaction in giving alms to a beggar, or renders some financial relief to the needy persons who are near at hand.
                    </p>
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


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>


</html>