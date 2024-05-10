	
<?php $dbnew= new Database(); 
//echo "select * from subuser_permission where `department_id`='$dpid'";

                            $stmt=$dbnew->query("select * from subuser_permission where `department_id`='$dpid'");    

                            $rows1 = $dbnew->resultset();

                             foreach($rows1 as $result)

                                 {
                                     $cid=$result['department_id']; 
                                     $pdata=$result['patient_data'];
                                     $hdata=$result['healthmonitoring'];
                                     $hdata1=$result['hippa_data'];
                                     $compliancedata=$result['hippa_copliance'];
                                     $operational=$result['operational'];
                                   }


                                   ?>

	<section class="container-fluid dash-head dash-menu">
		<div class="row">
			<div class="navbar navbar-expand-md col-md-3 col-lg-2 col-12 logo side-menu">
				 <a class="navbar-brand" href="index.php"></a>
				 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            	    <i class="fa fa-bars" aria-hidden="true"></i>
            	</button>
				<nav class="menu-nav">
				<div class="collapse navbar-collapse" id="navbarNav">
				<ul>
					<li class="nav-item" >
						<a class="nav-link" href="desk.php" id="mydesk">
							<span><i class="fa fa-home"></i></span>
							<span>  My Desk</span>
						</a>
					</li>
			   <li class="nav-header" style="background: #0a940cdb;color: white;text-align: center;">Main Menu List  </li>
			   
                    <li  class="nav-item">
                    	<?php if ($pdata==1) {?>

                    		<a class="nav-link " href="medicinelist.php" id="medicine">

							<span><i class="fas fa-list"></i></span>
							<span>Patient Data</span>
						   </a> <?php  } else { }?>
						
					</li>
					 

					 <li  class="nav-item">
					 	 <?php if ($hdata==1) {?>
					 	 	<a class="nav-link " href="Healthmonitoringdata.php" id="salelist">

							<span><i class="fas fa-user-graduate"></i></span>
							<span>Health Monitoring Data  </span>
						</a> <?php } else { }?>
						
					</li>

                    <li  class="nav-item">
					 	 <?php if ($hdata1==1) {?>
					 	 	<a class="nav-link " href="hippa_regulationdata.php" id="salelist1">

							<span><i class="fas fa-user-graduate"></i></span>
							<span>HIPPA Regulation Data  </span>
						</a> <?php } else { }?>
						
					</li>
					<li  class="nav-item">
					 	 <?php if ($compliancedata==1) {?>
					 	 	<a class="nav-link " href="hippa_compliance.php" id="salelist2">

							<span><i class="fas fa-user-graduate"></i></span>
							<span>HIPPA Compliance Data  </span>
						</a> <?php } else { }?>
						
					</li>

                    <li  class="nav-item">
					 	 <?php if ($operational==1) {?>
					 	 	<a class="nav-link " href="operationaldata.php" id="salelist3">

							<span><i class="fas fa-user-graduate"></i></span>
							<span>Operational Data  </span>
						</a> <?php } else { }?>
						
					</li>

					 
					
				
                    
					
				
          
					 <li class="nav-header" style="background: #0a940cdb;color: white;text-align: center;">Settings </li>
					<li  class="nav-item">
						<a class="nav-link " href="signOut.php" >
							<span><i class="fas fa-sign-out-alt"></i></span>
							<span>  Sign Me Out</span>
						</a>
					</li>
				</ul>
				</div>
			</nav>
			</div>

			<div class="col-md-10 col-12  ">
				<div class="row">
					<div class="col-md-12 col-12 proft ">
						<div class="row">
						<div class="col-md-4 col-12">
					   <!-- <div class="profit">
						<h6>Total Profit</h6>
						<p>₹&nbsp;/-</p>

					   </div> -->
					   </div>
					   <div class="col-md-8 col-12 date-from">
					   	<!-- <form action="transactions.php" method="post" name="frm1"> -->
					   	<div class="row">
					   		<div class="col-md-12 col-12">
					   			<div class="row">
					   				<!-- <div class="col-md-4 col-6">
					   					<label>From</label>
					   					<input type="date" id="" name="from">
					   				</div> -->
					   				<!-- <div class="col-md-3 col-12">

					   				</div> -->
					   				<div class="col-md-4 col-12 date-find"></div>
					   				<div class="col-md-4 col-12 date-find">


					   					
					   					<div id="pklsts" style="display:none;">
										<a href="packagelist.php"><input type="submit" name="subsearch" value="View"></a></div>

										 <div id="item" style="display:none;">
										<a href="productitemlist.php"><input type="submit" name="subsearch" value="View"></a></div>
 
										<div id="libr" style="display:none;">
										<a href="librarylist.php"><input type="submit" name="subsearch" value="View"></a></div>

										<div id="bklst" style="display:none;">
										<a href="booklist.php"><input type="submit" name="subsearch" value="View"></a></div>

										<div id="salelist" style="display:none;">
										<a href="sales_details.php"><input type="submit" name="subsearch" value="View"></a></div>

					   				</div>
					   				<div class="col-md-4 col-12 date-find">

					   				<div id="ctgry" style="display:none;">
					   					<a href="productcategoryadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div>
									   <div id="Subcategory" style="display:none;">
					   					<a href="productsubcategoryadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div>
					   				<div id="productlist2" style="display:none;">
					   					<a href="productlistadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div> 
					   				<div id="itemlist2" style="display:none;">
					   					<a href="productitemadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div> 
					   				
									   <div id="nonregadd" style="display:none;">
					   					<a href="customeradd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div>
									   
					   				<div id="mymedicinelist" style="display:none;">
					   					<a href="medicineadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div>
									   <div id="stlst1" style="display:none;">
					   					<a href="studentEntry.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div>
					   				
					   				
					   				
					   				<div id="servicesadd" style="display:none;">
					   					<a href="serviceadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div>
					   				
					   				
					   				<div id="servcategoryadd" style="display:none;">
					   					<a href="servicecategoryadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div>
					   				
					   				<div id="subcatfile" style="display:none;">
					   					<a href="productsubcategoryfileadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div>
					   				
					   				<div id="itemfile" style="display:none;">
					   					<a href="productitemfileadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div>
					   				
					   				<div id="catfile" style="display:none;">
					   					<a href="productcategoryfileadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div>
					   				<div id="sercatimageadd" style="display:none;">
					   					<a href="servicecategoryfileadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div>
					   			<!-- 	<div id="salesadd" style="display:none;">
					   					<a href="salesadd.php"><input type="submit" name="subsearch" value="Add"></a>
					   				</div> -->
					   				</div>
					   			</div>

					   		</div>

					   	</div>
					  

					   </div>
					   </div>
					 

					</div>

				</div>

<script>
    $(document).ready(function(){

   $(".nav-item a").removeClass('active');

   //$(".dropdown-menu li").removeClass('active');

   $('#mydesk').addClass('active');

   //$('#packagesd').addClass('active');

   });
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
 <script>
 $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');

  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });
  return false;
});
 </script>