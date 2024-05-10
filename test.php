

       <?php include('header.php')?>


    <!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href= "https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" /> 

    <!-- jQuery library file -->
    <script type="text/javascript"src="https://code.jquery.com/jquery-3.5.1.js"> </script> 

    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src= "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"> </script> 
</head> 
       
                         <div class="project-head">
                             <h4><center>User  Management</center></h4>
                      
                       </div>
                      <center><a class="btn btn-primary" href="newuser.php">Add  New User</a></center> 
                     
                   <body> 
                  
                  
    <!--HTML table with student data-->
    <table id="tableID" class="display" style="width:80%"> 
        <thead> 
            <tr> 
                <th>StudentID</th> 
                <th>StudentName</th> 
                <th>Age</th> 
                <th>Gender</th> 
                <th>Marks Scored</th> 
            </tr> 
        </thead> 
        <tbody> 
            
            <tr> 
                <td>ST14</td> 
                <td>Fiza</td> 
                <td>31</td> 
                <td>Female</td> 
                <td>750</td> 
            </tr> 
             <tr> 
                <td>ST14</td> 
                <td>Fiza</td> 
                <td>31</td> 
                <td>Female</td> 
                <td>750</td> 
            </tr> 
             <tr> 
                <td>ST14</td> 
                <td>Fiza</td> 
                <td>31</td> 
                <td>Female</td> 
                <td>750</td> 
            </tr> 
             <tr> 
                <td>ST14</td> 
                <td>Fiza</td> 
                <td>31</td> 
                <td>Female</td> 
                <td>750</td> 
            </tr> 
             <tr> 
                <td>ST14</td> 
                <td>Fiza</td> 
                <td>31</td> 
                <td>Female</td> 
                <td>750</td> 
            </tr> 
             <tr> 
                <td>ST14</td> 
                <td>Fiza</td> 
                <td>31</td> 
                <td>Female</td> 
                <td>750</td> 
            </tr> 

             <tr> 
                <td>ST14</td> 
                <td>Fiza</td> 
                <td>31</td> 
                <td>Female</td> 
                <td>750</td> 
            </tr> 
             <tr> 
                <td>ST14</td> 
                <td>Fiza</td> 
                <td>31</td> 
                <td>Female</td> 
                <td>750</td> 
            </tr> 
             <tr> 
                <td>ST14</td> 
                <td>ert</td> 
                <td>31</td> 
                <td>Female</td> 
                <td>750</td> 
            </tr> 
             <tr> 
                <td>ST14</td> 
                <td>dd</td> 
                <td>31</td> 
                <td>Female</td> 
                <td>750</td> 
            </tr> 
             <tr> 
                <td>ST14</td> 
                <td>Fiza</td> 
                <td>31</td> 
                <td>Female</td> 
                <td>750</td> 
            </tr> 
            <tr> 
                <td>ST15</td> 
                <td>Silva</td> 
                <td>34</td> 
                <td>male</td> 
                <td>985</td> 
            </tr> 
        </tbody> 
    </table> 
</body></div></div></div></div>
    <script> 

        /* Initialization of datatable */ 
        $(document).ready(function() { 
            $('#tableID').DataTable({ }); 
        }); 
    </script> 



    <script>
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


    </script>
</body> 

</html> 
