<!-- Header area Start -->
<?php
ob_start();
session_start();
include("../includes/database.class.php");
include("../includes/functions.php");
include("../includes/includefunctions.php");
include 'headerarea.php'; ?>
<?php 
 $dpid=$_SESSION['subcategory'];
?>
<!-- Header area End -->

<!-- Top Area Start-->

<?php include 'topareaM.php'; ?>

<!-- Top Area End -->

<!-- menu area start -->



<!-- menu area end -->

<!-- content area Start -->

<div class="col-md-12 col-12 dash-text">
				<h4>HIPPA Compliance Data Record</h4>

				<div class="col-md-12 col-12 dash-text dash-form">
	
<h5>Click here to generate Report</h5>
				<div class="row">
			<div class="card" style="width: 100%;">

			  <div class="card-body">
			  <table id="example" class="table-bordered display">
			      <!-- <table class="table table-xs-responsive table-hover" aria-role="table"> -->
			        <thead>
			          <tr>
			          	 <th>Sl No</th>
                <th>Appointment Date</th>  
                <th>Appoinment Time</th>  
                <th>Room Number</th> 
              
               
                
               <th>Doctor </th>
                <th>Patient Name</th> 
                 
			          
						       
						       
			             <th class="text-center" >Edit/Remove</th>  
			          </tr>
			        </thead>
			        <tbody>

			     <?php $i=1;
            
    
                             $dbnew= new Database(); 
                            $stmt=$dbnew->query("select * from operational_data");    

                            $rows1 = $dbnew->resultset();

                             foreach($rows1 as $result)

                                 { 
                                    $pid=$result['patient_id'];
                                    $did=$result['doctor_id'];


                                    $dbnew1= new Database(); 
                                      $stmt1=$dbnew1->query("select * from patient_data where `id`='$pid'");    

                                       $rows11 = $dbnew1->resultset();

                                           foreach($rows11 as $result1)

                                                { 
                                                    $pid=$result1['name'];
                                                    $dbnew12= new Database(); 
                                      $stmt12=$dbnew12->query("select * from users where `id`='$did'");    

                                       $rows112 = $dbnew12->resultset();

                                           foreach($rows112 as $result12)

                                                { 
                                                    
                                                                 ?>
                                     
             <tr> 
                
                 <td><?php echo $i;?></td>
               
                <td><?php echo $result['appoinment_date'];?></td> 
                 <td><?php echo $result['appoinment_time'];?></td>
                 

                <td><?php echo $result['room_no'];?></td> 
                <td><?php echo $result12['name'];?></td>
                <td><?php echo $result1['name'];?></td>
               
               
                
              
               
      
        
                <td> <span class="table-remove">
			        
			       <button type="button"class="btn btn-danger btn-rounded btn-sm my-0 deletebtn" id="buttonids_<?php echo $transid;?>" dataid="<?php echo $transid;?>">Delete<i class="far fa-trash-alt"></i></button></span>
               
               
                
              
               
            </tr> 
           <?php    $i++; } }} ?>  
             
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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css"></script>





<script type="text/javascript">
function validateexcel()
{
var blocks=document.getElementById('block').value;
var cdss=document.getElementById('cds').value;
var wards=document.getElementById('ward').value;
window.location.href="exporttoexcelblist.php?blocks="+ blocks+"&cdss="+ cdss +"&wards="+ wards;
}
</script>


<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf', 'print'
        ]
    } );
} );
</script>


<script>
    $(document).ready(function(){

    $(".nav-item a").removeClass('active');
   //$(".dropdown-menu li").removeClass('active');
   $('#salelist2').addClass('active');

   $('#salesadd').show();
   $('#fLA').show();

   });
 </script>