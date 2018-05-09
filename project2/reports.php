<?php 
// print_r($_POST);
// echo json_encode(print_r($_POST));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reports Page</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/adminProfile.js"></script>
  </head>
   <body>
        <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">
    		    <a id="reportsButton" href="getReportData.php" class="btn btn-success">Generate Reports</a>
    			<table class="table">
    				<thead>
    					<tr>
    						<th>
    							#
    						</th>
    						<th>
    							Report Type
    						</th>
    						<th>
    							Yugioh
    						</th>
    						<th>
    							Pokemon
    						</th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<td>
    							1
    						</td>
    						<td id="firstReportType">
    							Average Price of Cards
    						</td>
    						<td id="ygoFirstReportAnswer">
    							
    						</td>
    						<td id="pokeFirstReportAnswer">
    							
    						</td>
    					</tr>
    					<tr>
    						<td>
    							2
    						</td>
    						<td id="secondReportType">
    							Total Quantity Of Cards Available
    						</td>
    						<td id="ygoSecondReportAnswer">
    							
    						</td>
    						<td id="pokeSecondReportAnswer">
    							
    						</td>
    					</tr>
    					<tr>
    						<td>
    							3
    						</td>
    						<td id="thirdReportType">
    							Highest Priced Card
    						</td>
    						<td id="ygoThirdReportAnswer">
    							
    						</td>
    						<td id="pokeThirdReportAnswer">
    							
    						</td>
    					</tr>
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
 </html>