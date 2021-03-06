<?php
session_start();
?>
<!DOCTYPE HTML>
<HTML>

<HEAD>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<META http-equiv="X-UA-Compatible" content="IE=8">
	<TITLE>Transco Receipt</TITLE>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<script type="text/javascript">
		function printlayer(layer) {
			var generator = window.open(",'name,");
			var layertext = document.getElementById(layer);
			generator.document.write(layertext.innerHTML.replace("Print me"));
			generator.document.close();
			generator.print();
			generator.close();

		}
	</script>
</HEAD>

<BODY>

	<DIV id="page_1">
		<DIV id="p1dimg1">

			<DIV class="dclr"></DIV>
			<a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Print Receipt</a>
			<div id="div-id-name">
				<TABLE class="table table-bordered">
					<thead class="thead-dark">
						<tr>
						<th>Name</th>
						<th>Source</th>
						<th>Destination</th>
						<th>Amount</th>
					</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $_SESSION['username']; ?></td>
							<td><?php echo $_SESSION['FROM']; ?></td>
							<td><?php echo $_SESSION['TO']; ?></td>
							<td>100</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td>Total Amount</td>
							<td></td>
							<td></td>
							<td>N 100</td>
						</tr>
					</tfoot>
				</TABLE>
			</div>
            <a href="UserPage.php">Go Back</a>
		</DIV>
	</DIV>
</BODY>

</HTML>