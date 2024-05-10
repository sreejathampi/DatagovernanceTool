

      

    <?php include('header.php');?>
  <?php if (empty($_SESSION['registerId'])) 
        {
            header('Location:index.php');
        }
        else
        {
            echo $_SESSION['registerId'];
        }
     ?>

    <!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href= "https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" /> 

    <!-- jQuery library file -->
    <script type="text/javascript"src="https://code.jquery.com/jquery-3.5.1.js"> </script> 

    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src= "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"> </script> 
</head> 
       
                         <div class="project-head">
                             <h4><center>Access Control</center></h4>
                      
                       </div>
                      <center><a class="btn btn-primary" href="accesspermission.php">Set Permission</a></center> 
                     
                   <body> 
                  
                  
    <!--HTML table with student data-->
    <table id="tableID" class="display" style="width:80%"> 
        <thead> 
            <tr> 
                <th>Sl No</th>
                <th>User Department</th>  
                <th>Patient Data Access</th>  
                <th>Health Monitoring Data Access</th> 
                <th>HIPPA Regulation Access</th> 
                <th>HIPPA Compliance Access</th> 
                
                <th>Operational Data Access</th>
                <th>Time Limit</th> 
               <th>Action</th><th></th>
                
                
            </tr> 
        </thead> 
        <tbody> 
                        <?php $i=1;
            
    
                             $dbnew= new Database(); 
                            $stmt=$dbnew->query("select * from subuser_permission");    

                            $rows1 = $dbnew->resultset();

                             foreach($rows1 as $result)

                                 {
                                     $cid=$result['department_id']; 
                                     $pdata=$result['patient_data'];
                                     $hdata=$result['healthmonitoring'];
                                     $hdata1=$result['hippa_data'];
                                     $compliancedata=$result['hippa_copliance'];
                                     $operational=$result['operational'];

                                    

                                    
                                               
                               
                                                $dd= new Database(); 
                                               $stmt=$dd->query("select * from usersubcategory where `id`='$cid'");    
                                             $rr = $dd->resultset();
                                                       foreach($rr as $re)

                                                            {
                                                               $cid2=$re['id']; 
                                                               $subname=$re['name'];
                                               ?>
            <tr> 
                <td><?php echo $i;?></td> 
             
                <td><?php echo $subname;?></td>    
                <td> <?php if ($pdata==1) { echo "Yes"; } else { echo 'No';}?> </td>
                <td> <?php if ($hdata==1) { echo "Yes"; } else { echo 'No';}?> </td>
                <td> <?php if ($hdata1==1) { echo "Yes"; } else { echo 'No';}?> </td>
                <td> <?php if ($compliancedata==1) { echo "Yes"; } else { echo 'No';}?> </td>
                <td> <?php if ($operational==1) { echo "Yes"; } else { echo 'No';}?> </td>   
              <td><?php echo $result['op_date'];?></td>
              
                
                <td><span class="table-remove">
                <button type="button"class="btn btn-danger btn-rounded btn-sm my-0 deletebtn" id="buttonids_<?php echo $result['id'];?>" dataid="<?php echo $result['id'];?>"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button></span><br>
            </td><td><a class="btn btn-primary" href="editaccesspermission.php?ids=<?php echo $result['id'];?>">Edit</a></td>
            
                
              
               
            </tr> 
           <?php    $i++; } }  ?>  
             
        </tbody> 
    </table> 
</body></div></div></div></div>
    <script> 

        /* Initialization of datatable */ 
        $(document).ready(function() { 
            $('#tableID').DataTable({ }); 
        }); 
    </script> 



    <!-- <script>
        $(document).ready(function() { 

    /* To hide column 2 and 3 */
    $('#tableID').DataTable( { 
        "columnDefs": [ 
            { 
                "targets": [ 2 ], 
                "visible": false, 
                "searchable": false
            }, 
            { 
                "targets": [ 3 ], 
                "visible": false
            } 
        ] 
    } ); 
} );


    </script> -->


    <script>
    document.addEventListener("DOMContentLoaded", function(){
      document.querySelectorAll('.nav-link').forEach(function(element){
        
        element.addEventListener('click', function (e) {

          let nextEl = element.nextElementSibling;
          let parentEl  = element.parentElement;    

            if(nextEl) {
                e.preventDefault(); 
                let mycollapse = new bootstrap.Collapse(nextEl);
                
                if(nextEl.classList.contains('show')){
                  mycollapse.hide();
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                    // if it exists, then close all of them
                    if(opened_submenu){
                      new bootstrap.Collapse(opened_submenu);
                    }
                }
            }
        }); // addEventListener
      }) // forEach
    }); 
    // DOMContentLoaded  end
  </script>

    <!-- <script src="js/jquery.js"></script> -->
    <!-- <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script> -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/aos.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
    <!-- <script type="text/javascript" src="js/slick.min.js"></script> -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- <script src="js/calendar.js"></script> -->


  <script>
    // Initialization of DataTables
    $(document).ready(function() {
        // Check if DataTable is already initialized
        if (!$.fn.DataTable.isDataTable('#tableID')) {
            $('#tableID').DataTable();
        } else {
            // DataTable is already initialized, no need to reinitialize
            console.log('DataTable is already initialized on #tableID');
        }
    });
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
    window.location = "deleteaccesspermission.php?trankey="+datas;
});
  } else {
    swal("Change In Mind, File Saved For Later Operations!");
  }
});

});
</script>

</body> 

</html> 
