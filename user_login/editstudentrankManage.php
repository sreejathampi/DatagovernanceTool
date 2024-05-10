<!-- Header area Start -->

<?php 
ob_start();
include("includes/database.class.php");
include("includes/functions.php");
include("includes/includefunctions.php");
include 'headerarea.php'; ?>

<!-- Header area End -->

<!-- Top Area Start-->

<?php include 'topareaM.php'; ?>

<!-- Top Area End -->

<!-- menu area start -->

<?php // include 'menuarea.php'; ?>

<!-- menu area end -->

<!-- content area Start -->
<?php 
$transkey=base64_decode($_GET['transaction']);
$adminhash=md5(uniqid(rand(5), true));
$_SESSION['hashco']=$adminhash;
							$db1 = new Database();
							$stmt=$db1->query("SELECT `id`, `title`, `description`, `photo` FROM `services` where `id`='$transkey' ORDER BY `id` DESC");
							$rows = $db1->resultset();
							foreach ($rows as $key => $value) 
							{
								$transid=$value['id'];
								$title01 = $value['title'];
								$description=$value['description'];
								$photos=$value['photo'];
							}												
	?>

<div class="col-md-10 col-12 dash-text">
				<h4>Slider Manage <span style="font-size: 13px;
    color: #ff9900;
    font-weight: 500;
    font-family: sans-serif;">(* The information changes made here, will reflect in all references regarding this. )</span></h4>
				<div class="row">
						<div class="col-md-7 col-12 inc-txt ">
										
										<form name="name" id="id" action="editServiceupdate.php" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label> Title</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="text" placeholder=" Title Parts " class="css-1cfwmmf"  name="stitle1" value="<?php echo $title01; ?>" style="width: 100%;" required id="stitle1" >
													<input type="hidden" name="tocken" value="<?php echo $adminhash;?>">
													<input type="hidden" name="slid" id="slid" value="<?php echo $transid; ?>">
												</div>
												</div>	
											</div></div>
										<div class="row">

											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-2 col-12">
													<label> Description</label>
												</div>
											<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
												<div class="col-md-10 col-12">
													<!-- <input type="text" placeholder=" Title Parts " class="css-1cfwmmf"  name="stitle2" style="width: 100%;" required id="stitle2" > -->
											<textarea class="css-1cfwmmf" name="descrs" id="descrs" rows="10" cols="80" required onkeyup="funct(this.value);"><?php echo $description; ?></textarea>
											                <script>
											                      //  CKEDITOR.replace( 'editor1' );
											                      CKEDITOR.replace( 'descrs', {
											        customConfig: 'ckeditor/ckeditor_settings/config.js'
											} );
											                </script>
												</div>
												</div>
											</div>

										</div>

										<div class="row">
											<div class="col-md-12 col-12 ">
												<div class="row form">
												<div class="col-md-3 col-12">
													<label>photos</label>
												</div>
												<div class="col-md-9 col-12">
													<img src="assets/gallery/<?php echo $photos; ?>" width="100px;" height="100px;">
													<input type="file" id="photo" name="photo">
												</div>
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
	
	function funct(balances)
	{
		$(document).ready(function(){

			var tot=$('#balamt').val();
			var bal=tot-balances;  
			$('#balancesd').val(bal);

		});
	}

	$("#reciveinp").on("keypress", function(e){
    var currentValue = String.fromCharCode(e.which);
    var finalValue = $(this).val() + currentValue;
    if(finalValue > <?php echo $datasD;?>){
        e.preventDefault();
    }
});
</script>
<script type="text/javascript">
funct(<?php echo $rowsData[0]['paymentamount']?>);
</script>

