<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META name="referrer" content="strict-origin"/>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" >
    <link rel="stylesheet" href="css/signin.css" >
</head>
<body>
<div class="container">
<form class="form-signin" action="omise_checkout.php" method="post" id="checkout">
    <h2 class="form-signin-heading"><img src="https://www.andamantaxis.com/images/logo.jpg" width="50px"/> Omise Payment</h2>
        
    <div class="form-group">
        <label for="inputOrderID" >Order ID</label>
        <span class="form-control"><? echo $_GET["id"] ?: "&nbsp;" ;?></span>
        <input type="hidden" name="inputOrderID" value="<?php echo $_GET["id"] ?: "" ;?>" />
    <div>
    <div class="form-group">
        <label for="inputAmount" >Amount</label>
        <span class="form-control"><?php echo $_GET["price"] ?: "&nbsp;"; ?></span>
        <input type="hidden" name="inputAmount" value="<?php echo $_GET["price"] ?: "" ;?>" />
    <div>
    <div class="form-group">
        <label for="inputHolder">Holder Name</label>
        <input type="text" class="form-control" data-omise="holder_name" placeholder="Enter card holder">
    </div>
    <div class="form-group">
        <label for="inputHolder">Card Number</label>
        <input type="text" class="form-control" data-omise="number" placeholder="Enter your card number">
    </div>
    <div class="form-inline">
        <label for="expiration_month">Expire Date</label>
        <div class="form-group">
        <input type="text" class="form-control" data-omise="expiration_month" placeholder="Month" size="4" maxlength="4"> /
        <input type="text" class="form-control" data-omise="expiration_year" placeholder="Year" size="8" maxlength="8">
        </div>
    </div>
    <div class="form-inline">
        <label for="inputHolder">CVV</label><br/>
        <div class="form-group" >
            <input type="text" class="form-control" data-omise="security_code" size="8" placeholder="security code" maxlength="8">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-success" id="create_token" ><span class="glyphicon glyphicon-ok-circle"></span> Confirmed</button>
            <button type="button" class="btn btn-danger"  id="cancel_payment" ><span class="glyphicon glyphicon-ban-circle"></span> Canceled</button>
        </div>
    </div>
  <div id="token_errors"></div>
  <input type="hidden" name="omise_token">
  
</form>
</div>
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.omise.co/omise.js.gz"></script>
<!-- data-key="YOUR_PUBLIC_KEY" -->

<script>
Omise.setPublicKey("pkey_test_5ht64xcxv6dcsjtis48");

$("#checkout").submit(function(){
    var form = $(this);
    form.find("input[type=submit]").prop("disabled",true);
    
    var card = {
        "name":form.find("[data-omise=holder_name]").val(),
        "number":form.find("[data-omise=number]").val(),
        "expiration_month":form.find("[data-omise=expiration_month]").val(),
        "expiration_year":form.find("[data-omise=expiration_year]").val(),
        "security_code":form.find("[data-omise=security_code]").val()
    };
    
    Omise.createToken("card",card,function(statusCode,response){
        if(response.object =="error" || !response.card.security_code_check){
            var message_text = "SET YOUR SECURITY CODE CHECK FAILED MESSAGE";
            if(response.object=="error"){
                message_text = response.message;
            }
            $("#token_errors").html(message_text);
            form.find("input[type=submit]").prop("disabled",false);
        } else {
            
            //console.log(response);
            form.find("[name=omise_token]").val(response.id);
            
            
            form.find("[data-omise=number]").val("");
            form.find("[data-omise=security_code]").val("");
            
            form.get(0).submit();
            //console.log("card authen complete.");
            
        }
    });
    
    return false;
});

$("#cancel_payment").click(function(){
    window.history.back();
});
</script>
</body>
</html>