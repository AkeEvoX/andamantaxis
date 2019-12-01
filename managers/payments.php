<?php
require_once '../lib/database.php';
require_once '../lib/logger.php';

class PaymentManager{
	
	protected $mysql;
	protected $serviceName = "Payment Manager";
	
		function __construct(){

		try{
			$this->mysql = new database();
			$this->mysql->connect();
			//echo "initial database.";
		}
		catch(Exception $e)
		{
			die("initial config manager error : ". $e->getMessage());
		}
	}

	function __destruct(){ //page end
		$this->mysql->disconnect();
	}
	
	function PaymentTypes(){
		
		try{
			$sql = "select * from payment where payment_status = 1 order by payment_id ";
			
			
			$base = $this->mysql->execute($sql);
			//$data = "null"; /*default empty data.*/
			
			while($row = $base->fetch_object()){
				$data[] = array(
                    "id"=>$row->payment_id,
					"name"=>$row->payment_name
				);
			}
			
			return array("result"=>"ok","data"=>$data,"message"=>$service_name . " > call PaymentTypes has complete.");
		}
		catch(\Exception $e)
		{
			log_error($service_name . " > list > Error > " . $e->getMessage());
			return array("result"=>"error","data"=>"null","message"=>$e->getMessage());
		}
	}
	
}
?>