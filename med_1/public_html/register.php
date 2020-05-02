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
        
        <section class="pdl00 loginform">
        <div class="container">
            <div class="row clearfix">
                <div class="d-flex align-items-stretch img-area">
                    
                </div>
                
                <div class="d-flex align-items-stretch form-area">
                    <div class="login-form">
                        <h3 class="mb30">Create Account</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Repeat Password *" value="" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="hvr-sweep-to-right">Register</button>
                        </div>
                    </form>
                        <div class="form-footer">
                            <span>Already have an Account? <a href="login.php">Login</a></span>
                    </div>
                </div>
                </div>
                
            </div>
        </div>
            </section>

        <?php include './footer.php'; ?>

</html>