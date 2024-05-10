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

                                      <?php $drugid=$_GET['id'];
                                      $db1  =   new Database();

                                   $stmt=$db1->query("SELECT * FROM `drug_detail` where `id`='$drugid'");    

                                     $rows = $db1->resultset();
  
                                  foreach($rows as $result2)

                                                {
                                                }

                                                ?>

                                 <label style="color: green;">
                                 	Medicine
                                 </label>  <input type="text"   name="" value="<?php echo $result2['Drug_name'];?>" readonly>
                                  <label  style="color: green;">Condition</label> <input type="text" name="" value="<?php echo $result2['medico_condition'];?>">
                                   <label style="color:green;">ID Check </label><input type="text" name="" value="<?php echo $result2['id_check'];?>">

<input type="hidden" name="drug" value="<?php echo $drugid;?>">
											 <div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-4 col-12">
													<label>Select Customer </label>
												</div>

											
                               <div class="col-md-8 col-12">
												<select name="customerid" id='customerid' required  onchange="dest()">
													<option>select</option>
													<option value="0">Guest</option> 
													     <?php  $db1  =   new Database();

                                     $stmt=$db1->query("SELECT * FROM `customer_excel2`");    

                                       $rows = $db1->resultset();


                                      foreach($rows as $result3)

                                             {?>
													      <option value="<?php echo $result3['number'];?>"><?php echo $result3['firstname'];?> <?php echo $result3['dob'];?></option>
													                  <?php } ?>
													
												</select>
													
												</div>
												</div>	
											</div></div>


                                      <input type="hidden" name="shop" value="<?php echo $shopid;?>">

										 <div class="row">
											<div class="col-md-12 col-12">
												<div class="row form">
													<div class="col-md-12 col-12" id='desta'>
													<label> </label>
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



										

										<div class="form-but">
										  <button class="css-m6iahg "  type="submit" name="btn" style="width: 256px;">Add to check out </button>
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
		var id=$('#customerid').val();
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








