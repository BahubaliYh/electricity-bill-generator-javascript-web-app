<!DOCTYPE html>
<html>
<head>
	<title>Electrcity Bill Generator</title>
	<style>
		body{
			margin: 0px;
			background: url('bg.jpg');
			background-position: fixed;
			background-size: cover;
			font-family: sans-serif;
			height: 800px;

		}
		.title{
			background-color: rgba(5, 226, 252, .6);
			border-bottom: 5px solid #FC4805  ;
			padding: 5px;
			margin-bottom: 30px;
			text-transform: uppercase;
			font-size: 20px;
		}
		.container{
			text-align: center;
			margin: auto;
		}
		.input_form input{
			height: 35px;
			width: 200px;
			margin: 10px;
			border:none;
		}
		.input_form{
			background-color: rgba(32, 33, 33, .6);
			padding: 20px;
			width: 45%;
			margin: auto;
			border-bottom: 5px solid #0572FC;
			border-radius: 5px;
			color: white;
		}
		.btn{
			background: #0572FC;
			color: white;
			font-size: 17px;
		}
		.btn:hover{
			cursor: pointer;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="title">
		<h1>Electricity Bill Genarator</h1>
	</div>		
	<div class="input_form">
		<form action="billProcess.php" method="post">
		<table>
			<tr>
				<td>
					<label>Enter the Number Of Fans</label>
				</td>
				<td>
					<input type="number" name="fans" value="0" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Enter the watts per fan</label>
				</td>
				<td>
					<input type="number" name="Wfan"  value="0">
				</td>
			</tr>
			<tr>
				<td>
					<label>Enter the Number Of Bulbs</label>
				</td>
				<td>
					<input type="number" name="bulbs" value="0">
				</td>
			</tr>
			<tr>
				<td>
					<label>Enter the watts per Bulb</label>
				</td>
				<td>
					<input type="number" name="Wbulb" value="0">
				</td>
			</tr>
			<tr>
				<td>
					<label>Enter the Number Of Laptops</label>
				</td>
				<td>
					<input type="number" name="laptops" value="0">
				</td>
			</tr>
			<tr>
				<td>
					<label>Enter the watts per Laptop</label>
				</td>
				<td>
					<input type="number" name="Wlaptops" value="0">
				</td>
			</tr>
			<tr>
				<td>
					<label>Enter the Number Of Tvs</label>
				</td>
				<td>
					<input type="number" name="tv" value="0">
				</td>
			</tr>
			<tr>
				<td>
					<label>Enter the watts per Tv</label>
				</td>
				<td>
					<input type="number" name="Wtv" value="0">
				</td>
			</tr>
			<tr>
				<td>
					<label>Enter the Number Of Hours Usage per day</label>
				</td>
				<td>
					<input type="number" name="hours" value="0">
				</td>
			</tr>
		</table>
		<input type="submit" value="Generate Bill" class="btn">
		</form>

	</div>
</div>
</body>
</html>