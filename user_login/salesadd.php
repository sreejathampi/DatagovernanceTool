<?php
ob_start();
session_start();
include("../includes/database.class.php");
include("../includes/functions.php");
include("../includes/includefunctions.php");
include 'headerarea.php'; ?>

<?php $shopid=$_SESSION['useridsA'];?> 
<!-- Top Area Start-->

<?php include 'topareaM.php'; ?>

<!-- Top Area End -->

<!-- menu area start -->

<?php // include 'menuarea.php'; ?>

<!-- menu area end -->

<!-- content area Start -->


<div class="col-md-10 col-12 dash-text">
				<h4>Purchase Details <span style="font-size: 13px;color: #ff9900;font-weight: 500;font-family: sans-serif;">
				(* The information changes made here will reflect in all references regarding this. )</span></h4>
				<div class="row">
						<div class="col-md-7 col-12 inc-txt ">

									<form name="name" id="id" action="salesManagement.php" method="post" enctype="multipart/form-data">

                   <!--    <div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Select Shop </label>
												</div>

												<div class="col-md-8 col-12">
												<select type="text" placeholder="  " class="css-1cfwmmf"  name="shop" id='sid'style="width: 100%;" required id="stitle1" onchange="dest()">
													<option>Select</option>
														<option value="1">Tunstall</option>
														<option value="2">Fenton</option>
														<option value="3">Hanley</option>
														<option value="5">Longton </option>
														<option value="4">Stoke</option>
													</select>
													
												</div>
												</div>	
											</div></div>  -->


											 <div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Select Customer </label>
												</div>

												<div class="col-md-8 col-12">
												<select type="text" placeholder="  " class="css-1cfwmmf"  name="customerid" id="customerid" style="width: 100%;" required id="stitle1" onchange="customerdata()">

													   <?php  //SELECT * FROM `customer_excel` WHERE `street` LIKE '%st4%'
                                          $db3= new  Database();
                                          $stmt=$db3->query("SELECT * FROM `customer_excel2`");    
                                         $rows3 = $db3->resultset();
                                          foreach($rows3 as $result3)
                                          {
                                               $age=$result3['id'];
                                           ?>
													
				<option value="<?php echo $result3['number'];?>"><?php echo $result3['firstname'];?> <?php echo $result3['dob'];}?></option>
														
													</select>
													
												</div>
												</div>	
											</div></div> 
<input type="hidden" name="shop" value="<?php echo $shopid;?>">

										 
											 

											

											<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Select Drug</label>
												</div>

												<div class="col-md-8 col-12">
												<select name="drug" id='drug'required  onchange="dest()">
													<option>select</option>
													     <?php  $db1  =   new Database();

                                     $stmt=$db1->query("SELECT * FROM `drug_excel` WHERE `Stoke`='Y'");    

                                       $rows = $db1->resultset();


                                      foreach($rows as $result)

                                             {?>
													                    <option value="<?php echo $result['id'];?>"><?php echo $result['DrugName'];?></option>
													                  <?php } ?>
													
												</select>
													
												</div>
												</div>	
											</div></div>
											
                             <div class="row">
											<div class="col-md-12 col-12" id="desta">
												<div class="row form">
													<div class="col-md-4 col-12">
													
												</div>

										
												</div>	
											</div></div>
                        
											
											<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Quantity</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="number" placeholder="  " class="css-1cfwmmf"  name="quantity" style="width: 100%;" required id="stitle1" >
													
												</div>
												</div>	
											</div></div>



										
										 <input type="hidden" name="main_key" value="category">
                                                 <input type="hidden" name="brand" value="">
                 <input type="hidden" name="model" value="">
                 

										<div class="form-but">
										  <button class="css-m6iahg "  type="submit" name="btn" style="width: 256px;">Purchase</button>
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->


<?php
   echo "<script>document.writeln(t);</script>";
?>



<script>
function dest()
{
    
	 $(document).ready(function(){
		var id=$('#drug').val();
		//var ids=$('#category_id').val();
		
	  //alert(id);
		$.post("dest.php", {id:id})
		  .done(function( respo ) {
		  // alert(respo);
		  $("#desta").html(respo);
	  
		  });
  
  });
	
}

</script>


<script>
function customerdata()
{
    
	 $(document).ready(function(){
		var id=$('#customerid').val();
		//var ids=$('#category_id').val();
		
	 // alert(id);
		$.post("custdata.php", {id:id})
		  .done(function( respo ) {
		//  alert(respo);
		  $("#desta2").html(respo);
	  
		  });
  
  });
	
}

</script>



<script type="text/javascript">
	function validateDOB(bday) {
  var dateString = bday.value;
  var parts = dateString.split("/"); // not testing if the format is correct here
  var now = new Date();
  var birthday = new Date(now.getFullYear(),parts[1]-1,parts[0]);
  var age = now.getFullYear()-parts[2];
  if (now<birthday) age--;
  if (age<18) {
    alert("You must be over 18 to register");
    return false
  }
  // other validation
  return true;
}
</script>








