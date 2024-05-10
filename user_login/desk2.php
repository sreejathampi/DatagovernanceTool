<!-- Header area Start -->
<?php
ob_start();
session_start();

// if($_SESSION['userlogin']!=1)
// if($_SESSION['useridsA'])
include("../includes/database.class.php");
include("../includes/functions.php");
include("../includes/includefunctions.php");
include 'headerarea.php';

 ?>

<!-- Header area End -->

<!-- Top Area Start-->

<?php include 'topareaM.php'; ?>
<!-- Top Area End -->

<!-- menu area start -->

<section class="container-fluid ">
		<div class="row">
		    <div class="col-12 m-auto">
		        <div class="ks-text">
		        	<p>Welcome </p>
		        </div>
		    </div>
			<div class="col-md-12 col-12 head-desk">
				<h6>Admin Panel</h6>

				<div class="staff-dashboard-img">
					<img src="img/staff-img.png">
				</div>

				<div class="row">
					<!--<div class="col-md-3 col-12">-->
					<!--	<div class="menu-box">-->
					<!--		<img src="" alt="">-->
					<!--		<h6>Make TT Bill</h6>-->


					<!--		<div class="col-md-2 col-12 date-find">-->
					<!--   					<h6>Start</h6>-->
					<!--					   <p></p>-->
					<!--   				</div>-->



					<!--	</div>-->
					<!--</div>-->
					<!--<div class="col-md-6 col-12">-->
					<!--	<div class="menu-box">-->
							<!--<img src="" alt="">-->
							<!--<h6>WHM zyb</h6>-->
					<!--		<div class="col-md-4 col-12 date-find">-->
					<!--   					<h6>Vayanasala Admin</h6>-->
					<!--					   <p></p>-->
					<!--   				</div>-->


					<!--	</div>-->
					<!--</div>-->
					<!--<div class="col-md-3 col-12">-->
					<!--	<div class="menu-box">-->
					<!--		<img src="" alt="">-->
					<!--		<h6>Read</h6>-->
					<!--		<p></p>-->

					<!--	</div>-->
					<!--</div>-->
					<!--<div class="col-md-2 col-12">-->
					<!--	<div class="menu-box">-->
					<!--		<img src="" alt="">-->
							<!--<h6>Develop</h6>-->
					<!--		<p></p>-->

					<!--	</div>-->
					<!--</div>-->
				</div>


			</div>


</section>

<!-- <section class="kids-img container-fluid">
    <img src="img/vbg.png">
</section> -->

<!--<section class="container-fluid graph">-->
<!--	<div class="row">-->
<!--			<div class="col-md-12 col-12 ">-->
<!--			    <div class="kids-img">-->
<!--			        <img src="img/vbg.jpg">-->
<!--			    </div>-->
<!--        	</div>-->
<!--	</div>-->
<!--</section>-->

<script>
    $(document).ready(function(){

   // $(".nav-item a").removeClass('active');

   //$(".dropdown-menu li").removeClass('active');

   $('#mydesk').addClass('active');

   //$('#packagesd').addClass('active');

   });
 </script>

<!-- menu area end -->

<!-- content area Start -->



<!-- content area end -->

<!-- footer area Start -->

<?php include 'footerarea.php'; ?>

<!-- footer area End -->
