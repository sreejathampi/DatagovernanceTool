<!-- Header area Start -->
<?php
ob_start();
session_start();
include("../includes/database.class.php");
include("../includes/functions.php");
include("../includes/includefunctions.php");
include 'headerarea.php'; ?>
<?php 
 $staff=$_SESSION['useridsA'];
?>
<!-- Header area End -->

<!-- Top Area Start-->

<?php include 'topareaM.php'; ?>

<!-- Top Area End -->

<!-- menu area start -->



<!-- menu area end -->

<!-- content area Start -->

<div class="col-md-12 col-12 dash-text">
				<h4>Sales List</h4>

				<div class="col-md-12 col-12 dash-text dash-form">
	

				<div class="row">
			<div class="card" style="width: 100%;">

			  <div class="card-body">
			  <table id="myTable" class="table-bordered display">
			      <!-- <table class="table table-xs-responsive table-hover" aria-role="table"> -->
			        <thead>
			          <tr>
			          	<th class="text-center" >SNo</th>
			          	
			          	 <th class="text-center" >Drug Name </th>
			          	 <th> Customer Full Name </th>
			          	 <th> Customer Medical History </th>
			          	  <th class="text-center" >Purchase Quantity </th>
			          	  <th class="text-center" >Total Price </th>
			          	  <th class="text-center">Purchased On</th>
			          
						       
						       
			             <!-- <th class="text-center" >Edit/Remove</th>  -->
			          </tr>
			        </thead>
			        <tbody>

			        <?php $i=1;

               $db1  =   new Database();
                $stmt=$db1->query("SELECT * FROM `new_salesdetails`");    

                $rows = $db1->resultset();

                 foreach($rows as $result)

                    {

                              $transid=$result['id'];
                              $drugid=$result['drug_id'];
                              $customerid=$result['Customer_id'];

                              ?>

                              <?php 
                                  $db2= new  Database();
                                  $stmt=$db2->query("SELECT * FROM `drug_excel` where `id`='$drugid'");    
                                   $rows2 = $db2->resultset();
                                   foreach($rows2 as $result2)
                                   { ?>


                                   	  <?php 
                                          $db3= new  Database();
                                          $stmt=$db3->query("SELECT * FROM `customer_excel2` where `number`='$customerid'");    
                                         $rows3 = $db3->resultset();
                                          foreach($rows3 as $result3)
                                          { ?>


                                   	

                                                   
                                        
                                                   
			                                      <tr>
			                                   <td ><?php echo $i;?> </td>
			           
                                         
                                         <td><?php echo $result2['DrugName']; ?></td>
                                           <td><?php echo $result3['dob']; ?> <?php echo $result3['surname']; ?> </td>
                                           <td><?php echo $result3['history']; ?></td>
                                           <td><?php echo $result['purchase_quantity']; ?></td>
                                         <td><?php echo $result['price']; ?></td>
                                          <td><?php echo $result['date']; ?></td>
                                          
                
                
						<!-- 
			           <td> <span class="table-remove">
			        
			       <button type="button"class="btn btn-danger btn-rounded btn-sm my-0 deletebtn" id="buttonids_<?php echo $transid;?>" dataid="<?php echo $transid;?>"><i class="far fa-trash-alt"></i></button></span></td> -->
			          </tr>

			          <?php $i++; } }}?>


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
   $('#salelist').addClass('active');

   $('#salesadd').show();
   $('#fLA').show();

   });
 </script>