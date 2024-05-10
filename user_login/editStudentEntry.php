<!-- Header area Start -->
<?php
ob_start();
include("../includes/database.class.php");
include("../includes/functions.php");
include("../includes/includefunctions.php");
include 'headerarea.php'; ?>

<!-- Header area End -->

<!-- Top Area Start-->

<?php include 'topareaM.php'; ?>

<!-- Top Area End -->

<!-- menu area start -->



<!-- menu area end -->

<!-- content area Start -->
<?php
$liibid=$_SESSION['libId'];
$adminhash=md5(uniqid(rand(5), true));
$_SESSION['hashco']=$adminhash;
$transkey=base64_decode($_GET['transaction']);
							$db1 = new Database();
							$stmt=$db1->query("SELECT `id`, `district`, `balasabha`, `fname`, `phone`, `email`, `interest`, `age`, `gender`, `username`, `password`, `stid`, `sdate`, `status` FROM `students` where `id`='$transkey' ORDER BY `id` DESC");
							$rows = $db1->resultset();
							foreach ($rows as $key => $value)
							{
								$transid=$value['id'];
								$dist = $value['district'];
								$bal=$value['balasabha'];
								$fname=$value['fname'];
								$phone=$value['phone'];
								$email=$value['email'];
								$address=$value['interest'];
								$age=$value['age'];
								$gender=$value['gender'];
								$username=$value['username'];
								$password=$value['password'];
								$stid=$value['stid'];
								$sdate=$value['sdate'];
								$sstatus=$value['status'];
							 }
?>
<div class="col-md-10 col-10 dash-text">
				<h4>Member Details</h4>
				<div class="row">
						<div class="col-md-7 col-12 inc-txt ">

										<form name="name" id="id" action="editStudentUpdate.php" method="post" enctype="multipart/form-data">

										<div class="row">
									<div class="col-md-6 col-12 ">
											<div class="row form">
												<div class="col-md-2 col-12 ">
												<label>District</label>
											</div>
											<div class="col-md-10 col-12 ">
												<select id="district" name="district" required="required">
													<option value="">Select District</option>
													<?php
														$db1 = new Database();
														$stmt=$db1->query("SELECT * FROM `district`");
														$rows = $db1->resultset();
														foreach ($rows as $key => $value) {
															$ids=$value['id'];
													?>
														<option value="<?php echo $ids;?>" <?php if($dist==$ids) {?>selected<?php } ?>><?php echo $value['title'];?></option>
														<?php
														} $db1->dbclose();
														?>
												</select>
											</div>
											</div>
										</div>
										<div class="col-md-6 col-12 ">
											<div class="row form">
												<div class="col-md-2 col-12 ">
												<label>Balasabha</label>
											</div>
											<div class="col-md-10 col-12 ">
												<select id="blsid" name="blsid" required="required">
													<option value="">Select balasabha</option>
										<?php
						$db2 = new Database();
						$stmt=$db2->query("SELECT * FROM `library` WHERE `id`='$liibid'");
						$rows1 = $db2->resultset();
						foreach ($rows1 as $key => $values)
						{
						$block=$values['block'];					    
						} $db2->dbclose();										
										
										$db1 = new Database();
										$stmt=$db1->query("SELECT * FROM `balasabha` WHERE `blckid`='$block'");
										$rows = $db1->resultset();
										foreach ($rows as $key => $value) {
										$ids1=$value['id'];
										?>
														<option value="<?php echo $ids;?>" <?php if($bal==$ids1) {?> selected <?php }?>><?php echo $value['bsname'];?></option>
														<?php
														} $db1->dbclose();
														?>
												</select>
											</div>
											</div>

										</div>
										</div>
										<div class="row">
											<div class="col-md-6 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Name</label>
												</div>
												<div class="col-md-8 col-12">
													<input type="text" placeholder="Full Name" class="css-1cfwmmf" value="<?php echo $fname; ?>" name="cname" pattern="[A-Za-z ]+" style="width: 100%;" required id="cname">
													<input type="hidden" name="tocken" value="<?php echo $adminhash;?>">
													<input type="hidden" name="memid" id="memid" value="<?php echo $transkey; ?>" >
												</div>
												</div>
											</div>

											<div class="col-md-6 col-12 ">
												<div class="row form">
												<div class="col-md-3 col-12">
													<label>Phone</label>
												</div>
												<div class="col-md-9 col-12">
													<input type="tel" id="lphone" name="lphone" pattern="[0-9]{10}" value="<?php echo $phone; ?>" placeholder="Contact no" required>
												</div>
												</div>

											</div>

										</div>
										<div class="row">
										<div class="col-md-6 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Email</label>
												</div>
												<div class="col-md-8 col-12">
													<input type="text" placeholder="User Email" class="css-1cfwmmf" name="lmail" id="lmail" value="<?php echo $email; ?>" style="width: 100%;" required>
													<div id="uname_response" ></div>
												</div>
												</div>

											</div>

											<div class="col-md-6 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Interested Area</label>
												</div>
												<div class="col-md-8 col-12">
													<textarea class="css-1cfwmmf" id="address" name="address" required><?php echo $address; ?></textarea>
												</div>
												</div>

											</div>

										</div>
										<div class="row">
										<div class="col-md-6 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Age</label>
												</div>
												<div class="col-md-8 col-12">
													<input type="text" placeholder="User Age" class="css-1cfwmmf" name="age" id="age" value="<?php echo $age; ?>"  style="width: 100%;" required>

												</div>
												</div>

											</div>

											<div class="col-md-6 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Gender</label>
												</div>
												<div class="col-md-8 col-12">
										<select id="gender" name="gender" class="css-1cfwmmf" style="width: 100%;" required>
										<option value="<?php echo $gender; ?>"<?php if($gender=="Male") {?> selected  <?php }?>>Male</option>
										<option value="<?php echo $gender; ?>"<?php if($gender=="Female") {?> selected  <?php }?>>Female</option>
												</select>
												</div>
												</div>

											</div>

										</div>
										<div class="row">
											<div class="col-md-6 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Username</label>
												</div>
												<div class="col-md-8 col-12">
													<input type="text" placeholder="Username" class="css-1cfwmmf" value="<?php echo $username; ?>" name="user" id="user" style="width: 100%;" readonly>
													<div id="uname_response" ></div>
												</div>
												</div>

											</div>
											<div class="col-md-6 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Password</label>
												</div>
												<div class="col-md-8 col-12">
												<input type="password" placeholder="Login Password" class="css-1cfwmmf" value="<?php echo $password; ?>" name="lpassword" style="width: 100%;" required id="lpassword">
												</div>
												</div>

											</div>

										</div>
										<div class="row">
										<div class="row form">
										<div class="col-md-4 col-12">
										<label>Active Status</label>
												</div>
												<div class="col-md-8 col-12">
                        <select id="status" name="status" required="required">
													<option value="1">Active</option>
													<option value="2">Offline</option>
													</select>
						</div>
                    </div>
										</div>
										<div class="form-but">
										  <button class="css-m6iahg " style="width: 256px;">Update</button>


										</div>

								</form>
						</div>
					</div>
				<div class="">
					<!-- <h6>Profit before taxes</h6> -->

				</div>





			</div>
		</div>
	</section>



<!-- content area end -->

<!-- footer area Start -->

<?php include 'footerarea.php'; ?>

<!-- footer area End -->
<script type="text/javascript">

/*	function funct(balances)
	{
		$(document).ready(function(){

			var tot=$('#totalamt').val();
			var bal=tot-balances;
			$('#balancesd').val(bal);

		});
	}   */
</script>
<script>
    $(document).ready(function(){

   // $(".nav-item a").removeClass('active');

   //$(".dropdown-menu li").removeClass('active');

   $('#custpage').addClass('active');

   //$('#packagesd').addClass('active');

   });
 </script>
