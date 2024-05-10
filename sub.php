<?php
          ob_start();

include("includes/database.class.php");

include("includes/functions.php");

include("includes/includefunctions.php");


         

           $id=$_POST['id'];
         
           $datas="";
         
       

           $datas.='  
             <label>choose Subcategory</label>
             
              <select class="form-control" name="subcategory_id">


               ';

          $db1  =   new Database();
          $stmt=$db1->query("SELECT * FROM `usersubcategory` WHERE `cid` = '$id'");
         // $db1->bind(':scategoryid',$id);
          $rows = $db1->resultset();
          foreach($rows as $result)
          {
             
           
             
        $datas.= '<option value="'.$result['id'].'">'.$result['name'].' </option>';


          }
          $db1->dbClose();

        $datas.='

        </select>
             ';

echo $datas;?>


         