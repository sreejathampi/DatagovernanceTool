
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
			<div class="col-12">
				<div class="assignment-box">
					<div class="banner">
						<img src="img/dashboard/assignment-banner.png">
					</div>
					<div class="assignment-question-box">
						<h3>Access Permission</h3>
						<form action="permissionaction.php" method="post">
							<div class="regular-field">
							<h4>1.Select Department?</h4>
							<select name="category_id" id="category_id" class="form-control" required>
                               <option>select</option>
                                    <?php 
                                     $db1    =   new Database();
                                     $stmt=$db1->query("SELECT * FROM `usersubcategory`"); 
                                     $rows = $db1->resultset();
                                     foreach($rows as $result)
                                     {   ?>
                                        <option value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option> ?> 
                                     <?php
                                     }
                                     $db1->dbClose();
                                     ?>
                            </select>
                            </div>
							<h4>2.Set Permission to access Patient Data ?</h4>
							<div class="regular-field">
								<input type="radio" id="" name="patient" value="1" />
								<label for="">Yes</label><br />
								<input type="radio" id="" name="patient" value="0" />
								<label for="">No</label><br />
							</div>
							<h4>3.Set Permission to access Health Monitoring Data ?</h4>
							<div class="regular-field">
								<input type="radio" id="" name="health" value="1" />
								<label for="">Yes</label><br />
								<input type="radio" id="" name="health" value="0" />
								<label for="">No</label><br />
							</div>
							<h4>4.Set Permission to access Operational Data ?</h4>
							<div class="regular-field">
								<input type="radio" id="" name="operational" value="1" />
								<label for="">Yes</label><br />
								<input type="radio" id="" name="operational" value="0" />
								<label for="">No</label><br />
							</div>
							<h4>5.Set Permission to access HIPPA Regulations ?</h4>
							<div class="regular-field">
								<input type="radio" id="" name="hippa" value="1" />
								<label for="">Yes</label><br />
								<input type="radio" id="" name="hippa" value="0" />
								<label for="">No</label><br />
							</div>
							<h4>6.Set Permission to access HIPPA Compliance ?</h4>
							<div class="regular-field">
								<input type="radio" id="" name="compliance" value="1" />
								<label for="">Yes</label><br />
								<input type="radio" id="" name="compliance" value="0" />
								<label for="">No</label><br />
							</div>
							<h4>7.Set time period?</h4>
							<div class="regular-field">
								<input type="date" id="" name="op_date" value="" / required>
								
							</div>
							<div class="assignment-box-btn">
								<button type="submit" name="btn">Submit</button>
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