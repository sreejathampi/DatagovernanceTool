
<?php 
          ob_start();

include("../includes/database.class.php");

include("../includes/functions.php");

include("../includes/includefunctions.php");


          

            $id=$_POST['id'];
           $datas="";
          $datas1="";
          // $bb=$_POST['page_id'];
          if($id==0)
          {
            echo "You are a guest Customer";
          }

           $datas.=' 
                  <div class="col-md-4 col-4">
												<div class="row form">
													<div class="col-md-12 col-12">
             <label>DOB</label>
             </div>
             <div class="col-md-8 col-12">
              <input type="hidden" class="form-control" name="idcheck">
                

               ';

          $db1  =   new Database();
           $stmt=$db1->query("SELECT * FROM `customer_excel2` WHERE `number`='$id'"); 
         // $db1->bind(':scategoryid',$id); 
          $rows = $db1->resultset();
          foreach($rows as $result)
          {


              
              
        $datas.= '<option value="'.$result['number'].'">'.$result['id'].' </option>'; 

          }
          $db1->dbClose();

        $datas.='

       
             ';


   $datas2.=' 
                  <div class="col-md-4 col-4">
                                              
                                                    <div class="col-md-4 col-4">
             <label>housenumber</label>
            
             <div class="col-md-8 col-12">
              <input type="hidden" class="form-control" name="idcheck">
                

               ';

          $db1  =   new Database();
           $stmt=$db1->query("SELECT * FROM `customer_excel2` WHERE `number`='$id'"); 
         // $db1->bind(':scategoryid',$id); 
          $rows = $db1->resultset();
          foreach($rows as $result)
          {


              
              
        $datas2.= '<option value="'.$result['number'].'">'.$result['housenumber'].' </option>'; 

          }
          $db1->dbClose();

        $datas2.='

       
             ';


       $datas21.=' 
                  <div class="col-md-4 col-4">
                                                <div class="row form">
                                                    <div class="col-md-4 col-4">
             <label>postcode</label>
             </div>
             <div class="col-md-8 col-12">
              <input type="hidden" class="form-control" name="idcheck">
                

               ';

          $db1  =   new Database();
           $stmt=$db1->query("SELECT * FROM `customer_excel2` WHERE `number`='$id'"); 
         // $db1->bind(':scategoryid',$id); 
          $rows = $db1->resultset();
          foreach($rows as $result)
          {


              
              
        $datas21.= '<option value="'.$result['number'].'">'.$result['postcode'].' </option>'; 

          }
          $db1->dbClose();

        $datas21.='

       
             ';



echo $datas;

//echo $datas2;
//echo $datas21;

?>

         	</div>
												 
           
<br></br><br><br>


         	</div>
							</div>

											</div>					</div>

											</div> 
           
              
