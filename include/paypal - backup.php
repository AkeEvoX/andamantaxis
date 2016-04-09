<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="frmpaypal">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="o_sinbiz@hotmail.com">
<input type="hidden" name="return" value="http://www.andamantaxis.com/confirm_paypal.php?id=<?php echo $reserv_id; ?>">
<input type="hidden" name="cancel_return" value="http://www.andamantaxis.com/cancel_paypal.php?id=<?php echo $reserv_id; ?>">
<input type="hidden" name="item_name" value="Andaman"><input type="hidden" name=" & item_number & " value="<?php echo $reserv_id; ?>">
<input type="hidden" name="amount" value="<?php echo $grandtotal; ?>">
<input type="hidden" name="currency_code" value="THB">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="no_shipping" value="0">
<input type="hidden" name="undefined_quantity" value="0">
<input type="hidden" name="rm" value="2">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/x-click-but23.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"></form>