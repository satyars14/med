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
        <div class="breadcrumb-sec">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-5">
                        <h3>Doctor Profile Exploration</h3>
                    </div>
                    <div class="col-sm-7 ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Doctors Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="profile">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-xl-4">
                        <div class="profile-sidebox">
                            <div class="profile-img"><img src="images/doct-prof1.jpg" alt="" class="img-fluid"></div>
                            <div class="name">Dr. John Smith</div>
                            <div class="desg">Professor, Neurology</div>
                            <div class="exp">Experience: 09 Year</div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span class="rating-value">4.0</span>
                            </div>
                            <div class="speciality">
                                <h4>Speciality Area</h4>
                                <ul>
                                    <li><a href="#">Neuromuscular Disease</a></li>
                                    <li><a href="#">Neurology-Adult</a></li>
                                    <li><a href="#">Nerve Disorders</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-8 mt-40">
                        <h4>Basic Info</h4>
                        <hr>
                        <div class="name">Dr. John Smith</div>
                        <div class="desg mb-3">Professor, Neurology</div>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis ligula neque. Duis eu lacinia nunc. Quisque tempus feugiat pellentesque. Suspendisse volutpat nec ipsum nec porttitor. Aenean non mollis lacus. Fusce orci lacus, ornare in est ut, finibus auctor elit. Nunc ut dolor enim. In hac habitasse platea dictumst. </p>
                        <h4>Clinic</h4>
                        <hr>
                        <ul class="clinic-list list-inline mb-5">
                            <li><a href="#">ABC Medical college & Hospital</a></li>
                            <li><a href="#">ABC Medical</a></li>
                        </ul>
                        <div class="booking-form">
                            <h4>Book An Appointment</h4>
                            <form action="action">
                                <div class="form-row">
                                    <div class="col-auto">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                            <select class="form-control no-brd-r">
                                                <option selected>Monday</option>
                                                <option>Wednesday</option>
                                                <option>Friday</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                                            </div>
                                            <select class="form-control">
                                                <option selected>10.30 - 11.00</option>
                                                <option>11.00 - 11.30</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="booking-fees">Rs. 200 / Appointment</div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="#" class="hvr-sweep-to-right">Book Now <i class="fa fa-calendar"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include './footer.php'; ?>
</html>