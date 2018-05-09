<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Profile Page</title>

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
		    <ul class="nav navbar-nav navbar-left">
                    <li><a href="main.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="reports.php" id="reportsLink"><span class="glyphicon glyphicon-envelope"></span>Reports</a></li>
            </ul>
		    <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
            </ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 text-center">
            <img id="ygo" src="img/1.png" alt="Yu-Gi-Oh!" style="height:225px;width:200px">
			<a href="addYugiCard.php" class="btn btn-success">Add</a>
				
			<a href="ygoCardList.php" type="button" class="btn btn-warning">
				Edit
			</a> 
			<a href="ygoCardList.php" type="button" class="btn btn-danger">
				Delete
			<a>
		</div>
		<div class="col-md-6 text-center">
			<img id="pkmn" src="img/2.png" alt="Pokemon" style="height:225px;width:200px">
			<a href="addPokeCard.php" class="btn btn-success">Add</a>
				
			<a href="pokeCardList.php" type="button" class="btn btn-warning">
				Edit
			</a> 
			<a href="pokeCardList.php" type="button" class="btn btn-danger">
				Delete
			</a>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>