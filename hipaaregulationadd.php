<?php include("header.php");?>
<style>
        /* CSS code to style the textarea */
        textarea {
            width: 400px; /* Set the width to 300 pixels */
            height: 150px; /* Set the height to 150 pixels */
            /* You can adjust the width and height values to suit your needs */
        }

    </style>
    <style>
        /* CSS code to style the button */
        .my-button {
            background-color: #b31be0; /* Green background */
            border: none; /* No border */
            color: white; /* White text color */
            padding: 10px 20px; /* Padding (top and bottom: 10px, left and right: 20px) */
            text-align: center; /* Center text horizontally */
            text-decoration: none; /* No underline */
            display: inline-block; /* Display as inline block */
            font-size: 16px; /* Font size */
            margin: 4px 2px; /* Margin (top and bottom: 4px, left and right: 2px) */
            cursor: pointer; /* Cursor on hover */
            border-radius: 8px; /* Rounded corners */
            transition-duration: 0.4s; /* Smooth transition on hover */
        }

        /* Hover effect */
        .my-button:hover {
            background-color: #45a049; /* Darker green background on hover */
        }
    </style>

	<div class="dash-main-content container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="assignment-box">
					<div class="banner">
						<img src="img/dashboard/assignment-banner.png">
					</div>
					<div class="assignment-question-box">
						<h3>HIPPA Regulations</h3>
						<form action="hipparegulationaction.php" method="post">
							<!-- <h4> </h4>
							
							<div class="regular-field">
								<input type="text" id="" name="incident" value="" / required>
								
							</div> -->
							<h4> Add the incident Type </h4>
							<div class="regular-field">
								
								<textarea rows="4" cols="50" name="incident" required>
                                 </textarea>
							</div>
							<h4> Description </h4>
							<div class="regular-field">
								
								<textarea rows="4" cols="50" name="description" >
                                 </textarea>
							</div>
							<h4> Resolution </h4>
							<div class="regular-field">
								
								<textarea rows="4" cols="50" name="resolution" >
                                 </textarea>
							</div>
							<div class="assignment-box-btn">
								<button class='my-button' name="btn" type="Submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
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