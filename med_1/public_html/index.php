<!DOCTYPE html>
<html>
    <?php include './headurl.php'; ?>

    <body>
        <div class="load-container">
            <div class="load-wrap">
                <div class="loading">
                    <div class="bounceball"></div>
                    <div class="load-text">SITE LOADING</div>
                </div>
            </div>
        </div>
        <div id="" data-id="myModalpromo" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="images/promo.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal HTML -->
        <div id="myModal-form" class="modal fade myModal-form">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Post Your Suggestion</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="" class="sugg-form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name*</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Phone*</label>
                                <input type="text" class="form-control" id="phone" placeholder="Phone" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" id="email" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="location">Location</label>
                                <select id="location" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="age">Select Age</label>
                                <select id="age" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select id="gender" class="form-control">
                                    <option selected>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="hvr-sweep-to-right" style="margin-top: 20px;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Search Modal -->
        <div class="modal fade search-modal searchbar" tabindex="-1" role="dialog" aria-labelledby="SearchModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <!--<h5 class="modal-title" id="exampleModalLongTitle">Search and Get</h5>-->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="mb-4 text-center">Curabitur efficitur arcu eget</h3>
                        <form class="pb-5 mb-5">
                            <div class="row mx-0">
                                <div class="col-md-6 mb-3">
                                    <div class="input-group relative">
                                        <i class="fa fa-map-marker"></i>
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="input-group">
                                        <select class="form-control">
                                            <option value="0">- Select -</option>
                                            <option value="medical">Medical</option>
                                            <option value="doctor">Doctor</option>
                                            <option value="assistant-boy">Assistant Boy</option>
                                            <option value="nurse">Nurse</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-btn text-center">
                                <button class="btn hvr-sweep-to-right bg-transparent" type="submit">
                                    Search <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include './header.php'; ?>
        <!-- Slider Started -->
        <main class="main-content p-3 p-sm-0">
            <section class="slideshow">
                <div class="slideshow-inner">
                    <div class="slides">
                        <div class="slide is-active ">
                            <div class="slide-content">
                                <div class="caption">
                                    <div class="title">Slide title 1</div>
                                    <div class="text">
                                        <p>Slide description 1</p>
                                    </div> 
                                    <a href="#" class="bnr-btn">
                                        <span class="btn-inner">Learn More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="image-container"> 
                                <img src="images/hero1.jpg" alt="" class="image" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-content">
                                <div class="caption">
                                    <div class="title">Slide title 2</div>
                                    <div class="text">
                                        <p>Slide description 2</p>
                                    </div> 
                                    <a href="#" class="bnr-btn">
                                        <span class="btn-inner">Learn More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="image-container">
                                <img src="images/hero2.jpg" alt="" class="image" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-content">
                                <div class="caption">
                                    <div class="title">Slide title 3</div>
                                    <div class="text">
                                        <p>Slide description 3</p>
                                    </div> 
                                    <a href="#" class="bnr-btn">
                                        <span class="btn-inner">Learn More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="image-container">
                                <img src="images/hero3.jpg" alt="" class="image" />
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        <div class="item is-active"> 
                            <span class="icon">1</span>
                        </div>
                        <div class="item">
                            <span class="icon">2</span>
                        </div>
                        <div class="item">
                            <span class="icon">3</span>
                        </div>
                    </div>
                    <div class="arrows">
                        <div class="arrow prev">
                            <span class="svg svg-arrow-left">
                                <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
                                <span class="alt sr-only"></span>
                            </span>
                        </div>
                        <div class="arrow next">
                            <span class="svg svg-arrow-right">
                                <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
                                <span class="alt sr-only"></span>
                            </span>
                        </div>
                    </div>
                </div> 
            </section>
        </main>
        <!-- Slider Ended -->
<!--        <section class="hero text-center">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/hero1.jpg" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="images/hero2.jpg" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="images/hero3.jpg" class="img-fluid">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>-->

        <section class="icon-sec wow fadeInDown" data-wow-suration="3s">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <h1>
                            <a href="" class="typewrite" data-period="2000" data-type='[ "My Medical Mate", "Better Service", "Fast Service" ]'>
                            </a>
                        </h1>
                        <h2 class="center text-center mb30">Quick view</h2>
                        <ul class="list-inline text-center services-brief">
                            <li class="list-inline-item" style="filter: grayscale(0) blur(0px);"><a href="#!" class="pulse"><img src="images/icons/01.png" alt=""><span>Facilisis</span></a></li>
                            <li class="list-inline-item" style="filter: grayscale(0) blur(0px);"><a href="#!" class="pulse"><img src="images/icons/02.png" alt=""><span>Facilisis</span></a></li>
                            <li class="list-inline-item" style="filter: grayscale(0) blur(0px);"><a href="#!" class="pulse"><img src="images/icons/03.png" alt=""><span>Facilisis</span></a></li>
                            <li class="list-inline-item" style="filter: grayscale(0) blur(0px);"><a href="#!" class="pulse"><img src="images/icons/06.png" alt=""><span>Facilisis</span></a></li>
                            <li class="list-inline-item" style="filter: grayscale(0) blur(0px);"><a href="#!" class="pulse"><img src="images/icons/07.png" alt=""><span>Facilisis</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="introduction">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-6 wow bounceInLeft" data-wow-offset="300">
                        <h2 class="mb30">Upload Your Prescription</h2>
                        <h4 class="sub-title">Lorem Ipsum has been the<br>
                            industry's standard</h4>
                        <p class="mb30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis lacus libero, at semper odio porttitor at. Ut vel egestas est. Nunc facilisis leo vitae ante consectetur, ut fringilla orci luctus. </p>
                        <a href="about.php" class="hvr-sweep-to-right">Upload Prescription <i class="fa fa-medkit"></i></a>
                    </div>
                    <div class="col-lg-6 wow bounceInRight" data-wow-offset="300">
                        <img src="images/1.jpg" style="max-height: 350px;" alt="" class="img-fluid brd-10">
                    </div>
                </div>
            </div>
        </section>
        <section class="cta">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h3 class="wow slideInRight">Phasellus gravida lacinia velit sit amet posuere
                            Aliquam erat volutpat</h3>
                        <a href="#" class="hvr-sweep-to-right wow slideInLeft" data-toggle="modal" data-target="#myModal-form">Post Your Suggestion</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="appointment">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-6 wow bounceInLeft" data-wow-offset="300">
                        <img src="images/2.jpg" style="max-height: 300px; display: block;" alt="" class="brd-10 img-fluid mr-lg-0 mx-auto">
                    </div>
                    <div class="col-lg-6 wow bounceInRight" data-wow-offset="300">
                        <h2 class="mb30">Get Appointment</h2>
                        <p class="mb30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis lacus libero, at semper odio orttitor. Ut vel egestas est. Nunc facilisis leo vitae ante consectetur, ut fringilla orci luctus. </p>
                        <a href="about.php" class="hvr-sweep-to-right">Get Appointment <i class="fa fa-calendar"></i></a>
                    </div>
                </div>
            </div>
        </section>


        <section class="assistant-slider">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="text-center mb50 wow fadeInDown">
                            <h2 class="center mb30">May I Help You</h2>
                            <p class="lead">Our Assistant boy is here to help you</p>
                        </div>
                        <div class="assistant-container slider">
                            <div class="assistant-item">
                                <div class="item-image">
                                    <a href="#" class="rounded-circle">
                                        <img src="images/d1.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="item-detail">
                                    <ul class="detail">
                                        <li class="assistant-name"><strong>Full Name:</strong> BiraBhadra Dash</li>
                                        <li><strong>Mobile No:</strong> 8979786450</li>
                                        <li><strong>Email ID:</strong> email@example.com</li>
                                        <li><strong>Gender:</strong> Male</li>
                                        <li><span class="price">Rs.100/Day</span></li>
                                    </ul>
                                    <div class="social-profile">
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="assistant-item">
                                <div class="item-image">
                                    <a href="#" class="rounded-circle">
                                        <img src="images/d2.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="item-detail">
                                    <ul class="detail">
                                        <li class="assistant-name"><strong>Full Name:</strong> BiraBhadra Dash</li>
                                        <li><strong>Mobile No:</strong> 8979786450</li>
                                        <li><strong>Email ID:</strong> email@example.com</li>
                                        <li><strong>Gender:</strong> Male</li>
                                        <li><span class="price">Rs.100/Day</span></li>
                                    </ul>
                                    <div class="social-profile">
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="assistant-item">
                                <div class="item-image">
                                    <a href="#" class="rounded-circle">
                                        <img src="images/d1.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="item-detail">
                                    <ul class="detail">
                                        <li class="assistant-name"><strong>Full Name:</strong> BiraBhadra Dash</li>
                                        <li><strong>Mobile No:</strong> 8979786450</li>
                                        <li><strong>Email ID:</strong> email@example.com</li>
                                        <li><strong>Gender:</strong> Male</li>
                                        <li><span class="price">Rs.100/Day</span></li>
                                    </ul>
                                    <div class="social-profile">
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="assistant-item">
                                <div class="item-image">
                                    <a href="#" class="rounded-circle">
                                        <img src="images/d2.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="item-detail">
                                    <ul class="detail">
                                        <li class="assistant-name"><strong>Full Name:</strong> BiraBhadra Dash</li>
                                        <li><strong>Mobile No:</strong> 8979786450</li>
                                        <li><strong>Email ID:</strong> email@example.com</li>
                                        <li><strong>Gender:</strong> Male</li>
                                        <li><span class="price">Rs.100/Day</span></li>
                                    </ul>
                                    <div class="social-profile">
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="assistant-item">
                                <div class="item-image">
                                    <a href="#" class="rounded-circle">
                                        <img src="images/d1.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="item-detail">
                                    <ul class="detail">
                                        <li class="assistant-name"><strong>Full Name:</strong> BiraBhadra Dash</li>
                                        <li><strong>Mobile No:</strong> 8979786450</li>
                                        <li><strong>Email ID:</strong> email@example.com</li>
                                        <li><strong>Gender:</strong> Male</li>
                                        <li><span class="price">Rs.100/Day</span></li>
                                    </ul>
                                    <div class="social-profile">
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="assistant-item">
                                <div class="item-image">
                                    <a href="#" class="rounded-circle">
                                        <img src="images/d2.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="item-detail">
                                    <ul class="detail">
                                        <li class="assistant-name"><strong>Full Name:</strong> BiraBhadra Dash</li>
                                        <li><strong>Mobile No:</strong> 8979786450</li>
                                        <li><strong>Email ID:</strong> email@example.com</li>
                                        <li><strong>Gender:</strong> Male</li>
                                        <li><span class="price">Rs.100/Day</span></li>
                                    </ul>
                                    <div class="social-profile">
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-center m-auto">
                        <h2 class="mb50 center">Phasellus gravida nisl</h2>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Carousel indicators
                                    <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>  -->
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="item carousel-item active">
                                    <div class="img-box"><img src="images/t-1.jpg" alt=""></div>
                                    <p class="overview"><b>Paula Wilson</b>, Phasellus gravida</p>
                                    <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                                </div>
                                <div class="item carousel-item">
                                    <div class="img-box"><img src="images/t-1.jpg" alt=""></div>
                                    <p class="overview"><b>Antonio Moreno</b>, Phasellus gravida</p>
                                    <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                                </div>
                                <div class="item carousel-item">
                                    <div class="img-box"><img src="images/t-1.jpg" alt=""></div>
                                    <p class="overview"><b>Michael Holz</b>, Phasellus gravida</p>
                                    <p class="testimonial">Phasellus vitae suscipit justo.Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include './footer.php'; ?>

</html>