<?php
    if (isset($_POST['addForm'])) {
        // code...
        include 'dbConnection.php';
        $conn = getDatabaseConnection('ygoCards');
        try{
            $sql = 'INSERT INTO cards (itemName, description, cardImage, typeName, cardRarity) VALUES (:itemName, :description, :cardImage, :typeName, :cardRarity)';
            $namedParameters = array();
            $namedParameters[':itemName'] = $_POST['itemName'];
            $namedParameters[':description'] = $_POST['description'];
            $namedParameters[':cardImage'] = $_POST['itemPicURL'];
            $namedParameters[':typeName'] = $_POST['typeName'];
            $namedParameters[':cardRarity'] = $_POST['cardRarity'];
            // $namedParameters[':price'] = $_POST['price'];
            // $namedParameters[':quantityAvailable'] = $_POST['quantityAvailable'];
            $statement = $conn->prepare($sql);
            $result = $statement->execute($namedParameters);
            if($result){
            	echo "Success";
            }
            echo $result;
            // header('Location: adminProfile.php');
        }
        catch(PDOException $e){
            echo json_encode($sql . "<br>" . $e->getMessage());
        }
        // try{
        //     $sql2 = 'SHOW COLUMNS FROM cards';
        //     $statement2 = $conn->prepare($sql2);
        //     $statement2->execute();
        //     $record = $statement2->fetchALL();
        //     print_r($record);
        // }
        // catch(PDOException $er){
        //     echo json_encode($sql2 . "<br>" . $er->getMessage());
        // }
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Yugioh Card!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" method="post">
				<div class="form-group">
					 
					<label for="itemName">
						Item Name
					</label>
					<input type="text" class="form-control" id="itemName" name="itemName" />
				</div>
				<div class="form-group">
					 
					<label for="description">
						Item Description
					</label>
					<input type="text" class="form-control" id="description" name="description" />
				</div>
				<div class="form-group">
					 
					<label for="itemPic">
						Item Picture (URL)
					</label>
					<input type="text" class="form-control" id="itemPicURL" placeholder="Img URL" name="itemPicURL"/>
				</div>
				<div class="form-group">
					 
					<label for="typeName">
						Type Name
					</label>
					<select name="typeName">
					    <option value="monster">Monster</option>
                        <option value="spell">Spell</option>
                        <option value="trap">Trap</option>
					</select>
				</div>
				<div class="form-group">
					 
					<label for="cardRarity">
						Card Rarity Level
					</label>
					<select name="cardRarity">
					    <option value="common">Common</option>
                        <option value="rare">Rare</option>
                        <option value="super rare">Super Rare</option>
					</select>
				</div>	
				<!--<div class="form-group">-->
					 
				<!--	<label for="price">-->
				<!--		Item Price -->
				<!--	</label>-->
				<!--	<input type="text" placeholder="1.0" step="0.01" name="price">-->
				<!--</div>-->
				<!--<div class="form-group">-->
					 
				<!--	<label for="quantity">-->
				<!--		Item Quantity-->
				<!--	</label>-->
				<!--	<input type="text" placeholder="1" step="1" name="quantity">-->
				<!--</div>-->
				<input type="submit" name="addForm" value="Add Card">
					
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