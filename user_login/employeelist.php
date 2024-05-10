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



<!-- menu area end -->

<!-- content area Start -->
<?php
$adminhash=md5(uniqid(rand(5), true));
$_SESSION['hashco']=$adminhash;


?>
<div class="col-md-10 col-12 dash-text">
				<h4>Employee details</h4>
				<div class="row">
			<div class="card" style="width: 95%;">

			  <div class="card-body">

			      <table id="myTable" class="table-bordered display">
			        <thead>
			          <tr>
			          	<th class="text-center">Date</th>
			          	<th class="text-center">Name</th>
			            <th class="text-center">Emp Id</th>
			            <th class="text-center">Gender</th>
			            <th class="text-center">Salary</th>
			            <th class="text-center">Comments</th>
						<th class="text-center">Photo</th>
						<th class="text-center">Status</th>
			            <th class="text-center">Add / Remove</th>
			          </tr>
			        </thead>
			        <tbody>

			        	<?php
							$db1 = new Database();
							$stmt=$db1->query("SELECT `id`, `uid`, `emp_id`, `gender`, `salary`, `comments`, `photo`, `edate`, `status` FROM `ig_employee` ORDER BY `id` DESC");
							$rows = $db1->resultset();
							//echo "<pre>";
							//print_r($rows);
							foreach ($rows as $key => $value)
							{
								$transid=$value['id'];
								$user = $value['uid'];
								$emplid=$value['emp_id'];
								$gender=$value['gender'];

								$salary=$value['salary'];
								$descriptions=$value['comments'];
								$photos=$value['photo'];
								$joindate=$value['edate'];
								$status=$value['status'];

								if($gender==2){
									$gdet="Male";
								}
								elseif($gender==3){
									$gdet="Female";
								}
							?>
			          <tr>
			            <td ><?php echo $joindate;?></td>
<?php
	$db11=new Database();
	$db11->query("select * from `ig_user` where `id`='$user'");
	$rows = $db11->resultset();
	foreach($rows as $result)
	{
		$user=$result['name'];
	}
	$db11->dbclose();
?>						<td><?php echo $user; ?></td>
			            <td ><?php echo $emplid;?></td>
			            <td><?php if($gender ==1){ echo "Edit"; }else{ echo $gdet; } ?></td>
			            <td><?php if($salary==1){ echo "Edit";}else{ echo $salary; } ?></td>
			            <td><?php if($descriptions==1){ echo "Edit";}else{ echo $descriptions; } ?></td>

			            <td><img <?php if($photos==1) {?> src="assets/employee/noimage.jpg" <?php }else{ ?>src="assets/employee/<?php echo $photos; ?>"<?php } ?>width="100px;" height="100px;"></td>
			            <td><?php if($status==1){ echo "Active"; } else{ echo "Offline"; }   ?></td>
			            <td>
   		                <a href="editEmployee.php?transaction=<?php echo base64_encode($value['id']);?>"><button type="button" class="btn btn-success btn-rounded btn-sm my-0"><i class="fa fa-pencil-square" aria-hidden="true"></i></button></a>

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
    window.location = "deleteemployee.php?trankey="+datas;
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

   $('#emplistpage').addClass('active');

   //$('#packagesd').addClass('active');

   });
 </script>