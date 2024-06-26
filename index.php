<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<title>DataGovernance Tool</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/font.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">	
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
</head>
<body>
<?php session_start();
    include("includes/database.class.php");
	include("includes/functions.php");
	include("includes/includefunctions.php");
?>

<style>
        /* Button Style */
        .submit-button {
            background-color: #d10db2;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }

        /* Button Hover Effect */
        .submit-button:hover {
            background-color: #45a049;
        }
    </style>

	<!-- login section starts -->
	<section class="login-main container-fluid">
		
		<div class="login-main-box">
			<div class="row">
					<div class="login-left-img">
						<img src="img/login-left.jpg">
					</div>
					<div class="login-box">
						<a href="index.php"><img class="l-login" src="img/sinro.png"></a>
						<h4>Log In to Your Account</h4>
						<?php if($_GET['l']=="miss")
          {
          ?>
          <p id="hideMe" style="text-align: center; color: red;"> Login Failed Please Try Again Later! </p>
          <?php
        }
          ?>
						<form action="loginaction.php" method="post">
							<input type="text" id="username" name="username" placeholder="Enter your Username" required>
							<input type="password" id="phone" name="password" placeholder="Enter your Password" required>
							<div class="login-btn">
								<button type="submit" class="submit-button" name="btn">Login</button>
							</div>
							<!-- <h4 class="h-or">or</h4>
							<div class="login-with-pswd">
								<a href="">Login With Password</a>
							</div> -->
							<div class="register-content">
								<!-- <h6>Dont have an account <a type="button" name="Open" onclick="popupOpen();">Register Now</a></h6> -->
							</div>
						</form>
					</div>
			</div>
		</div>

		<div class="overlay" id="overlay" style="display:none;"></div>
	        <div class="popup" id="popup" style="display:none;">
	            <div class="container popup-inner contact-box p-0">
	              <input type="button" name="Close" class="s3-btn-close" onclick="popupClose();" value="&times;">
	              <div class="row">
	                  <div class="col-12 int-head">
	                      <div class="popup-content">
	                      	<img src="img/sinro.png">
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
	                      </div>
	                  </div>
	              </div>
	            </div>
	        </div>
		</div>

	</section>
	<!-- login section ends -->







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