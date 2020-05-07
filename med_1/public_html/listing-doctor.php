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
        <div class="breadcrumb-sec">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-5">
                        <h3>Our Doctors</h3>
                    </div>
                    <div class="col-sm-7 ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Doctors</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="listing">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-3">
                        <aside>
                            <div id="accordion1">
                                <a class="tog-title" data-toggle="collapse" href="#collapseOne">
                                    Select Box
                                </a>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion1">
                                    <div class="form-group">
                                        <select name="cars" class="custom-select">
                                            <option selected>Custom Select Menu</option>
                                            <option value="option1">Option 1</option>
                                            <option value="option2">Option 2</option>
                                            <option value="option3">Option 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="accordion2">
                                <a class="tog-title" data-toggle="collapse" href="#collapseTwo">
                                    Check Box
                                </a>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordion2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="example2">
                                        <label class="custom-control-label" for="customCheck1">Custom checkbox 1</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2" name="example1">
                                        <label class="custom-control-label" for="customCheck2">Custom checkbox 2</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3" name="example1">
                                        <label class="custom-control-label" for="customCheck3">Custom checkbox 3</label>
                                    </div>
                                </div>
                            </div>

                            <div id="accordion3">
                                <a class="tog-title" data-toggle="collapse" href="#collapseThree">
                                    Radio Input
                                </a>
                                <div id="collapseThree" class="collapse show" data-parent="#accordion3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                                        <label class="custom-control-label" for="customRadio">Custom radio 1</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                                        <label class="custom-control-label" for="customRadio2">Custom radio 2</label>
                                    </div>
                                </div>
                            </div>

                            <div id="accordion4">
                                <a class="tog-title" data-toggle="collapse" href="#collapseFour">
                                    Star Rating
                                </a>
                                <div id="collapseFour" class="collapse show" data-parent="#accordion4">
                                    <div class="range-slider">
                                        <input class="range-slider__range" type="range" value="1" min="1" max="5">
                                        <span class="range-slider__value">0</span>
                                    </div>
                                </div>
                            </div>

                            <div id="accordion5">
                                <a class="tog-title" data-toggle="collapse" href="#collapseFive">
                                    Fees / Appointment
                                </a>
                                <div id="collapseFive" class="collapse show" data-parent="#accordion5">
                                    <div class="range-slider">
                                        <input class="range-slider__range" type="range" value="200" min="100" max="500" step="100">
                                        <span class="range-slider__value">0</span>
                                    </div>
                                </div>
                            </div>





                        </aside>
                    </div>

                    <div class="col-md-9">
                        <div class="row clearfix">

                            <div class="col-md-4">
                                <div class="cbp-item">
                                    <div class="prof-image">
                                        <img src="images/doctor1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="prof-details">
                                        <div class="name">Dr. Keri Peterson MD</div>
                                        <div class="dept">Department: Cardiology</div>
                                        <a href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cbp-item">
                                    <div class="prof-image">
                                        <img src="images/doctor2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="prof-details">
                                        <div class="name">Dr. Steven P. Leon</div>
                                        <div class="dept">Department: Gynaecology </div>
                                        <a href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cbp-item">
                                    <div class="prof-image">
                                        <img src="images/doctor3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="prof-details">
                                        <div class="name">Cardiac Surgery</div>
                                        <div class="dept">Department: Cardiology</div>
                                        <a href="#">Details</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="cbp-item">
                                    <div class="prof-image">
                                        <img src="images/doctor1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="prof-details">
                                        <div class="name">Dr. Keri Peterson MD</div>
                                        <div class="dept">Department: Cardiology</div>
                                        <a href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cbp-item">
                                    <div class="prof-image">
                                        <img src="images/doctor2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="prof-details">
                                        <div class="name">Dr. Steven P. Leon</div>
                                        <div class="dept">Department: Gynaecology </div>
                                        <a href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cbp-item">
                                    <div class="prof-image">
                                        <img src="images/doctor3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="prof-details">
                                        <div class="name">Cardiac Surgery</div>
                                        <div class="dept">Department: Cardiology</div>
                                        <a href="#">Details</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="cbp-item">
                                    <div class="prof-image">
                                        <img src="images/doctor1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="prof-details">
                                        <div class="name">Dr. Keri Peterson MD</div>
                                        <div class="dept">Department: Cardiology</div>
                                        <a href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cbp-item">
                                    <div class="prof-image">
                                        <img src="images/doctor2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="prof-details">
                                        <div class="name">Dr. Steven P. Leon</div>
                                        <div class="dept">Department: Gynaecology </div>
                                        <a href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cbp-item">
                                    <div class="prof-image">
                                        <img src="images/doctor3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="prof-details">
                                        <div class="name">Cardiac Surgery</div>
                                        <div class="dept">Department: Cardiology</div>
                                        <a href="#">Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-center">
                            <a class="hvr-sweep-to-right" >Load More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include './footer.php'; ?>
</html>