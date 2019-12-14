<?php
require_once ('../lib/database.php');
require_once ('../lib/logger.php');

class ReservationManager{
	
	protected $mysql;
	protected $serviceName = "Reservation Manager";
	
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
	
	function UpdateReminder($reserv_id){
		
		try{
			$sql = "update reservation 
				set reserv_sendmail_alert = 1
				where reserv_id ='".$reserv_id."' ;";
			
			
			$base = $this->mysql->execute($sql);
			//$data = "null"; /*default empty data.*/
			
			return array("result"=>"ok","message"=>$service_name . " > call UpdateReminder has complete.");
		}
		catch(\Exception $e)
		{
			log_error($service_name . " > list > Error > " . $e->getMessage());
			return array("result"=>"error","data"=>"null","message"=>$e->getMessage());
		}
	}
	
	function UpdateReviewer($reserv_id){
		
		try{
			$sql = "update reservation 
				set reserv_review_alert = 1
				where reserv_id ='".$reserv_id."' ;";
			
			
			$base = $this->mysql->execute($sql);
			//$data = "null"; /*default empty data.*/
			
			return array("result"=>"ok","message"=>$service_name . " > call UpdateReviewer has complete.");
		}
		catch(\Exception $e)
		{
			log_error($service_name . " > UpdateReviewer > Error > " . $e->getMessage());
			return array("result"=>"error","data"=>"null","message"=>$e->getMessage());
		}
	}
	
	function GetReminderAlert(){
		
		try{
			$sql = "select r.reserv_id as id,reserv_email as email
			from reservation r
			inner join reservation_detail rd on rd.reserv_id = r.reserv_id
			where 1=1
			AND TIMESTAMPDIFF(HOUR,rd.rdetail_date_origin,now()) >= -24
			AND (
				  (r.reserv_payment=3 AND reserv_sendmail_alert = 0) OR
				  (r.reserv_payment =2 and r.reserv_status=2 AND r.reserv_sendmail_alert=0  )
			) 
			group by r.reserv_id
			;";
			
			//and rdetail_date_origin <= (NOW() + INTERVAL 1 DAY)
			
			
			$base = $this->mysql->execute($sql);
			//$data = "null"; /*default empty data.*/
			while($row = $base->fetch_object()){
				$data[]  = $row;
			
			}
			
			return array("result"=>"ok","data"=>$data,"message"=>$service_name . " > call GetReminder has complete.");
		}
		catch(\Exception $e)
		{
			log_error($service_name . " > GetReminder > Error > " . $e->getMessage());
			return array("result"=>"error","data"=>"null","message"=>$e->getMessage());
		}
	}
	
	function GetReviewAlert(){
		
		try{
			
			
			$sql = "select r.reserv_id as id ,reserv_email as email
			from reservation r
			inner join reservation_detail rd on rd.reserv_id = r.reserv_id
			where 1=1
			AND TIMESTAMPDIFF(HOUR,CASE WHEN rd.rdetail_bound =1 THEN rd.rdetail_date_origin ELSE rd.rdetail_date_destination end, now()) >= 24
			and (
				(r.reserv_payment=3 AND reserv_review_alert = 0) or
				(r.reserv_payment =2 and r.reserv_status=2 AND r.reserv_review_alert=0  )
			)
			group by r.reserv_id ;
			";
			
			$base = $this->mysql->execute($sql);
			//$data = "null"; /*default empty data.*/
			while($row = $base->fetch_object()){
				$data[] = $row;
			}
			
			return array("result"=>"ok","data"=>$data,"message"=>$service_name . " > call GetReviewAlert has complete.");
		}
		catch(\Exception $e)
		{
			log_error($service_name . " > GetReviewAlert > Error > " . $e->getMessage());
			return array("result"=>"error","data"=>"null","message"=>$e->getMessage());
		}
	}
	
	function GetReservInfo($reserv_id){
		try{
			
			$sql = "select 
			LPAD(r.reserv_id, 5, 0) as reserv_id,
			r.reserv_date as date,
			r.reserv_firstname as firstname,
			r.reserv_lastname as lastname,
			r.reserv_email as email,
			r.reserv_mobile as mobile,
			rd.rdetail_bound as trasnferType,
			r.reserv_address as address,
			r.reserv_zipcode as zipcode,
			pay.payment_name as payment,
			r.reserv_amount as amount,
			r.reserv_detail as reserv_detail,
			case when r.flight_arrival_number<>0 then r.flight_arrival_number else '-' end as flight_arrival,
			case when r.flight_departure_number<>0 then r.flight_departure_number else '-' end as flight_departure,
			CASE WHEN r.hotel_name ='' THEN '-' ELSE r.hotel_name END AS hotel_pickup,
			CASE WHEN r.hotel_name_destination ='' THEN '-' ELSE r.hotel_name_destination END AS hotel_dropoff,
			loc1.tlocation_name AS 'from', 
			loc2.tlocation_name AS 'to' ,
			v.vtype_name as vehicle ,
			DATE_FORMAT( rd.rdetail_date_origin,'%d %M %Y ,%H:%i %p')  as pickuptime,
			DATE_FORMAT( rd.rdetail_date_destination,'%d %M %Y ,%H:%i %p') as dropofftime,
			rd.rdetail_unit as unit,
			rd.rdetail_bound as bound,
			rd.rdetail_adults_num as adults,
			rd.rdetail_children_num as children ,
			rd.rdetail_infants_num ,
			DATE_FORMAT(rd.rdetail_date_origin,'%d-%m-%Y') as pickdate ,
			DATE_FORMAT(rd.rdetail_date_origin,'%H:%i') as picktime ,
			DATE_FORMAT(rd.rdetail_date_destination,'%d-%m-%Y') as dropdate ,
			DATE_FORMAT(rd.rdetail_date_destination,'%H:%i') as droptime 
			from reservation r
			inner join reservation_detail rd on rd.reserv_id = r.reserv_id
			inner join vehicle_type v on v.vtype_id = rd.rdetail_vehicle
			inner join payment pay on pay.payment_id = r.reserv_payment
			LEFT outer JOIN travel_location loc1 ON loc1.tlocation_id = rd.rdetail_origin
			LEFT outer JOIN travel_location loc2 ON loc2.tlocation_id = rd.rdetail_destination
			where rd.reserv_id = '".$reserv_id."'
			limit 1 ";
			
			//echo $sql."<br/>";
			$base = $this->mysql->execute($sql);
			//$data = "null"; /*default empty data.*/
			$data = $base->fetch_object();
			
			return array("result"=>"ok","data"=>$data,"message"=>$service_name . " > call GetReminder has complete.");
		}
		catch(\Exception $e)
		{
			log_error($service_name . " > GetReminder > Error > " . $e->getMessage());
			return array("result"=>"error","data"=>"null","message"=>$e->getMessage());
		}
	}
	
}
?>