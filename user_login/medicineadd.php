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
				<h4>Drug Data <span style="font-size: 13px;color: #ff9900;font-weight: 500;font-family: sans-serif;">
				(* The information changes made here will reflect in all references regarding this. )</span></h4>
				<div class="row">
						<div class="col-md-7 col-12 inc-txt ">

									<form name="name" id="id" action="drugManagement.php" method="post" enctype="multipart/form-data">

                    


										<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label> Drug Name</label>
												</div>

												<div class="col-md-8 col-12">

													<select type="text" placeholder="  " class="css-1cfwmmf"  name="drugname" id="bday" style="width: 100%;" required id="stitle1">
													   <?php 
                                          $db3= new  Database();
                                          $stmt=$db3->query("SELECT * FROM `drug_excel`");    
                                         $rows3 = $db3->resultset();
                                          foreach($rows3 as $result3)
                                          {
                                               $age=$result3['id'];
                                           ?>
													
				<option value="<?php echo $result3['id'];?>"><?php echo $result3['dob'];?> <?php echo $result3['DrugName'];}?></option>
														
													</select>
													<!-- <input type="text" placeholder=" " class="css-1cfwmmf"  name="drugname" style="width: 100%;" required id="stitle1" > -->
													
												</div>
												</div>	
											</div></div>

											<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Total Stock </label>
												</div>

												<div class="col-md-8 col-12">
													<input type="number" placeholder="  " class="css-1cfwmmf"  name="stock" style="width: 100%;" required id="stitle1" >
													
												</div>
												</div>	
											</div></div>

										
                       <div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Price (Including GST)  </label>
												</div>

												<div class="col-md-8 col-12">
													<input type="number" placeholder="  " class="css-1cfwmmf"  name="price" style="width: 100%;" required id="stitle1" >
													
												</div>
												</div>	
											</div></div> 

											
											



											<div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label> Expiry Date</label>
												</div>

												<div class="col-md-8 col-12">
													<input type="date" placeholder=" Title Parts " class="css-1cfwmmf"  name="expiry" style="width: 100%;" required id="stitle1" >
												
												</div>
												</div>	
											</div></div>
										

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









