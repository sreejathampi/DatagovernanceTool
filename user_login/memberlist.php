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
$adminhash=md5(uniqid(rand(5), true));
$_SESSION['hashco']=$adminhash;


?>
<div class="col-md-10 col-12 dash-text">
				<h4>Member details</h4>
				<div class="row">
			<div class="card" style="width: 95%;">

			  <div class="card-body">

			      <table id="myTable" class="table-bordered display">
			        <thead>
			          <tr>
			          	<th class="text-center">Date</th>
			            <th class="text-center">Name</th>
			            <!-- <th class="text-center">UserName</th> -->
			            <!-- <th class="text-center">Mail</th>
			            <th class="text-center">Designation</th> -->
			            <th class="text-center">Phone</th>
			            <th class="text-center">Address</th>
			            <th class="text-center">User</th>
						<th class="text-center">Status</th>
			            <th class="text-center">Add / Remove</th>
			          </tr>
			        </thead>
			        <tbody>

			        	<?php
							$db1 = new Database();
							$stmt=$db1->query("SELECT `id`, `name`, `password`, `email`, `designation`, `phone`, `address`, `user_type`, `udate`, `status` FROM `ig_user` ORDER BY `id` DESC");
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
							?>
			          <tr>
			            <td ><?php echo $udate;?></td>
			            <td ><?php echo $cname;?></td>
			    <?php /*        <td ><?php echo $login;?></td>
			            <td ><?php echo $email; ?></td>
			            <td><?php echo $designation; ?></td>  */ ?>
			            <td><?php echo $phone; ?></td>
			            <td><?php echo $address; ?></td>
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
			            <td><?php echo $utype; ?></td>
			            <td><?php if($status==1){ echo "Active"; } else{ echo "Offline"; }   ?></td>
			            <td width="20%;">
   		                 <a href="memberlistDetails.php?transaction=<?php echo base64_encode($value['id']);?>"><button type="button" class="btn btn-success btn-rounded btn-sm my-0">View</button></a>

			             <a href="editCustomerEntry.php?transaction=<?php echo base64_encode($value['id']);?>"><button type="button" class="btn btn-success btn-rounded btn-sm my-0"><i class="fa fa-pencil-square" aria-hidden="true"></i></button></a>

			             <span class="table-remove">
			                  <button type="button"class="btn btn-danger btn-rounded btn-sm my-0 deletebtn" id="buttonids_<?php echo $value['id'];?>" dataid="<?php echo $value['id'];?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button></span>
			               <?php  /*
			               	if($total>$totalamt)
			               	{
			               ?>
			               <span class="table-remove">
			                  <a href="addmoreFunds.php?transaction=<?php echo base64_encode($value['id']);?>"><button type="button"class="btn btn-success btn-rounded btn-sm my-0"><i class="fa fa-plus-square" aria-hidden="true"></i></i></button></a></span>
			                <?php }   */?>
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
    window.location = "deletemember.php?trankey="+datas;
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