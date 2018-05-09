<?php
    if(isset($_POST['ygoIdVal'])){
        $editCardType = 'Edit Yugioh Card';
        $editCard = 'Yugioh';
        try{
            include 'dbConnection.php';
            $conn = getDatabaseConnection('ygoCards');
            $sql = "SELECT * FROM cards where cardId = :id";
            $namedParameters = array();
            $namedParameters[':id'] = $_POST['ygoIdVal'];
            $statement = $conn->prepare($sql);
            $statement->execute($namedParameters);
            // echo json_encode("Successful delete");
            $record = $statement->fetchAll(PDO::FETCH_ASSOC);
            // echo json_encode("Successful gathering of ygoVals");
            // print_r($record);
        }
        catch (PDOException $e){
                echo json_encode($sql . "<br>" .$e->getMessage());
        }
    }
    else if(isset($_POST['pokeIdVal'])){
        try{
            $editCardType = 'Edit Pokemon Card';
            $editCard = 'Pokemon';
            include 'dbConnection.php';
            $conn = getDatabaseConnection('ygoCards');
            $sql = "SELECT * FROM pokemon where cardId = :id";
            $namedParameters = array();
            $namedParameters[':id'] = $_POST['pokeIdVal'];
            $statement = $conn->prepare($sql);
            $statement->execute($namedParameters);
            // echo json_encode("Successful delete");
            $record = $statement->fetchAll(PDO::FETCH_ASSOC);
            // echo json_encode("Successful gathering of pokeVals");
            // echo json_decode($record, false);
            // print_r($record);
        }
        catch (PDOException $e){
                echo json_encode($sql . "<br>" .$e->getMessage());
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $editCardType?></title>

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
			<form role="form" id="updateForm" action="updateCard.php" method="post" >
				<div class="form-group">
					 
					<label for="itemName">
						Item Name
					</label>
					<input type="text" class="form-control" id="itemName" name="itemName" value="<?php echo $record[0]['itemName'];?>" />
				</div>
				<div class="form-group">
					 
					<label for="description">
						Item Description
					</label>
					<input type="text" class="form-control" id="description" name="description" value="<?php echo $record[0]['description'];?>"/>
				</div>
				<div class="form-group">
					 
					<label for="itemPic">
						Item Picture (URL)
					</label>
					<input type="text" class="form-control" id="itemPicURL" placeholder="Img URL" name="itemPicURL" value="<?php echo $record[0]['cardImage'];?>"/>
				</div>
				<div class="form-group">
					 
					<label for="typeName">
						Type Name
					</label>
					<select name="typeName">
					    <option value="monster" <?php if($record[0]['typeName']=='monster') echo "selected='selected'";?>>Monster</option>
                        <option value="spell" <?php if($record[0]['typeName']=='spell') echo "selected='selected'";?>>Spell</option>
                        <option value="trap" <?php if($record[0]['typeName']=='trap') echo "selected='selected'";?>>Trap</option>
					</select>
				</div>
				<div class="form-group">
					 
					<label for="cardRarity">
						Card Rarity Level
					</label>
					<select name="cardRarity">
					    <option value="common" <?php if($record[0]['cardRarity']=='common') echo "selected='selected'";?>>Common</option>
                        <option value="rare" <?php if($record[0]['cardRarity']=='rare') echo "selected='selected'";?>>Rare</option>
                        <option value="super rare" <?php if($record[0]['cardRarity']=='super rare') echo "selected='selected'";?>>Super Rare</option>
					</select>
				</div>	
				<div class="form-group">
					 
					<label for="price">
						Item Price 
					</label>
					<input type="text" placeholder="1.0" step="0.01" name="price" value="<?php echo $record[0]['price'];?>" >
				</div>
				<div class="form-group">
					 
					<label for="quantity">
						Item Quantity
					</label>
					<input type="text" placeholder="1" step="1" name="quantity" value="<?php echo $record[0]['quantityAvailable'];?>">
				</div>
				<input type="hidden" name="cardId" value="<?php echo $record[0]['cardId'];?>"/>
				<input type="hidden" name="cardType" value="<?php echo $editCard;?>"/>
				<input type="submit" name="updateButton" value="Update Card">
					
				</input>
			</form>
		</div>
	</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>