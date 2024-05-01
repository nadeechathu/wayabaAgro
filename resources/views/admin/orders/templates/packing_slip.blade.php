<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>{{$order['tracking_number']}}</title>

		<style>
            .heading {
                line-height:30px;
                font-size:16px;
            }
			.invoice-box {
				max-width: 800px;
				/* margin: auto; */
				padding: 10px;
				/* border: 1px solid #eee; */
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 12px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 2px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 10px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 25px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 10px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

            


			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}

			.address-heading {
				padding: top 2px;px;
				font-size:1rem;
				font-weight:bold;
			}
          
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="5">
						<table>
							<tr>
								<td class="title">
                                    <div style="float:left">
                                    <img src="{{$logo}}" style="width: 70%; max-width: 300px" />
                                    </div>
                                    <div style="text-align:left;font-size:20px;padding-top:35px;">
                                    <b>Packing Slip</b>
                                </div>
									
								</td>

								<td>
									Slip For Order #: {{$order['tracking_number']}}<br />									
									Order Date: {{$order['created_at']}} <br/>
                                    Printed On: {{date('Y-m-d H:i:s')}}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="5">
						<table>
							<tr>
								<td>

                                    <p class="address-heading">Shipping Address</p><hr/>
									{{$order['shippingAddress']['first_name']}} {{$order['shippingAddress']['last_name']}}<br />
									{{$order['shippingAddress']['phone']}}<br />
                                    {{$order['shippingAddress']['email']}}<br/>
                                    {{$order['shippingAddress']['company']}}<br/>
                                    {{$order['shippingAddress']['address_line1']}} {{$order['shippingAddress']['address_line2']}}<br/>                                    
                                    {{$order['shippingAddress']['city']}}<br/>
                                    {{$order['shippingAddress']['zip']}}<br/>
                                    {{$order['shippingAddress']['country']}}
                                    
								</td>
                                
								<td style="text-align:left;">
									<p class="address-heading">Billing Address</p><hr/>
                                    {{$order['billingAddress']['first_name']}} {{$order['billingAddress']['last_name']}}<br />
									{{$order['billingAddress']['phone']}}<br />
                                    {{$order['billingAddress']['email']}}<br/>
                                    {{$order['billingAddress']['company']}}<br/>
                                    {{$order['billingAddress']['address_line1']}} {{$order['billingAddress']['address_line2']}}<br/>                                    
                                    {{$order['billingAddress']['city']}}<br/>
                                    {{$order['billingAddress']['zip']}}<br/>
                                    {{$order['billingAddress']['country']}}
								</td>
                                
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td colspan="4">Payment Method</td>

					<td></td>
				</tr>

				<tr class="details">
					<td colspan="4">Cash On Delivery</td>

					<td>{{$commonContent['currencySymbol']['description']}} {{number_format($order['order_total'],2)}}</td>
				</tr>


                
			</table>
		</div>
	</body>
</html>