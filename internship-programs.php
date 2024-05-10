<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<title>Sinro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/font.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">	
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
</head>
<body>


	<!-- navbar section starts -->
	<nav class="navbar nav-inner navbar-expand-lg navbar-fixed-top">
	  <a class="navbar-brand" href="index.php">
	  	<img src="img/sinro.png">
	  </a>
	  <div class="navbar-btns">
	  	<ul>
	  		<li class="at-btn at-btn-sc"><a href="shop.html">Shop</a></li>
	  		<li class="at-btn at-btn-sc"><a href="login.html">Join Now</a></li>
	  		<li class="bk-btn"><a type="button" class="btn-shine" name="Open" onclick="popupOpen();">Book A Free Class</a></li>
	  	</ul>
	  </div>
	</nav>
	<!-- navbar section ends -->


	<!-- stem head banner starts -->
	<section class="r-d-banner-main  container-fluid p-0">
		<div class="rd-banner-img intern-banner">
			<img src="img/internship-banner.jpg">
		</div>
	</section>
	<!-- stem head banner ends -->

	<!-- internship tiles starts -->
  <section class="internship-home container-fluid" >
  	<div class="internship-home-container">
  		<div class="row">
  			<div class="col-md-3 col-12">
  				<div class="internship-component-box-one">
  					<img src="img/internship/internship-head.svg">
  				</div>
  			</div>
  			<div class="col-md-9 col-12">
  				<div class="row">
  					<div class="col-md-3 col-6">
  						<div class="internship-component-box-two">
  							<img src="img/internship/ai-mi.svg">
  						</div>
  					</div>
  					<div class="col-md-3 col-6">
  						<div class="internship-component-box-two">
  							<img src="img/internship/python-django.svg">
  						</div>
  					</div>
  					<div class="col-md-3 col-6">
  						<div class="internship-component-box-two">
  							<img src="img/internship/robotics.svg">
  						</div>
  					</div>
  					<div class="col-md-3 col-6">
  						<div class="internship-component-box-two">
  							<img src="img/internship/embedded-system.svg">
  						</div>
  					</div>
  					<div class="col-md-3 col-6">
  						<div class="internship-component-box-two">
  							<img src="img/internship/raspberry.svg">
  						</div>
  					</div>
  					<div class="col-md-3 col-6">
  						<div class="internship-component-box-two">
  							<img src="img/internship/3d-printing.svg">
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  <!-- internship tiles ends -->


  <!-- registration form starts -->
  <section class="at-form-main container-fluid">
		<div class="container">
			<div class="at-form-box">
				<h4>Register Here</h4>
				<form action="internshipactionpage.php" method="post">
					<div class="row">
						<div class="col-md-6 col-12">
									<input type="text" name="fname" class="form-control" placeholder="First Name *" value="" / required="">
								</div>
								<div class="col-md-6 col-12">
									<input type="text" name="lname" class="form-control" placeholder="Last Name *" value="" / required="">
								</div>
								<div class="col-md-6 col-12">
									<input type="email" name="email" class="form-control" placeholder="Your Email *" value="" / required="">
								</div>
								<div class="col-md-6 col-12">
									<input type="number" name="phone" class="form-control" placeholder="Phone Number*" value="" / required="">
								</div>
								<!-- <div class="col-md-6 col-12">
									<input type="text" name="txtName" class="form-control" placeholder="Graduation *" value="" />
								</div>  -->
								<div class="col-md-6 col-12">
	                      			<select name="course" id="" required="">
								      <option value="">Select Couse</option>
								      <option value="AI&MI">AI & MI</option>
								      <option value="Python">Python django</option>
								      <option value="Robotics">Robotics</option>
								      <option value="Embedded">Embedded</option>
								      <option value="Raspberry">Raspberry Arduino</option>
								      <option value="3D Printing">3D Printing</option>
								    </select>
	                      		</div>
						<div class="col-12">
							<button class="reg-btn" name="intenbtn" type="submit">Register</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
  <!-- registration form ends -->


	<!-- internship programs starts -->
	<section class="internship-program-main container-fluid">
			<div class="row">

				<!-- item starts -->
				<div class="col-12">
					<div class="row s-box-one">
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-img-box">
								<img src="img/s-ai.png">
							</div>
						</div>
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-content-box">
								<h4>Artificial Intelligence & <br> Machine Learning</h4>
								<p>
									This course is designed to expose to the basic concepts in Artificial Intelligence and Machine learning. Here we are focusing on big data analysis of different companies and you will get an exposure to the practical side of AI and ML..
								</p>
								<p>
									Learn how to perform face recognition, desired object recognition, eyes detection, shape detection, etc.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- item ends -->

				<!-- item starts -->
				<div class="col-12">
					<div class="row s-box-two">
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-content-box">
								<h4>Robotics <br>(Hardware and ROS)</h4>
								<p>
									Feel the essence of the next conqueror of the world, The Robot!!! Learn the programming and operate your Robot. Here you will get knowledge in hardware as well as programming Involved in ROBOTICS. And also, you will get an exposure in Robotic Operating Systems (ROS).
								</p>
							</div>
						</div>
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-img-box">
								<img src="img/s-robotics.png">
							</div>
						</div>
					</div>
				</div>
				<!-- item ends -->

				<!-- item starts -->
				<div class="col-12">
					<div class="row s-box-one">
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-img-box">
								<img src="img/s-python.png">
							</div>
						</div>
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-content-box">
								<h4>Python & <br> Django Framework</h4>
								<p>
									We are also providing internship programmes in Python and Django Framework, where we are focused more on project based training to understand the actual application in the real world. Python is a general-purpose language which is used for machine learning, natural language processing, web development and many more.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- item ends -->


				<!-- item starts -->
				<div class="col-12">
					<div class="row s-box-two">
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-content-box">
								<h4>Embedded <br> Systems</h4>
								<p>
									An embedded system is a microcontroller or microprocessor based system which is designed to perform a specific task. In our internship program, we are giving a detailed training in hardware (ARM7), software (Embedded C) and Real Time Operating system (RTOS).
								</p>
								<p>
									Embedded C programming language is an extension to the traditional C programming language, that is used in embedded systems.
								</p>
							</div>
						</div>
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-img-box">
								<img src="img/s-embedded.png">
							</div>
						</div>
					</div>
				</div>
				<!-- item ends -->

				<!-- item starts -->
				<div class="col-12">
					<div class="row s-box-one">
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-img-box">
								<img src="img/s-arduino.png">
							</div>
						</div>
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-content-box">
								<h4>Arduino <br> Raspberry</h4>
								<p>
									For getting exposure in hardware areas, we have designed internship programs which specifically focus on emerging technological hardware platform such as Arduino, Raspberry PI, micro bit Boards. Here you will get opportunity to design and develop new projects with the guidance of experts.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- item ends -->


				<!-- item starts -->
				<div class="col-12">
					<div class="row s-box-two">
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-content-box">
								<h4>3D Printing & <br> Designing</h4>
								<p>
									3D printing is a prototyping process whereby a real object is created from a 3D design. The digital 3D-model is saved in STL format and then sent to a 3D printer. This course is designed to expose to the basics of different 3D printing Technologies and also 3D modelling software is suitable for a beginner in 3D design.
								</p>
							</div>
						</div>
						<div class="col-md-6 col-12 m-auto">
							<div class="internship-img-box">
								<img src="img/s-3d.png">
							</div>
						</div>
					</div>
				</div>
				<!-- item ends -->

			</div>
	</section>
	<!-- internship programs ends -->


	<div class="overlay" id="overlay" style="display:none;"></div>
        <div class="popup" id="popup" style="display:none;">
            <div class="container popup-inner contact-box p-0">
              <input type="button" name="Close" class="s3-btn-close" onclick="popupClose();" value="&times;">
              <div class="row">
                  <div class="col-12 int-head">
                      <div class="popup-content">
                      	<img src="img/sinro.png">
                      	<form>
                      		<h4>Book Your Free Class</h4>
	                      	<div class="row">
	                      		<!-- <div class="col-3">
	                      			<input type="text" id="" name="" value="+91" readonly>
	                      		</div> -->
	                      		<div class="col-12">
	                      			<input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
	                      		</div>
	                      	</div>
		                      <a class="sch-btn" href="">Schedule a Free Class</a>
		                      <p>By registering here, I agree to Sinro Robotics <a href="">Terms & Conditions</a> and <a href="">Privacy Policy</a></p>
                      	</form>
                      </div>
                  </div>
              </div>
            </div>
        </div>
	</div>
	


	<!-- footer section starts -->
	<section class="payment-logo-home container-fluid p-0" >
		<div class="payment-img">
			<img src="img/payment.png">
		</div>
	</section>
	<section class="support-main container-fluid p-0">
		<div class="support-container">
			<div class="support-content">
				<div class="row">
					<div class="col-md-2 col-3 m-auto">
						<img src="img/email.svg">
					</div>
					<div class="col-md-4 col-9 m-auto">
						<p>Email us at</p>
						<h6>info@sinrorobotics.com</h6>
					</div>
					<div class="col-md-2 col-3 m-auto">
						<img src="img/whatsapp.svg">
					</div>
					<div class="col-md-4 col-9 m-auto">
						<p>Whatsapp or Call us on</p>
						<h6>+91 7306377006</h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="container-fluid">
		<div class="footer-container">
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="footer-logo">
						<img src="img/sinro-white.png">
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-youtube"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="subscribe-box">
						<h4>Subscribe to Sinro</h4>
						<p>Stay updated on the latest products, projects & more!</p>
						<form action="" class="" >
							<input data-v-79c49598="" type="email" name="" id=""><button data-v-79c49598="" class="ab-btn">Subscribe</button>
						</form>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="footer-links">
						<h6>About</h6>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="our-team.html">Meet Our Team</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="footer-links">
						<h6>Quick Links</h6>
						<ul>
							<li><a href="partner.html">Partner with us</a></li>
							<li><a href="career.html">Career</a></li>
						</ul>
					</div>
				</div>
				
				<div class="col-md-3 col-6">
					<div class="footer-links">
						<h6>Resources</h6>
						<ul>
							<li><a href="stem-robotics.html">Stem Education</a></li>
							<li><a href="internship-programs.php">Internship</a></li>
							<li><a href="r-and-d.html">R & D</a></li>
							<li><a href="at-labs.html">AT Lab-schools</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="footer-links">
						<h6>Sinro</h6>
						<ul>
							<li><a class="shop-ft-btn" href="shop.html">Shop</a></li>
							<li><a href="3d-printing.html">3D Printer Order</a></li>
							<li><a href="pcb-printing.html">PCB Printing</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row footer-copyright">
					<div class="col-12 text-center">
						<p><script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> Sinro Robotics. All rights reserved</p>
					</div>
			</div>
		</div>
	</footer>
	<!-- footer section ends -->







	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/aos.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>


	<script>
	  AOS.init();
	</script>

	<script>
		$('.single-item').slick();
	</script>

	<script>
		$(function () {
		  $(document).scroll(function () {
			  var $nav = $(".navbar-fixed-top");
			  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
			  if($(this).scrollTop() > $nav.height())
			  {
			  	if ( screen.width < 991.5 )
					{
			  		$('.at-btn-sc').removeClass('btnscda');
			  	}
			  }
			  else
			  {
			  	if ( screen.width < 991.5 )
					{
						$('.at-btn-sc').addClass('btnscda');
			  		
			  	}
			  }

		});
		  });
	</script>
	
	<script type="text/javascript">
		$(document).ready(function(){

			if(screen.width > 991.5)
			{

							$('.at-btn-sc').addClass('btnscda');
				  		
			}
			if(screen.width < 991.5)
			{

							$('.at-btn-sc').addClass('btnscda');
				  		
			}


		});
	</script>

	<script>
	    $(document).ready(function(){ 

	   $(".navbar-nav li").removeClass('active');

	   //$(".dropdown-menu li").removeClass('active');

	   $('#navhome').addClass('active');

	   //$('#packagesd').addClass('active');

	   });
	</script>

	<script>
		const counters = document.querySelectorAll(".counter");

		counters.forEach(counter => {
		  counter.innerText = '0'
		  const target = +counter.getAttribute('data-target');
		  const interval = target / 100;
		   
		  const updateCounter = () => {
		    const value = +counter.innerText;
		    if (value < target) {
		      counter.innerText = Math.ceil(value + interval);
		      
		      setTimeout(() => {
		        updateCounter()
		      }, 20);
		    }
		  }

		  updateCounter();
		 
		});

	</script>

	<script>
	   $(document).ready(function() {
	   $('.fancybox').fancybox({
	    beforeShow : function(){
	     this.title =  $(this.element).data("caption");
	    }
	   });
	   }); // ready
	</script>

	<script>
	      $(document).ready(function() {
	  // add all to same gallery
	  $(".gallery a").attr("data-fancybox","mygallery");
	  // assign captions and title from alt-attributes of images:
	  $(".gallery a").each(function(){
	    $(this).attr("data-caption", $(this).find("img").attr("alt"));
	    $(this).attr("title", $(this).find("img").attr("alt"));
	  });
	  // start fancybox:
	  $(".gallery a").fancybox();
	  });

	</script>

	<script>
		$('.coding-slick').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});
	</script>


	<script>
         // Popup Open
        function popupOpen(){
            document.getElementById("popup").style.display="block";
            document.getElementById("overlay").style.display="block";
        	}
        // Popup Close
        	function popupClose(){
            document.getElementById("popup").style.display="none";
            document.getElementById("overlay").style.display="none";
        	}
  </script>


</body>
</html>