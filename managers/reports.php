<?php
require_once ('../lib/database.php');
require_once ('../lib/logger.php');

class ReportManager{
    protected $mysql;
    protected $serviceName ="Report Manager";

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
    
    function SummaryReservation($firstdate,$lastdate){
        try{

            $sql = "call report_reserv_sum(?,?);";
			$type ="ss";
			$result;
            $data = new stdClass();
			$data->p_firstdate = $firstdate;
			$data->p_lastdate = $lastdate;
			$base = $this->mysql->procedure($sql,$type,$data);

			while($row = $base->fetch_object()){
				$result[] = $row;
			}
			//$data = "null"; /*default empty data.*/
			
			return array("result"=>"ok","data"=>$result,"message"=>$service_name . " > call SummaryReservation has complete.");
		}
		catch(\Exception $e)
		{
			log_error($service_name . " > list > Error > " . $e->getMessage());
			return array("result"=>"error","data"=>"null","message"=>$e->getMessage());
		}
    }

}

?>