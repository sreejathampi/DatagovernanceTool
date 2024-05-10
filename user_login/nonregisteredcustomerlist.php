<!-- Header area Start -->
<?php
ob_start();
session_start();
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

<div class="col-md-12 col-12 dash-text">
				<h4>Customer List</h4>

				<div class="col-md-12 col-12 dash-text dash-form">
	

				<div class="row">
			<div class="card" style="width: 100%;">

			  <div class="card-body">
			  <table id="myTable" class="table-bordered display">
			      <!-- <table class="table table-xs-responsive table-hover" aria-role="table"> -->
			        <thead>
			          <tr>
			          	<th class="text-center" >SNo</th>
			          	<!-- <th>Unique ID</th>   <th class="text-center" >DOB</th> -->
			          	 <th> Customer Full Name </th>
			          	 <!-- <th>Health Issues</th> -->
			          <th class="text-center" >Drug Name </th>
			             <th class="text-center" >House Number</th>
			             <th class="text-center" >Street Name </th>

						        <th class="text-center" >Post Code </th>
						        <th class="text-center" >City </th>
						        <th class="text-center" >State </th>
						        <th class="text-center" >country </th>
			            
			          </tr>
			        </thead>
			        <tbody>

			        <?php $i=1; $j=100;

 $db1  =   new Database();

                $stmt=$db1->query("SELECT * FROM `customer_data`");    

                $rows = $db1->resultset();

  foreach($rows as $result)

  {

             $transid=$result['id'];
             $shop_id=$result['shop'];
             
      


	
              $db2= new Database();

               $stmt=$db2->query("SELECT * FROM `drug_excel` where `id`='$shop_id' order by `id` desc");    

                 $rows2 = $db2->resultset();

  foreach($rows2 as $result2)

   {
                                                   ?>    
                                                   
                                                   
                                                   
  
                                            
                                                   
			           <tr>
			           <td ><?php echo $i;?> </td>
			          
			         
                <td><?php echo $result['first_name']; ?> <?php echo $result['last_name']; ?> </td>
                 <td><?php echo $result2['DrugName']; ?></td>
                <td><?php echo $result['house_number'];?></td>
                <td><?php echo $result['street_name']; ?></td>
                 
                
                 <td><?php echo $result['post_code']; ?></td>
                 <td><?php echo $result['city']; ?></td>
                  <td><?php echo $result['state']; ?></td>
                 <td><?php echo $result['country']; ?></td>
						
			         
			          </tr>

			          <?php $i++; } }?>


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
    window.location = "deletecustomerlist.php?trankey="+datas;
});
  } else {
    swal("Change In Mind, File Saved For Later Operations!");
  }
});

});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script> -->

<script type="text/javascript">
function validateexcel()
{
var blocks=document.getElementById('block').value;
var cdss=document.getElementById('cds').value;
var wards=document.getElementById('ward').value;
window.location.href="exporttoexcelblist.php?blocks="+ blocks+"&cdss="+ cdss +"&wards="+ wards;
}
</script>
<script>
    $(document).ready(function(){

    $(".nav-item a").removeClass('active');
   //$(".dropdown-menu li").removeClass('active');
   $('#nonregistered').addClass('active');

   $('#nonregadd').show();
   $('#fLA').show();

   });
 </script>