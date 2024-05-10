

      
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
                             <h4><center>Patient Record</center></h4>
                      
                       </div>
                      <!-- <center><a class="btn btn-primary" href="newuseradd.php">Add  New User</a></center>  -->
                     
                   <body> 
                  
                  
    <!--HTML table with student data-->
    <table id="tableID" class="display" style="width:80%"> 
        <thead> 
            <tr> 
                <th>Sl No</th>
                <th>Patient Name</th>  
                <th>Email</th>  
                <th>Phone</th> 
              
               
                
               <th>Post Code</th>
                <th>Address</th> 
                 <th>visit Count </th>
                 <th>Date</th>
               
                
                
            </tr> 
        </thead> 
        <tbody> 
                        <?php $i=1;
            
    
                             $dbnew= new Database(); 
                            $stmt=$dbnew->query("select * from patient_data");    

                            $rows1 = $dbnew->resultset();

                             foreach($rows1 as $result)

                                 { ?>
                                     
            <tr> 
                
                 <td><?php echo $i;?></td>
                <td><?php echo $result['name'];?></td> 
                <td><?php echo anonymizeEmail($result['email']);?></td> 
                 <td><?php echo anonymizephone($result['phone']);?></td>
                 

                <td><?php echo $result['postalZip'];?></td> 
                <td><?php echo $result['address'];?></td>
                <td><?php echo $result['visited_time'];?></td>
                <td><?php echo $result['date'];?></td>
               
                
              
               
            </tr> 
           <?php    $i++; } ?>  
             
        </tbody> 
    </table> 
</body></div></div></div></div>
    <script> 

        /* Initialization of datatable */ 
        $(document).ready(function() { 
            $('#tableID').DataTable({ }); 
        }); 
    </script> 

<?php 
function anonymizephone($phone) {
    // Replace name with a generic placeholder
    return "********";
}

function anonymizeEmail($email) {
    // Redact email address
    return "***@gmail.com";
}

?>

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

</body> 

</html> 
