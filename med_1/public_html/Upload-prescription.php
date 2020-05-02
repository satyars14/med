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
                        <h3>Upload Prescription</h3>
                    </div>
                    <div class="col-sm-7 ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Upload Prescription</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="upload_prescription">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-8 offset-lg-2 col-md-12">
                        <form method="post" action="#" id="#" class="text-center">
                            <div class="form-group files">
                                <input type="file" class="form-control" multiple="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Patient Name">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="hvr-sweep-to-right" style="margin-top: 20px;">Upload Prescription</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php include './footer.php'; ?>
</html>