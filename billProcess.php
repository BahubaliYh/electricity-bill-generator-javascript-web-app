<?php

//Getting All Inputs from User 
	$fans = $_POST['fans'];
	$Wfan = $_POST['Wfan'];
	$bulbs = $_POST['bulbs'];
	$Wbulb = $_POST['Wbulb'];
	$laptops = $_POST['laptops'];
	$Wlaptops = $_POST['Wlaptops'];
	$tv = $_POST['tv'];
	$Wtv = $_POST['Wtv'];
	$hours = $_POST['hours'];

//Adding all usage Per Hour
	$total_usage_perHour= ($fans*$Wfan)+($bulbs*$Wbulb)+($laptops*$Wlaptops)+($tv*$Wtv);
	$total_usage_perDay = $total_usage_perHour*$hours;
	$total_usage_Month= $total_usage_perDay * 30;
	$Total_usage_KWH= $total_usage_Month/1000;
	$total_bill= $Total_usage_KWH * 6;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Electrcity Bill Generator</title>
	<style>
		body{
			margin: 0px;
			background: url('bg2.jpg');
			background-size: cover;
			font-family: sans-serif;
		}
		.title{
			background-color: rgba(5, 226, 252, .6);
			border-bottom: 5px solid #FC4805  ;
			padding: 5px;
			margin-bottom: 8%;
			text-transform: uppercase;
			font-size: 20px;
		}
		.container{
			text-align: center;
			margin: auto;
		}
		.input_form{
			background-color: rgba(250, 250, 250, .7);
			padding: 10px;
			width: 90%;
			margin: auto;
			border-bottom: 5px solid #0572FC;
			border-radius: 5px;
		}
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}	

		td, th {
		    border: 1px solid white;
		    text-align: left;
		    padding: 12px;
		}
		#item{
			color: #0285AC;
			font-weight: bold;
		}
		#res{
			font-size: 25px;
			font-weight: bold;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="title">
		<h1>Electricity Bill Genarator</h1>
	</div>		
<div class="input_form">
	<h1 style="color: #06AB12;font-size: 50px;">Your Bill Is</h1>
	<p style="float: right;margin-top: -90px;">Per Unit: <span style="color: blue;">6 rupees</span></p>
<table>
  <tr>
    <th>E-Items Name</th>
    <th>No.Of Items</th>
    <th>Watts Per Item</th>
    <th>No.Of Hours</th>
    <th>Total Usage/Hr</th>
    <th>Total Usage/Day</th>
    <th>Total Usage/Month</th>
    <th>Total Bill</th>
  </tr>
  <tr>
    <td id="item">Fans</td>
    <td><?php echo "$fans"; ?></td>
    <td><?php echo "$Wfan"; ?> W</td>
    <td rowspan="4" id="res"><?php echo "$hours"; ?> Hr</td>
    <td rowspan="4" id="res"><?php echo "$total_usage_perHour"; ?> W</td>
    <td rowspan="4" id="res"><?php echo "$total_usage_perDay"; ?> W</td>
    <td rowspan="4" id="res"><?php echo "$Total_usage_KWH"; ?> KW</td>
    <td rowspan="4" id="res"><?php echo "$total_bill"; ?> Rupees</td>
  </tr>
  <tr>
    <td id="item">Bulb</td>
    <td><?php echo "$bulbs"; ?></td>
    <td><?php echo "$Wbulb"; ?> W</td>
  </tr>
  <tr>
    <td id="item">Tv</td>
    <td><?php echo "$tv"; ?></td>
    <td><?php echo "$Wtv"; ?> W</td>
  </tr>
  <tr>
	<td id="item">Laptop</td>
    <td><?php echo "$laptops"; ?></td>
    <td><?php echo "$Wlaptops"; ?> W</td>
  </tr>
</table>
</div>
</div>
</body>
</html>