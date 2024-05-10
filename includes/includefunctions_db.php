<?php 
$website_email="info@sucxessprinters.com";
function pagecontents($id)
{
$db1 	= 	new Database();
								$db1->query('select * from page_contents where contents_id=:id');	
								$db1->bind(":id",$id);
								$rows = $db1->resultset();
								foreach($rows as $result)
								{
									echo $result['country_name'];
								}
								$db1->dbclose();
}

function Weight($materialtype_id)
{
	$obj 	= 	new Database();
$qry=$obj->query("select weight from settings_materialtype  where materialtype_id =:materialtype_id"); 
$obj->bind(":materialtype_id",$materialtype_id);
$rows = $obj->resultset();	
                        foreach($rows as $result)
                        {
$weight=$result['weight'];
}
						$obj->dbclose();
return($weight);
}

function DeliveryCharge($deliveryplace_id,$weight)
{
	
	$obj 	= 	new Database();
$qry=$obj->query("select * from settings_deliverycharge  where deliveryplace_id =:deliveryplace_id"); 
$obj->bind(":deliveryplace_id",$deliveryplace_id);
$rows = $obj->resultset();	
                        foreach($rows as $result)
                        {
							if($weight<=250)
							$charge=$result['upto250gm'];
							else if($weight>250)
							{
							$charge=$result['upto250gm'];
							$weightnew=$weight-250;
							while($weightnew>=250)
							{
								$charge=$charge+$result['additional250gm'];
								$weightnew=$weightnew-250;
							}
							if($weightnew>0)
							$charge=$charge+$result['additional250gm'];
							}
							
}
						$obj->dbclose();
return($charge);
}

function DeliveryPlace($deliveryplace_id)
{
	
	$obj 	= 	new Database();
$qry=$obj->query("select deliveryplace from settings_deliveryplace  where deliveryplace_id =:deliveryplace_id"); 
$obj->bind(":deliveryplace_id",$deliveryplace_id);
$rows = $obj->resultset();	
                        foreach($rows as $result)
                        {
							
							$deliveryplace=$result['deliveryplace'];
						
							
}
						$obj->dbclose();
return($deliveryplace);
}
?>