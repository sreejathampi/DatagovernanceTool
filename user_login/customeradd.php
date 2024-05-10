<?php
ob_start();
session_start();
include("../includes/database.class.php");
include("../includes/functions.php");
include("../includes/includefunctions.php");
include 'headerarea.php'; ?>


<!-- Top Area Start-->

<?php include 'topareaM.php'; ?>

<!-- Top Area End -->

<!-- menu area start -->

<?php // include 'menuarea.php'; ?>

<!-- menu area end -->

<!-- content area Start -->


<div class="col-md-10 col-12 dash-text">
				<h4>Customer Data <span style="font-size: 13px;color: #ff9900;font-weight: 500;font-family: sans-serif;">
				(* The information changes made here will reflect in all references regarding this. )</span></h4>
				<div class="row">
						<div class="col-md-7 col-12 inc-txt ">

									<form name="name" id="id" action="customerManagement.php" method="post" enctype="multipart/form-data">

                     <div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Select Medicine </label>
												</div>

											<div class="col-md-8 col-12">
												<select type="text" placeholder="  " class="css-1cfwmmf"  name="shop" style="width: 100%;" required id="stitle1">
													 <?php  //SELECT * FROM `customer_excel` WHERE `street` LIKE '%st4%'
                                          $db3= new  Database();
                                          $stmt=$db3->query("SELECT * FROM `drug_excel` WHERE `id_check`='N'");    
                                         $rows3 = $db3->resultset();
                                          foreach($rows3 as $result3)
                                          {
                                               $age=$result3['id'];
                                           ?>
													
				<option value="<?php echo $result3['id'];?>"> <?php echo $result3['DrugName'];}?></option>
													</select>
													
												</div>
												</div>	
											</div></div> 


										<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label> Customer First Name</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="text" placeholder=" " class="css-1cfwmmf"  name="firstname" style="width: 100%;" required id="stitle1" >
													
												</div>
												</div>	
											</div></div>
											<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Customer Last Name</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="text" placeholder="  " class="css-1cfwmmf"  name="lastname" style="width: 100%;" required id="stitle1" >
													
												</div>
												</div>	
											</div></div>

											<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>House number</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="text" placeholder="  " class="css-1cfwmmf"  name="housenumber" style="width: 100%;" required id="stitle1" >
													
												</div>
												</div>	
											</div></div>

											<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Street Name</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="text" placeholder="  " class="css-1cfwmmf"  name="street" style="width: 100%;" required id="stitle1" >
													
												</div>
												</div>	
											</div></div>
											<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Post Code</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="text" placeholder="  " class="css-1cfwmmf"  name="postcode" style="width: 100%;" required id="stitle1" >
													
												</div>
												</div>	
											</div></div>

                      <div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>City</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="text" placeholder="  " class="css-1cfwmmf"  name="city" style="width: 100%;" required id="stitle1" >
													
												</div>
												</div>	
											</div></div>
											<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>State</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="text" placeholder="  " class="css-1cfwmmf"  name="state" style="width: 100%;" required id="stitle1" >
													
												</div>
												</div>	
											</div></div>
											<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Country</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="text" placeholder="" class="css-1cfwmmf"  name="country" style="width: 100%;" required id="stitle1" >
													
												</div>
												</div>	
											</div></div>



											<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label> Date of Birth</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="date" placeholder=" Title Parts " class="css-1cfwmmf"  name="dateofbirth" style="width: 100%;" required id="stitle1" >
													<input type="hidden" name="tocken" value="<?php echo $adminhash;?>">
												</div>
												</div>	
											</div></div>
										 <input type="hidden" name="main_key" value="category">
                                                 <input type="hidden" name="brand" value="">
                 <input type="hidden" name="model" value="">
                 

										<div class="form-but">
										  <button class="css-m6iahg "  type="submit" name="btn" style="width: 256px;">Add</button>
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
<script>
function subcatdata(ids)
{
$(document).ready(function(){
	$.post( "getproducts.php", { id: ids })
  .done(function( data ) {
    //alert(data);
	$('#block').html(data);
  });
  });
}
</script>
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


<script>
function subcatdata(ids)
{
$(document).ready(function(){
	var csid=$('#cat_id').val();
	$.post( "getstudent.php", { id: ids , csid: csid})
  .done(function( data ) {
   // alert(data);
	$('#subcatData').html(data);
  });
  });
}
</script>


<script type="text/javascript">
funct(<?php echo $rowsData[0]['paymentamount']?>);
</script>


<script type="text/javascript">
  
 function percentage(){
   
  var input1 = document.getElementById("courseid").value;
 // var input1='1,125'
input1=input1.replace(/\,/g,'')
input1=Number(input1)
 
//alert(input1);
  var input2 = document.getElementById("paid").value;
//alert(input2);
   var input3 =input1-input2;
  // alert(input3);
   
  document.getElementById("pending").value=input3;
  
}
</script>
<script>
function myFunction() {
  var x = document.getElementById("s_id").value;
  
 //var t = document.getElementById("demo").innerHTML = x;
 
}

  

</script>


<?php
   echo "<script>document.writeln(t);</script>";
?>



<script>
function dest()
{
    
	 $(document).ready(function(){
		var id=$('#s_id').val();
		//var ids=$('#category_id').val();
		
	  // alert(id);
		$.post("dest.php", {id:id})
		  .done(function( respo ) {
		  // alert(respo);
		  $("#desta").html(respo);
	  
		  });
  
  });
	
}

</script>









