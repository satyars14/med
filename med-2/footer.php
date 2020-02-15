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
  <script type="text/javascript">
    $(document).on('ready', function() {
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
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
  <script src="js/anime.min.js"></script>
  <script>
      // Wrap every letter in a span
var textWrapper = document.querySelector('.ml3');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
      </script>
      <script>
window.onscroll = function() {myFunction()};

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
	$(document).ready(function(){
		$("#myModalpromo").modal('show');
	});
</script>
    </body>
    