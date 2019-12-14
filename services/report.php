<?php
    require_once('../managers/reports.php');
    require_once('../lib/common.php');

    $service_type = $_GET["action"];

    switch($service_type){
        case "sum_reserve":
            $manager = new ReportManager();
            $firstdate = $_GET["firstdate"];
            $lastdate = $_GET["lastdate"];
            $result=$manager->SummaryReservation($firstdate,$lastdate);
            echo json_encode($result);

        break;
        default :
            $result = array("message"=>"service not found");
            echo json_encode($result);
    break; 
    }
?>