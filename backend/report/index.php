<?php
//for page report

require_once('../controlpage.php');
?>

<!doctype html>
<html ng-app="reportApp" ng-controller="ReportController">
<head>
    <title>Report Reservation</title>
    <!-- include javascript -->
    <script src="../../js/jquery.min.js" type="text/javascript"></script>
    <script src="../../js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../../js/angular.min.js" type="text/javascript"></script>
    <script src="../../js/angular-datatables.min.js" type="text/javascript"></script>
    <script src="../../js/moment.min.js" type="text/javascript"></script>
    <!-- include stylesheet -->
    <link href="../../css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"></link>
    <link href="../../css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../../css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <script>
    
    var reportApp = angular.module("reportApp",[]);//'datatables'

    reportApp.controller("ReportController",function($scope,$compile,$element,$http){

        //$('#firstDate').datepicker("setDate",new Date());

        // set default date
        //$scope.firstDate = moment(new Date()).format("YYYY-MM-DD");
        //$scope.lastDate = moment(new Date()).format("YYYY-MM-DD");
        $scope.firstDate = '2019-11-01';
        $scope.lastDate = '2019-11-09';
        $scope.reportItems = [];

        $('#firstDate').datepicker().on("changeDate", function(e){
            var convDate = moment(e.date).format("YYYY-MM-DD");
            $scope.firstDate = convDate;
        });

        $('#lastDate').datepicker().on("changeDate", function(e){
            var convDate = moment(e.date).format("YYYY-MM-DD");
            $scope.lastDate = convDate;
        });

        $scope.FeedReport = function(){

            //$scope.reportItems = [];
            
            $scope.reportItems = [
            {
                booking_no:'00001',
                TravelDate:'2019-11-01 09:30:00'
            },
            {
                booking_no:'00002',
                TravelDate:'2019-11-03 10:20:00'
            }];
            
            
            /*
            $scope.content = "<tr><td>cc</td><td>dd</td></tr>";
            var tblElem = angular.element($scope.content);
            var compileFn = $compile(tblElem);
            compileFn($scope);

            $("#reportbody").append(tblElem);
            */

        }

        $scope.feed = function(){

            if ( $.fn.DataTable.isDataTable('#reportview') ) {
                    $('#reportview').DataTable().clear().destroy();
                    console.log('Datatable clear.');
                }

            $http({
                method:"GET",
                url:"../../services/report.php",
                params : {"action":"sum_reserve","firstdate": $scope.firstDate ,"lastdate":$scope.lastDate,"_":new Date().getMilliseconds()}
            }).then(function successCallback(resp)
            {

                
                //$scope.reportItems = [];
                $scope.reportItems = resp.data.data;

                $('#reportview').dataTable({
                    filter:false
                });
                
                /*
                var item = "";
                $.each(resp.data.data,function(idx,val){

                    item += "<tr> ";
                    item += "<td>"+val.booking_no+"</td>";
                    item += "<td>"+val.Confirmed+"</td>";
                    item += "<td>"+val.TravelDate+"</td>";
                    item += "<td>"+val.Time+"</td>";
                    item += "<td>"+val.passenger+"</td>";
                    item += "<td>"+val.origin+"</td>";
                    item += "<td>"+val.destination+"</td>";
                    item += "<td>"+val.price+"</td>";
                    item += "<td>"+val.payment+"</td>";
                    item += "</tr>";

                   
                });

                $scope.content = item;
                    
                var tblElem = angular.element($scope.content);
                var compileFn = $compile(tblElem);
                compileFn($scope);
                

                if ( $.fn.DataTable.isDataTable('#reportview') ) {
                    $('#reportview').DataTable().destroy();
                }

                $('#reportview tbody').empty();
                $("#reportview tbody").append(tblElem);

                $('#reportview').dataTable({
                    filter:false
                });

                */
                console.log("feed report success");
            }),function errorCallback(resp){
                console.log("feed report error");
            };
        }


    });

    $(document).ready(function(){
        $.fn.datepicker.defaults.format = "dd/mm/yyyy";
        
        
        $('#reportview').dataTable({
            filter:false
        });
        
        
        $('#firstDate').datepicker("setDate",new Date());
        $('#lastDate').datepicker("setDate",new Date());
       
    });

    </script>
</head>
<body>
    <div class="container">
        <div id="navigation">
            <div id="userInfo">
                <span>Welcome: </span><!--<span><php echo $name." [".ShowLevel($level)."]"; ?> </span><a href="../login/logout.php">Logout</a>-->
            </div>
            <?php
			echo $menubar;
			?>
            <hr>
            <div class="row">
                <div class="col-offer-md-6">
                    <div class='navbar-form navbar-right'>
                        <div class="form-group">
                            <label for='firstDate'>From </label>
                            <div class="input-group date" id="firstDate"  >
                                <input type="text" class="form-control" id="itemFirstDate" value=""/>
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-calendar" ></i>    
                                </span>
                            </div>
                            <label for='lastDate'>To </label>
                            <div class="input-group date" id="lastDate" >
                                <input type="text" class="form-control" value=""/>
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-calendar" ></i>  
                                </span>
                                
                            </div>
                            <input type='button' class="btn btn-success" id="btn_feed" value="Search" ng-click="feed()" />
                            
                        </div>
                    </div>
                </div>
            </div>
            <div  data-ng-init="FeedReport()">
            <!--compact-->
                <table class="table table-striped table-hover" datatable="ng" id="reportview">
                <thead>
                    <tr>
                        <th>Booking no</th>
                        <th>Confirmed</th>
                        <th>Travel Date</th>
                        <th>Time</th>
                        <th>passenger</th>
                        <th>origin</th>
                        <th>destination</th>
                        <th>price</th>
                        <th>payment</th>
                    </tr>
                </thead>
                <tbody id="reportbody">
                    <tr ng-repeat="item in reportItems">
                        <td>{{ item.booking_no }}</td>
                        <td>{{ item.Confirmed }}</td>
                        <td>{{ item.TravelDate }}</td>
                        <td>{{ item.Time }}</td>
                        <td>{{ item.passenger }}</td>
                        <td>{{ item.origin }}</td>
                        <td>{{ item.destination }}</td>
                        <td>{{ item.price }}</td>
                        <td>{{ item.payment }}</td>
                    </tr>
                </tbody>
                </table>
            </div>
            
        </div>
    </div>
  
    <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../js/bootstrap-datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
</body>