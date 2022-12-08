<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>GoodBoyz</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style>
    .default-logo {
        height: 50px;
        width: 50px;
    }

    .font-logo {
        font-size: 25px;
    }

    .font-logo-sm {
        font-size: 15px;
    }

    .mg-r {
        margin-left: 200px;
        height: 500px;
    }
    </style>
</head>
<!-- body -->

<body class="main-layout">


    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="final_image_logo.png" alt="#" class="default-logo" />
                                        <span class="font-logo">GoodBoyz</span> <span class="font-logo-sm">Pet
                                            Shop</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#we_do">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../page/sign_up.php">Register</a>
                                    </li>
                                </ul>
                                <div class="sign_btn"><a href="../page/log_in.php">Sign in</a></div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-4">
                    <div>
                        <h2 style="font-size: 50px ;">We Transform Your Pet<br>
                            to Chic! <br>
                            <span class="black">Grooming Salon</span>
                        </h2>
                        <a href="../page/sign_up.php" class="btn btn-primary">Join Us</a>
                    </div>
                </div>
                <div class="col-md-5 mg-r">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../images/cure_dogs.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/another-image.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/second-image.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- we_do -->
    <div id="we_do" class="we_do">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>What we do?</h2>
                        <span></span>
                        <strong></strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="we_do_box">
                        <i><img src="images/plan1.png" alt="#" /></i>
                        <h4>House Sevice</h4>
                        <p>For pet owners who do not have time to visit our place, we can bring our service at your own
                            home.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="we_do_box">
                        <i><img src="images/plan2.png" alt="#" /></i>
                        <h4>Consulations</h4>
                        <p>Keep yourself calm, and let the our vets examined your pet to see area of your concerns.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="we_do_box">
                        <i><img src="images/storage-box.png" alt="#" /></i>
                        <h4>Fun and Play</h4>
                        <p>We also offer yoys for your pets which will surely enjoy by them</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end we_do -->
    <footer style="position:fixed; bottom: 0; width: 100%; height: 40px; background: #212529;">
        <div class="text-center p-2">
            <p class="text-light">Copyright &copy; 2022
               <span style="margin-left:50px;">Contact information<img style="height:25px; width:25px ;  margin-left: 20px;" src="../images//icons8-facebook-96.png" alt="fb">
               <img style="height:25px; width:25px ;  margin-left: 15px;" src="../images/icons8-twitter-48.png" alt="twitter">
               <img style="height:25px; width:25px ;  margin-left: 15px;" src="../images/icons8-instagram-48.png" alt="insta">
               <img style="height:25px; width:25px ;  margin-left: 15px;" src="../images/icons8-phone-96.png" alt="phone">
            </span>
            </p>
            
        </div>
    </footer>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>