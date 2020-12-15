
<!DOCTYPE html>
<html>
<head>
	<style>
		table {
		 
		  border-top: 1px solid black !important;
		  border-bottom: 1px solid black !important;
		  margin-top: 6px;
		  margin-bottom: 6px;
		  width: 302px;
		  border-collapse: collapse;
		  text-align: center;
		}
		#table_border{
			border-bottom: 1px solid black !important;
		}
		body{
			width: 302px !important;
			min-height:550px !important;
			
		}
		td,th{
			padding-top: 2px;
			padding-bottom: 2px;
		}

</style>
</head>
<body>
	<div id="print_width">

		<div style="text-align: center">
			<p style="margin: 5px;">Ocean Blue Wellness @Rajarajeshwari Nagar</p>
			<p style="margin-top: 0px; margin-bottom: 5px;">Bangalore</p>
		</div>
		<div style="border-top: 2px solid black; padding-top:5px;">
			<span>Customer Name</span>
			<span style="margin-left:15px;">{{$data->name}}</span>
		</div>

		<strong>
			<span>Client Temperature</span>
			<span>97 F</span>
		</strong>
		<br>
		<br>

		<div>
			<span>Date:</span>
			<span style="margin-left:85px;">{{$data->created_at}}</span>
		</div>

		<table>
			<tr id="table_border" >
				<th style="text-align:left;">Particular</th>
				<th>Qty</th>
				<th>Rate</th>
				<th style="text-align:right;">Amount</th>
			</tr>
			@foreach($data->services as $service)
			<tr id="table_border">                             
				<td style="text-transform: uppercase; text-align:left;">{{$service->service_description}}</td>
				<td>{{$data->quantity}}</td>
				<td>{{$service->price}}</td>
				<td style="text-align: right;">{{$service->price}}</td>
			</tr>
			@endforeach

			<tr>
				<td  style="text-align:left;">Basicsales Amount:</td>
				<td>1</td>
				<td></td>
				<td style="text-align: right;">{{$data->total_amount}}</td>
			</tr>

			<tr>
				<td style="text-align:left;">Discount:</td>
				<td></td>
				<td></td>
				<td style="text-align: right;">{{$data->total_amount-$data->final_amount}}</td>
			</tr>
			
			<tr>
				<td style="text-align:left;">Sub Total</td>
				<td></td>
				<td></td>
				<td style="text-align: right;">{{$data->final_amount}}</td>
			</tr>
			<tr>
				<td style="text-align:left;">GST TAX</td>
				<td>18%</td>
				<td></td>
				<td style="text-align: right;">{{round($data->final_amount*0.18,2)}}</td>
			</tr>

			<tr style="border-bottom: 1px solid black;">
				<th style="text-align:left;">Net Amount:</th>
				<td></td>
				<td></td>
				<th style="text-align: right;">{{round($data->final_amount+($data->final_amount*0.18),2)}}</th>
			</tr>
			
			<tr>
				<th style="text-align:left;">Bill Amount:</th>
				<td></td>
				<td></td>
				<th style="text-align: right;">{{round($data->final_amount+($data->final_amount*0.18),2)}}</th>
			</tr>

			<tr style="border-bottom: 1px solid black;">
				<th style="text-align:left;">GST Summary:</th>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<th style="text-align:left;">CGST:</th>
				<th style="text-align:left;">9%</th>
				<td></td>
				<th style="text-align: right;">{{round(($data->final_amount+($data->final_amount*0.18))*0.09,2)}}</th>
			</tr>

			<tr>
				<th style="text-align:left;">SGST:</th>
				<th style="text-align:left;">9%</th>
				<td></td>
				<th style="text-align: right;">{{round(($data->final_amount+($data->final_amount*0.18))*0.09,2)}}</th>
			</tr>

		</table>
			
			<div><span>Paid Through:</span><span style="margin-left:30px;">{{$data->payment_type}}</span></div>
			
			<span>In case of any suggestions/complaints</span>
			<div><span>Call: 123456789</span></div>
			<div><span>Mail: info@obw1.com</span></div>
			<!-- <div><strong>FOR FRANCHISEE ENQUIRY</strong><div>
			<div><strong>CONTACT : 9972011222/9108031222</strong><div> -->
			<p style="text-align: right; margin-right: 20px;">Signature</p>
	</div>



</body>
</html>




        
