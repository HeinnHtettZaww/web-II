	<?php include("header.php"); ?>

	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="row" id="nav_second">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-10" >
			<ul class="nav nav-pills">
	           <li role="presentation"><a href="" class="nav_text">Purchase Order </a></li>
	           <li role="presentation"><a href="receiving_form.php" class="nav_text">Reciev Order</a></li>
	           <li role="presentation"><a href="supplier_list.php" class="nav_text">Supplier List</a></li>
	          <li role="presentation"><a href="supplier_report.php" class="nav_text">Suppliers Reports</a></li>
     		</ul>
		</div>
	</div>

	<div class="row" style="background-color: #f2f2f2">
		<div class="col-sm-6">
		<h2 id="h2">Suppliers Report</h2>
		</div>
		<div class="col-sm-6">	
			<div class="right">
				<ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="#">Print</a></li>
				  <!-- <li role="presentation"><a href="#">Save & Submit</a></li>
				  <li role="presentation"><a href="#">Save and New</a></li> -->
				</ul>
			</div>
		</div>
	</div>
	<br>
	<hr>

	<br>
	<div class="container">
		<div class="jumbotron">
			<h5>1. General Information</h5>
			<div class="row">
				<div class="col-sm-12">
					<table  id="purchase_order_table"  style = "width:100%">
		  			<thead>
					    <tr>
					      <th>Invoice#</th>
					      <th>Date</th>
					      <th>Supplier Name</th>
					      <th>Total Cost</th>
					      
					    </tr>
					</thead>
					<tbody>
						<tr>
							<td width="10%"></td>
							<td width="20%"></td>
							<td width="30%"></td>
							<td width="10%"></td>
							
						</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
<?php include("footer.php"); ?>