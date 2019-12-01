<style>

 .info_label {
	font-size:8pt;
	/*font-weight:bold; */
	font-family:tahoma,sans-serif,Calibri;
 }
 
 .info_customer {
	 font-size:8pt;
	 font-family:Calibri;
 }
 
 .title_table {
	 font-size:8pt;
	 font-weight:bold;
	 font-family:Calibri;
	 color:#04738A
 }
 
 .line_bottom {
	 border-bottom:1px solid #C0C0C0;
 }
 
 .line_right {
	 border-right:1px solid #C0C0C0;
 }
 
 .text_table {
	 font-size:8pt;
	 font-family:Calibri;
 }
 
 .bg_blue {
	 background-color:#B2DFEA;
	 
	 /*background-color:#91E1F1; */
	 
 }
 .font_blue { color:#04738A }
 .remark_info { padding-left:15px ; }
 
 .remark_info li {
	 padding-left:-10px;
 }
 
</style>
<div style='border:0px solid #C0C0C0;width:800px;'>
<body >
<table width="100%" style="border-spacing: 0;border:0px solid #C0C0C0; " cellpadding="0" >
<tr >
	<td height="120px"  width="65%" style="border-bottom:0px solid #C0C0C0;text-align:center;" >
		<img src='https://www.andamantaxis.com/images/logo.jpg' align="middle" ; style="display:block;margin-left:auto;margin-right:auto;" />
	</td>
	<td width="35%" style="text-align:center;border-bottom:0px solid #C0C0C0; " >
		<label style="font-size:14pt; font-weight:bold;"><h1>Voucher</h1></label>
	</td>
</tr>
<tr  >
	<td style="text-align:center" height="70px"><label style="font-size:14pt;font-weight:bold;" ><h3>YOUR BOOKING-INFORMATION</h3></label></td>
	<td >
		<p><span class="text_table"><b>Your Booking Number : #bookid</b></span></p>
		<p><span class="text_table"><b>Hotline & What app : +66 97 005 4735<b/></span></p>
	</td>
</tr>
<tr height="50px"  >
	<td width="100%" colspan="2" style="border:1px solid #C0C0C0;">
		<table style="border-collapse: collapse; border-spacing:0;	border:0px;width:100%;">
		<tr class="bg_blue" style="font-size:10pt;">
			<th class="title_table line_right line_bottom" width='150px' height='30px' >Vehicle</th>
			<th class="title_table line_right line_bottom" width='70px' >Date</th>
			<th class="title_table line_right line_bottom" width='80px' >Pickup Time</th>
			<th class="title_table line_right line_bottom"  width="219.5px">From</th>
			<th class="title_table line_bottom" width="219.5px">To</th>
		</tr>
		<tr style="font-size:0.8em;" class="info_customer">
			<td height="30px" class="text_table line_right line_bottom" style="text-align:center;">#vehicle x #unit unit</td>
			<td class="text_table line_right line_bottom" style="text-align:center;">#pickdate</td>
			<td class="text_table line_right line_bottom" style="text-align:center;">#picktime</td>
			<td class="text_table line_right line_bottom" style="text-align:center;">#from</td>
			<td class="text_table line_bottom" style="text-align:center;">#to</td>
		</tr>
		<tr height="30px" style="font-size:0.8em;" >
			<td height="30px" class="title_table line_right line_bottom bg_blue" style="text-align:center;">Hotel Pick up :</td>
			<td colspan="4" class="text_table line_bottom">&nbsp;<span>#hotel_pickup</span></td>
		</tr>
		<tr height="30px" style="font-size:0.8em;" >
			<td height="30px" class="title_table line_right line_bottom bg_blue" style="text-align:center;">Hotel Drop off :</td>
			<td colspan="4" class="text_table line_bottom">&nbsp;<span>#hotel_dropoff</span></td>
		</tr>
		<tr >
			<td height="30px"; class="text_table line_right line_bottom" style="text-align:center;"><b>ADULTS (#adults)<b></td>
			<td colspan="2" class="text_table line_right" ></td>
			<td class="title_table line_right line_bottom bg_blue" style="text-align:center;"><strong>Flight Arrival Number</strong></td>
			<td class="text_table line_bottom" style="border-spacing:5px;text-align:center;">#flight_arrival</td>
		</tr>
		<tr  >
			<td height="30px"; class="text_table line_right line_bottom" style="text-align:center;"><b>CHILDREN (#children)<b></td>
			<td colspan="2" class="text_table" style="border-right:1px solid #C0C0C0;"></td>
			<td class="title_table line_right line_bottom bg_blue" style="text-align:center;"><strong>Flight Departure Number</strong></td>
			<td class="text_table line_bottom" style="border-spacing:5px;text-align:center;">#flight_departure</td>
		</tr>
		<tr >
			<td height="30px"; class="text_table line_right line_bottom" style="text-align:center;"><strong>INFANTS (#infants)</strong></td>
			<td colspan="2" class="text_table line_right" style="text-align:center;">#cash</td>
			<td class="title_table line_right line_bottom bg_blue"  style="text-align:center;"><strong>Customer Name</strong></td>
			<td class="text_table line_bottom" style="text-align:center;">#passenger</td>
		</tr>
		<tr >
			<td height="30px"; class="text_table line_right line_bottom" style="text-align:center;"><strong>Paid Total (THB)</strong></td>
			<td colspan="2" class="text_table line_right line_bottom" ></td>
			<td class="title_table line_right line_bottom bg_blue" style="text-align:center;"><strong>Mobile</strong></td>
			<td class="text_table line_bottom" style="text-align:center;">#mobile</td>
		</tr>
		<tr >
			<td height="30px"; class="text_table line_right line_bottom" style="text-align:center;"><strong>Payment by</strong></td>
			<td colspan="2" class="text_table line_right line_bottom"style="text-align:center;">#payment</td>
			<td class="title_table line_right line_bottom bg_blue" style="text-align:center;" ><strong>Email</strong></td>
			<td class="text_table line_bottom" style="text-align:center;"><span>#email</span></td>
		</tr>
		<tr valign="top">
			<td colspan="5" valign="top" height="70px"  style="width:400px;">
				<strong><span style="color:red">Special Request : <span></strong>
				<span >#reserv_detail</span>
			</td>
		</tr>
		</table>
	</td >
</tr>
<tr >
	<td colspan="2" align="center" height="70px" class="line_bottom" ><label style="font-size:1.5em;font-weight:bold;"> Please printe out this voucher or simply show the staff when you arrive</label></td>
</tr>
<tr >
	<td colspan="2" class="bg_blue" height="30px" >
		&nbsp;<span style="font-size:8pt;font-weight:bold;color:#04738A;">INFORMATION</span>
	</td>
</tr>
<tr >
	<td colspan="2" class="line_bottom" style="padding-top:15px;" >
		<span class="info_label" >
		<ul class="remark_info">
			<li>Meeting points: The driver will be waiting in the arrival hall, holding a sign with your name on it. For picking ups from Resorts, Hotels, Guesthouses, Villas,
			the driver will be waiting in the lobby area. Please ensure that you check in under the same name as under which the booking with us was made.</li>
			<li>The operator reserves its right to cancel the service at departure or charge additional fees in case the booking is amended by the passenger without
			any notification in advance: Ex. Change drop-off point location, extra stops, number of passengers etc.</li>
			<li>The driver can take a photo of you as an evidence that he served you.</li>
			<li>One baggage per pax</li>
			<li style="color:red;">For the route to Hotel in Koh Lanta: If your preferred departure time is after 20:00, you have to pay THB1,500 extra to charter a private ferry to Lanta</li>
			<li>Cancellation within 48 hrs prior to the service date, full amount will be refunded.</li>
			<li>Cancellation within 24 hrs prior to the service date, 50% of full amount will be refunded.</li>
			<li>Cancellation less than 24 hrs prior to the service date and No-Show will be charged at full amount.</li>
			<li>Amendment have to be done at least 24 hrs prior to the service date.</li>
		</ul>
		</span>
	</td>
</tr>
<tr >
	<td  colspan="2" align="center" height="100px">
		<h5 style="font-family:tahoma;">
			Andaman Taxi Company Limited<br/>
			Register Office : 10/44 Sub-District Krabi Noi District Muang Krabi Krabi 81000<br/>
			Email : Contact.anadamantaxis@gmail.com<br/>
			www.andamantaxis.com
		</h5>
	</td>
</tr>
</table>
</body>