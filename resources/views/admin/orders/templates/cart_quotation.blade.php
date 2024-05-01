<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Quotation</title>

		<style>
            .heading {
                line-height:40px;
                font-size:16px;
            }
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 10px;
				/* border: 1px solid #eee; */
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 14px;
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
				padding-top:15px;
				font-size:1.1rem;
				font-weight:bold;
			}
          
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<header>
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="4">
						<table>
							<tr>
								<td class="title">
                                    <div style="float:left">
                                    <img src="{{$logo}}" style="width: 75%; max-width: 300px" /><br>
                                    </div>
                                    <div style="text-align:left;font-size:25px;padding-top:35px;">
                                    <b></b>
                                </div>
									
								</td>

								<td>														
                                    Printed On: {{date('Y-m-d H:i:s')}}
								</td>
							</tr>
						</table>
					</td>
				</tr>
		</table>
		</header>
		<table cellpadding="0" cellspacing="0">
				<br><br><br><br><br>
				
				<tr class="details">
					<td colspan="3">
					{{date('Y-m-d')}} <br>
					Mr./Ms./Mrs. {{$quotation->customer_name}} <br>
					Company : {{$quotation->company_name}} <br>
					Address : {{$quotation->address}} <br>
					Email : {{$quotation->email_address}}
					</td>

					<td style="text-align:right;">Company name, <br>Address Line 1 Address Line 2, <br>City,<br>Country, <br>Tel : 0000000000, <br>Email : admin@gmail.com</td>
				</tr> 

				<tr class="details">
					<td colspan="4" style="text-align:center;">
					<h3>Quotation Reference - {{$quotation->reference_number}}</h3>
					</td>

				</tr> 

				<tr class="details">
					<td colspan="4">
					Dear Valued Customer, <br><br>

					Thank you for considering Wayamba Agro Exports Co. (Pvt) Ltd as the preferred partner for your next technology purchase. We are continually committed to provide you with the most convenient customer experience
					through our online platform. We are pleased to offer you the below quotation for the selected product/s of your choice. Quotation terms and conditions are as below for your consideration.

					<br><br>

					<b>
						<ul>
							<li>The prices offered is based on availabiity and pricing as available on the date of quotation.</li>
							<li>The quoted price is net payable including all applicable taxes as at quotation date.</li>
							<li>The prices are based on cash on pickup at our designated stores</li>
							<li>Availability and prices are subject to change at the time of final purchase and/or online order placement.</li>
							<li>Quotation is valid only for original generator with valid identification</li>
						</ul>
					</b>

					<br><br>
					Alernative payment options, delivery terms and quality based discounts can be requested by contacting our hotline on 0000000000 or by sending us an e-mail to email@email.com
					
					<br><br>
					Thank you for using Wayamba Agro Exports Co. (Pvt) Ltd and looking forward to serving you. <br>
					Best Regards, <br>
					Wayamba Agro Exports Co. (Pvt) Ltd 

					</td>

				</tr> 


               
				<br>
				<tr class="heading">
					<td style="width:20%;">Quotation Item</td>
					<td style="width:20%; text-align:center;">Unit Price</td>
                    <td style="width:20%; text-align:center;">Quantity</td>
                    <td style="text-align:right;">Sub Total</td>
				</tr>

                @foreach ($quotation->quotationItems as $quotationItem)

                <tr class="item">
					<td>{{$quotationItem->product_name}}</td>
                    <td style="text-align:center;">{{$commonContent['currencySymbol']['description']}} {{number_format($quotationItem->unit_price,2)}}</td>
                    <td style="text-align:center;">{{$quotationItem['quantity']}}</td>
					<td style="text-align:right;">{{$commonContent['currencySymbol']['description']}} {{number_format(($quotationItem->unit_price * $quotationItem->quantity))}}</td>
				</tr>
                    
                @endforeach
				<br>
				<tr class="heading">
					<td colspan="3">
						Quotation Details</td>

					<td></td>
				</tr>


				<tr class="details">
					<td colspan="3">Quotation Total</td>

					<td style="text-align:right;">{{$commonContent['currencySymbol']['description']}} {{number_format($quotation->quotation_total,2)}}</td>
				</tr>              
                <tr class="details">
					<td colspan="3">Total Weight</td>

					<td style="text-align:right;">{{$quotation->weight}} kg</td>
				</tr>
               
				<tr class="details">
					<td colspan="4" style="text-align:center;">
						<h4 style="color:blue;">Powered by Wayamba Agro Exports Co. (Pvt) Ltd <br> Printed On: {{date('Y-m-d H:i:s')}}</h4>
					</td>
				</tr>

			</table>
		</div>
	</body>
</html>