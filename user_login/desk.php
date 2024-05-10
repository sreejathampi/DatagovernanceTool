<!-- Header area Start -->
<?php
ob_start();
session_start();
 $dpid=$_SESSION['subcategory'];
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
		            
		        </div>
		    </div>
			<div class="col-md-12 col-12 head-desk">
				<h6>Welcome </h6>

				<div class="row">
					
				</div>


			</div>


</section>

<section class="kids-img container-fluid">
    <img src="../img/banner.png">
</section> 


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
