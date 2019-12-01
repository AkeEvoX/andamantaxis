<?
simple
?>
<html>
<head>
</head>
<body>
<form name="checkoutForm" method="POST" action="checkout.php">
  <script type="text/javascript" src="https://cdn.omise.co/omise.js"
    data-key="pkey_test_52jyu0r8o4307z0zz00"
    data-image="https://www.andamantaxis.com/images/logo.jpg"
    data-frame-label="Andamantaxis"
    data-button-label="Pay now"
    data-submit-label="Submit"
    data-location="no"
    data-amount="10025"
    data-currency="thb"
    >
  </script>
  <!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
</form>

<form action="omise_checkout.php" method="post" id="checkout">
  <div id="token_errors"></div>

  <input type="hidden" name="omise_token">
 <div>
    OrderID<br>
    <input type="text" name="orderid" >
  </div>
  <div>
    Price <br>
    <input type="text" name="price" >
  </div>
  <div>
    Name<br>
    <input type="text" data-omise="holder_name">
  </div>
  <div>
    Number<br>
    <input type="text" data-omise="number">
  </div>
  <div>
    Date<br>
    <input type="text" data-omise="expiration_month" size="4"> /
    <input type="text" data-omise="expiration_year" size="8">
  </div>
  <div>
    Security Code<br>
    <input type="text" data-omise="security_code" size="8">
  </div>

  <input type="submit" id="create_token"><input type="button" id="btn_payment" value="Payment"/>
</form>
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
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
</script>
</body>
</html>