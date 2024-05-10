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
$transkey=base64_decode($_GET['transaction']);
$adminhash=md5(uniqid(rand(5), true));
$_SESSION['hashco']=$adminhash;


?>
<div class="col-md-10 col-12 dash-text">
				<h4>Member details</h4>
				<div class="row">
			<div class="card" style="width: 95%;">

			  <div class="card-body">

			      <table id="myTable" class="table-bordered display">
			        <!-- <thead> -->

			            <!-- <th class="text-center">Add / Remove</th> -->

			        <!-- </thead>
			        <tbody> -->

			        	<?php
							$db1 = new Database();
							$stmt=$db1->query("SELECT `id`, `name`, `password`, `email`, `designation`, `phone`, `address`, `user_type`, `udate`, `status` FROM `ig_user` where `id`='$transkey' ORDER BY `id` DESC");
							$rows = $db1->resultset();
							//echo "<pre>";
							//print_r($rows);
							foreach ($rows as $key => $value)
							{
								$transid=$value['id'];
								$cname = $value['name'];
								$email=$value['email'];

								$designation=$value['designation'];
								$phone=$value['phone'];
								$address=$value['address'];
								$user_type=$value['user_type'];
								$udate=$value['udate'];
								$status=$value['status'];
							 }
							?>
			          <tr>
			          	<th class="text-center">Date</th>
			            <td ><?php echo $udate;?></td>
			          </tr>
			          <tr>
			          	<th class="text-center">Name</th>
			            <td ><?php echo $cname;?></td>
			           </tr>
			        <tr><th class="text-center">Mail</th>
			            <td ><?php echo $email; ?></td>
			        </tr>
			        <tr><th class="text-center">Designation</th>
			            <td><?php echo $designation; ?></td>
			        </tr>
			        <tr><th class="text-center">Phone</th>
			            <td><?php echo $phone; ?></td>
			            </tr>
			        <tr><th class="text-center">Address</th>
			            <td><?php echo $address; ?></td>
			         </tr>
<?php
	$db1=new Database();
	$db1->query("select * from `ig_user_type` where `id`='$user_type'");
	$rows = $db1->resultset();
	foreach($rows as $result)
	{
		$utype=$result['title'];
	}
	$db1->dbclose();
?>
						<tr><th class="text-center">User</th>
			            <td><?php echo $utype; ?></td>
			        </tr>
			        <tr><th class="text-center">Status</th>
			            <td><?php if($status==1){ echo "Active"; } else{ echo "Offline"; }   ?></td>
			        </tr>


			        <!-- </tbody> -->
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

   $('#memlistpage').addClass('active');

   //$('#packagesd').addClass('active');

   });
 </script>