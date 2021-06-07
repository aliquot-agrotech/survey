<!DOCTYPE html>
<html lang="en">

<?php 
include 'db_connect.php';
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Survey Aliquot-ltd - Index</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

        <style>

        .parallax {
        /* The image used */
        background-image: url("img_parallax.jpg");

        /* Set a specific height */
        min-height: 300px; 

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <span>My Logo Here</span>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="./">Dashboard</a></li>    
                    <li class="dropdown"><a href="#"><span>Users</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="./indexg.php?page=new_user">Add User</a></li>                            
                            <li><a href="./indexg.php?page=user_list">User List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Survey</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="./indexg.php?page=new_survey">Add Survey</a></li>                            
                            <li><a href="./indexg.php?page=survey_list">List</a></li>
                            <li><a href="./indexg.php?page=survey_report">Survey Report</a></li>                            
                            <li><a href="./indexg.php?page=survey_widget">Survey List</a></li>
                        </ul>
                    </li>
                     <li><a href="./indexg.php?page=survey_report">Reports</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="login.php">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>

    </header>
    <!-- End Header -->   

    <?php

    include 'sliders/sld.php';

    ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

     <?php
     $insql = "SELECT * FROM intro_page";
     $inquery = mysqli_query($conn,$insql);
     $inresults = mysqli_fetch_assoc($inquery); 
     $h = $inresults['head'];
     $d = $inresults['description']; 
     $img = $inresults['image'];      
     ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up"><?=$h; ?> </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400"><?=$d; ?></h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/<?=$img; ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- End Hero -->
   

    <main id="main">
        <style>
        </style>
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                        <?php
                            $in_sql = "SELECT * FROM who_we_are";
                            $in_query = mysqli_query($conn,$in_sql);
                            $in_results = mysqli_fetch_assoc($in_query); 
                            $hd = $in_results['head'];
                            $desc = $in_results['description']; 
                            $imag = $in_results['image'];      
                        ?>

                            <h3>Who We Are</h3>
                            <h2><?=$hd;?></h2>
                            <p>
                                <?=$desc;?>
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/<?=$imag;?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </section>
        <!-- End About Section -->
       
        <!-- ======= Values Section ======= -->
        <section id="values" class="values">
            <div class="container" data-aos="fade-up">
            
               <?php
                $sql1 = "SELECT * FROM our_values LIMIT 1";
                $query1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
                $results1 = mysqli_fetch_array($query1);
                $title = $results1['title'];

                $dsql = "SELECT * FROM our_values";
                $dquery = mysqli_query($conn,$dsql);
                        // $dresults = mysqli_fetch_assoc($dquery);
                        // $h = $dresults['head'];
                        // $desc = $dresults['description'];
                        // $img = $dresults['image'];   
                        // $id = $dresults['id'];
                //print_r($desc);
                ?>
                <header class="section-header">                
                    <!-- <h2>Our Values</h2> -->
                    <p><?=$title; ?></p>
                </header>

                <div class="row">
                <?php
                while($row=mysqli_fetch_assoc($dquery)){ 

                    $photo= $row['image'];
                    
                    ?>                

                    <div class="col-lg-4">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/<?=$photo; ?>" class="img-fluid" alt="">
                            <h3><?=$row['head']; ?></h3>
                            <p><?=$row['description']; ?></p>
                        </div>
                    </div>

                    <?php }
                    ?>
                </div>

            </div>
        </section>
        <!-- End Values Section -->
       
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-headset" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Hard Workers</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Counts Section -->

      

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Pricing</h2>
                    <p>Check our Pricing</p>
                </header>

                <div class="row gy-4" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <h3 style="color: #07d5c0;">Free Plan</h3>
                            <div class="price"><sup>$</sup>0<span> / mo</span></div>
                            <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <span class="featured">Featured</span>
                            <h3 style="color: #65c600;">Starter Plan</h3>
                            <div class="price"><sup>$</sup>19<span> / mo</span></div>
                            <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <h3 style="color: #ff901c;">Business Plan</h3>
                            <div class="price"><sup>$</sup>29<span> / mo</span></div>
                            <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box">
                            <h3 style="color: #ff0071;">Ultimate Plan</h3>
                            <div class="price"><sup>$</sup>49<span> / mo</span></div>
                            <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Pricing Section -->

        
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
   <?php include 'footer1.php';
   ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="//code.tidio.co/0mti8giofnxyyqmdkgxga0fdms44zqot.js" async></script>
</body>

</html>