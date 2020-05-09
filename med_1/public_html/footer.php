<div class="footer-contact">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 wow slideInRight">
                <div class="c-block">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <div class="c-details">
                        <strong>Email :</strong>
                        <a href="mailto:info@mymedicalmate.com">info@mymedicalmate.com</a>
                    </div>
                </div>
                <div class="c-block">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <div class="c-details">
                        <strong>CalL Us :</strong>
                        +91 (798) 645-1320
                    </div>
                </div>
                <div class="c-block">
                    <div class="c-details">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container pd60">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <h4>Site Link</h4>
                <ul>
                    <li><a href="#">Upload Prescription</a></li>
                    <li><a href="#">Find Doctors</a></li>
                    <li><a href="#">Find Clinic</a></li>
                    <li><a href="#">Find Assistant Boy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4>Site Link</h4>
                <ul>
                    <li><a href="#">Upload Prescription</a></li>
                    <li><a href="#">Find Doctors</a></li>
                    <li><a href="#">Find Clinic</a></li>
                    <li><a href="#">Find Assistant Boy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4>Site Link</h4>
                <ul>
                    <li><a href="#">Upload Prescription</a></li>
                    <li><a href="#">Find Doctors</a></li>
                    <li><a href="#">Find Clinic</a></li>
                    <li><a href="#">Find Assistant Boy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4>Subscribe Now!</h4>
                <form action="" method="post" class="newsletter">
                    <p>Join our subscribers list to get the latest news, updates and special offers delivered directly in your inbox.</p>
                    <div class="subscribe">
                        <input type="email" class="email-input" placeholder="Email ID" required="">
                        <input type="submit" class="btn-subscribe" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p class="text-center">&copy; My Medical Mate 2020. All Right Reserved</p>
    </div>
</footer>

<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="js/scripts.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('ready', function () {
        $(".assistant-container").slick({
            dots: false,
            infinite: true,
            centerMode: false,
            slidesToShow: 4,
            autoplay: true,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        arrows: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        arrows: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '30px',
                        slidesToShow: 1
                    }
                }
            ]
        });

    });

</script>
<script src="js/wow.min.js" type="text/javascript" charset="utf-8"></script>
<script>
    wow = new WOW(
            {
                animateClass: 'animated',
                offset: 100,
                callback: function (box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            }
    );
    wow.init();
//    document.getElementById('moar').onclick = function (e) {
//        var section = document.createElement('section');
//        section.className = 'section--purple wow fadeInDown';
//        this.parentNode.insertBefore(section, this);
//    };
</script>
<script src="js/anime.min.js"></script>
<script>
    var TxtType = function (el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function () {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function () {
            that.tick();
        }, delta);
    };

    window.onload = function () {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #eee}";
        document.body.appendChild(css);
    };
</script>

<script>
    window.onscroll = function () {
        myFunction()
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
<script>
    $(document).ready(function () {
        $("#myModalpromo").modal('show');
    });
</script>
<script>
    var rangeSlider = function () {
        var slider = $('.range-slider'),
                range = $('.range-slider__range'),
                value = $('.range-slider__value');

        slider.each(function () {

            value.each(function () {
                var value = $(this).prev().attr('value');
                $(this).html(value);
            });

            range.on('input', function () {
                $(this).next(value).html(this.value);
            });
        });
    };
    rangeSlider();
</script>
<script>
    $(document).ready(function () {
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function () {
            $(this).prev(".tog-title").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function () {
            $(this).prev(".tog-title").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function () {
            $(this).prev(".tog-title").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>
<script>
    function getVals() {
        // Get slider values
        var parent = this.parentNode;
        var slides = parent.getElementsByTagName("input");
        var slide1 = parseFloat(slides[0].value);
        var slide2 = parseFloat(slides[1].value);
        // Neither slider will clip the other, so make sure we determine which is larger
        if (slide1 > slide2) {
            var tmp = slide2;
            slide2 = slide1;
            slide1 = tmp;
        }

        var displayElement = parent.getElementsByClassName("rangeValues")[0];
        displayElement.innerHTML = "Rs " + slide1 + " - Rs " + slide2 + "";
    }

    window.onload = function () {
        // Initialize Sliders
        var sliderSections = document.getElementsByClassName("range-slider-price");
        for (var x = 0; x < sliderSections.length; x++) {
            var sliders = sliderSections[x].getElementsByTagName("input");
            for (var y = 0; y < sliders.length; y++) {
                if (sliders[y].type === "range") {
                    sliders[y].oninput = getVals;
                    // Manually trigger event first time to display values
                    sliders[y].oninput();
                }
            }
        }
    }
</script>
<script>
    $(document).ready(function () {
        $(".mb-filter-bar").click(function () {
            $("aside").slideToggle();
        });
    });
</script>
</body>
