<?php include("header.php");?>

	<div class="dash-main-content container-fluid">
		<div class="project-container">
			<div class="banner">
				<img src="img/dashboard/profile-banner.png">
			</div>
			<div class="profile-main-box">
				<form action="userupdateaction.php" method="post">
					<div class="row">
						<div class="col-12">
							<div class="profile-img">
								<img src="img/dashboard/student.png">
							</div>
						</div>

                              <?php $id=$_GET['ids'];
                                     $db1    =   new Database();
                                     $stmt=$db1->query("SELECT * FROM `users` where `id`='$id'"); 
                                     $rows = $db1->resultset();
                                     foreach($rows as $result)
                                     {  
                                     } ?>  

						<div class="col-md-6 col-12">
							<label for="fname">Name:</label><br>
							<input type="text" id="user" name="name" value="<?php echo $result['name'];?>" required>
							<input type="hidden" name="id" value="<?php echo $id;?>">
						</div>
						<div class="col-md-6 col-12">
							<label for="fname">Phone:</label><br>
							<input type="number" id="user" name="phone" value="<?php echo $result['phone'];?>" required>
						</div>
						<div class="col-md-6 col-12">
							<label for="fname">Email:</label><br>
							<input type="email" id="user" name="email" value="<?php echo $result['email'];?>" required>
						</div>
							
						<div class="col-md-6 col-12">
							<label for="fname">Qualification:</label><br>
							<input type="text" id="user" name="qualification" value="<?php echo $result['qualification'];?>" required>
						</div>
						<div  class="col-md-6 col-12">
						<label for="fname">Address:</label><br>
							<input type="text" id="user" name="address" value="<?php echo $result['address'];?>" required>
						</div>
						
						<div class="col-12">
							<div class="profile-btn">
								<button class="reg-btn" type="submit" name="btn">Update</button>
							</div>
						</div>
						<div class="col-12">
							<!-- <div class="chng-pswd">
								<a href="change-password.html">Change Password</a>
							</div> -->
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- <div class="dash-board-overlay">
	</div> -->
	



	







	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/aos.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/calendar.js"></script>


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
		$('.responsive').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 4,
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

  <script>
  	document.addEventListener("DOMContentLoaded", function(){
	  document.querySelectorAll('.nav-link').forEach(function(element){
	    
	    element.addEventListener('click', function (e) {

	      let nextEl = element.nextElementSibling;
	      let parentEl  = element.parentElement;	

	        if(nextEl) {
	            e.preventDefault();	
	            let mycollapse = new bootstrap.Collapse(nextEl);
	            
	            if(nextEl.classList.contains('show')){
	              mycollapse.hide();
	            } else {
	                mycollapse.show();
	                // find other submenus with class=show
	                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
	                // if it exists, then close all of them
	                if(opened_submenu){
	                  new bootstrap.Collapse(opened_submenu);
	                }
	            }
	        }
	    }); // addEventListener
	  }) // forEach
	}); 
	// DOMContentLoaded  end
  </script>

  <script>
  	const progress = document.querySelector('.progress-done');

	setTimeout(() => {
	  progress.style.opacity = 1;
	  progress.style.width = progress.getAttribute('data-done') + '%';
	}, 500)
  </script>

  <script>
  	const progress = document.querySelector('.progress-done-t');

	setTimeout(() => {
	  progress.style.opacity = 1;
	  progress.style.width = progress.getAttribute('data-done') + '%';
	}, 500)
  </script>

  


</body>
</html>