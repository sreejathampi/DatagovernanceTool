
    <?php include('header.php');?>
  <?php if (empty($_SESSION['registerId'])) 
		{
	        header('Location:index.php');
        }
        else
        {
        	echo $_SESSION['registerId'];
        }
	 ?>

	<div class="dash-main-content container-fluid">
		<div class="row">
			<div class="col-12" data-aos="fade-up" data-aos-duration="700">
				<div class="pending-projects project-list-main">
					<div class="project-head">
						<h4>HIPAA compliance 	<a class="btn btn-info" href="hipaaregulationadd.php">Add New</a><br></h4>

					</div>

					<div class="row responsive">

                                 <?php $i=1;
                             $dbnew= new Database(); 
                            $stmt=$dbnew->query("SELECT * FROM `hipaa regulations`");    

                            $rows1 = $dbnew->resultset();

                             foreach($rows1 as $result)

                                 {
                                    ?>



						<div class="col-md-3 col-12">
							<div class="project-box">
								<h4><?php echo $result['Incident Type'];?></h4>
								<p><?php echo $result['description'];?></p>
								<!-- <h6><?php echo $result['resolution'];?></h6> -->
								<a href="hipparegulationsdetails.php?id=<?php echo $result['id'];?>">View More</a>
							</div>
						</div>
						
                     <?php } ?>

					</div>
				</div>
			</div>




			<div class="col-12" data-aos="fade-up" data-aos-duration="1200">
				<div class="completed-projects project-list-main">
					<div class="project-head">
						<h4>Changed HIPAA compliance </h4>
					</div>
					<div class="row responsive">


                         <?php $i=1;
                             $dbnew= new Database(); 
                            $stmt=$dbnew->query("SELECT * FROM `hipaa regulations`");    

                            $rows1 = $dbnew->resultset();

                             foreach($rows1 as $result)

                                 {
                                    ?>

						<div class="col-md-3 col-12">
							<div class="project-box">
								<h4><?php echo $result['Incident Type'];?></h4>
								<p><?php echo $result['description'];?></p>
								<h6>Changed On:<?php echo $result['date'];?></h6>
								<a href="hipparegulationsdetails.php?id=<?php echo $result['id'];?>">View More</a>
							</div>
						</div>
                       <?php } ?>

						
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