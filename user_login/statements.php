<!-- Header area Start -->

<?php 

ob_start();
  include("includes/database.class.php");

include("includes/functions.php");

include("includes/includefunctions.php");
include 'headerarea.php'; ?>

<!-- Header area End -->

<!-- Top Area Start-->

<?php include 'toparea.php'; ?>

<!-- Top Area End -->

<!-- menu area start -->



<!-- menu area end -->

<!-- content area Start -->
<?php 
$adminhash=md5(uniqid(rand(5), true));
$_SESSION['hashco']=$adminhash;


?>
<div class="col-md-12 col-12 dash-text dash-form">
				<h4>Statements</h4>
				
					   			<div class="row" style="margin-bottom: 30px;">
					   				<div class="col-md-3 col-12">
					   					<label>From</label>
					   					<input type="date" id="" name="from">
					   				</div>
					   				<!-- <div class="col-md-3 col-12">
					   					
					   				</div> -->
					   				<div class="col-md-3 col-12">
					   					<label>To</label>
					   					<input type="date" id="" name="to">
					   				</div>
					   				<div class="col-md-3 col-12">
					   					<select id="category" name="category" required="required" >
														<option value=""> Select a Category</option>
														
			  												<option value="1">Income</option>
			  												<option value="2">Expense</option>
			  												
			  												
			  										</select>		
			  										<input type="hidden" name="tocken" value="<?php echo $adminhash;?>">		 
												
												</div>
					   				
					   				<div class="col-md-3 col-12 sub-button">
					   					<button type="submit" form="form1" value="Submit">Search</button>
					   				</div>
					   				</div>
					   				
					   				
					   			
					
				<div class="row">
			<div class="card" style="width: 95%;">
			  
			  <div class="card-body">
			    
			      <table id="myTable" class="table-bordered display">
			        <thead>
			          <tr>
			          	<th class="text-center">Date</th>
			            <th class="text-center">Description</th>
			            <th class="text-center">Category</th>
			            <th class="text-center">Amount</th>
			            <th class="text-center">Add / Remove</th>
			          </tr>
			        </thead>
			        <tbody>

			        	<?php 
							$db1 	= 	new Database();
							$stmt=$db1->query("SELECT v1.`id` as paymentid,v1.`amount` as paymentamount,v1.`type` as paymenttype,v1.`date` as paymentdate, v2.`total` as total, v2.`client` as client, v2. `date` as date, v2.`purpose` as purpose, v2.`type` as type, v2.`category` as category, v2.`id` as id 
FROM payments v1 INNER JOIN income v2 ON v1.transid=v2.id ORDER BY v1.`id` DESC");
							$rows = $db1->resultset();
							//echo "<pre>";
							//print_r($rows);
							foreach ($rows as $key => $value) 
							{
								$transid=$value['id'];
								$usridd=$value['client'];
								$db2 = new Database();
								$statements= $db2->query("SELECT SUM(`amount`) as total FROM `payments` WHERE `transid`='$transid'");
								$rowsD = $db2->resultset();
								$totalamt = $rowsD[0]['total'];
								$total = $value['total'];
								$category_id=$value['category'];
								$type=$value['type'];
								if($type == "income")
								{
									$db2 	= 	new Database();
									$stmt=$db2->query("SELECT * FROM `incomecategory` where `id`='$category_id'");
								    $rowsD = $db2->resultset();
								    $category = $rowsD[0]['category'];
								}
								if($type == "expense")
								{
									$db2 	= 	new Database();
									$stmt=$db2->query("SELECT * FROM `expensecategory` where `id`='$category_id'");
								    $rowsD = $db2->resultset();
								    $category = $rowsD[0]['category'];
								}
															
							?>


			          <tr>
			            <td  ><?php echo $value['date'];?></td>
<?php 
									$db5 = new Database();
									$stmt=$db5->query("SELECT * FROM `ig_user` where `id`='$usridd'");
								    $rowssD = $db5->resultset();
								    $usrname = $rowssD[0]['name'];
?>
			            <td ><?php echo $usrname;?>&nbsp; (&nbsp;  <?php echo $value['purpose'];?>&nbsp;)</td>
			            <td ><?php echo $category;?></td>
			            <td >
			            <?php 
			            	if($type == "income")
							{
			            ?>
			            	<p style="font-family: SourceSansPro-Bold;font-size: 16px;color: #1da58a;"><i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;&nbsp;₹<?php echo $value['paymentamount']; ?></p>
			            <?php }?>
			             <?php 
			            	if($type == "expense")
							{
			            ?>
			            	<p style="font-family: SourceSansPro-Bold;font-size: 16px;color: #f53e3e;"><i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;&nbsp;₹<?php echo $value['paymentamount']; ?></p>
			            <?php }?>
			            </td>
			            <td>
			             <?php 
			            	if($type == "income")
							{
			            ?>
			              <a href="editFundsincome.php?transaction=<?php echo base64_encode($value['id']);?>&payment=<?php echo base64_encode($value['paymentid']);?>"><button type="button" class="btn btn-success btn-rounded btn-sm my-0"><i class="fa fa-pencil-square" aria-hidden="true"></i></button></a>
			            <?php }?>
			             <?php 
			            	if($type == "expense")
							{
			            ?>
			             <a href="editFundsexpense.php?transaction=<?php echo base64_encode($value['id']);?>"><button type="button" class="btn btn-success btn-rounded btn-sm my-0"><i class="fa fa-pencil-square" aria-hidden="true"></i></button></a>
			            <?php }?>
			              <span class="table-remove">
			                  <button type="button"class="btn btn-danger btn-rounded btn-sm my-0 deletebtn" id="buttonids_<?php echo $value['paymentid'];?>" dataid="<?php echo $value['paymentid'];?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button></span>
			               <?php 
			               	if($total>$totalamt)
			               	{
			               ?>
			               <span class="table-remove">
			                  <a href="addmoreFunds.php?transaction=<?php echo base64_encode($value['id']);?>"><button type="button"class="btn btn-success btn-rounded btn-sm my-0"><i class="fa fa-plus-square" aria-hidden="true"></i></i></button></a></span>
			                <?php }?>
			            </td>

			          </tr>

			          <?php }?>

			         
			        </tbody>
			      </table>
			    
			  </div>
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

			var tot=$('#totalamt').val();
			var bal=tot-balances;  
			$('#balancesd').val(bal);

		});
	}
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$('.deletebtn').click(function(){
  var datas=$(this).attr('dataid');
   swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Entry!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("The Entry Has Deen Deleted!", {
      icon: "success",
    }).then(function() {
    window.location = "deletetransaction.php?trankey="+datas;
});
  } else {
    swal("Change In Mind, File Saved For Later Operations!");
  }
});
  
});
</script>
<script>
    $(document).ready(function(){ 

   // $(".nav-item a").removeClass('active');

   //$(".dropdown-menu li").removeClass('active');

   $('#statementpage').addClass('active');

   //$('#packagesd').addClass('active');

   });
 </script>