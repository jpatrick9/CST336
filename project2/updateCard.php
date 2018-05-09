<?php
    // print_r($_POST);
    include 'dbConnection.php';
    $conn = getDatabaseConnection('ygoCards');
    if(isset($_POST['cardType']) == 'Yugioh'){
        try {
            $sql = "UPDATE cards SET itemName = :itemName, description = :description, cardImage = :cardImage, typeName = :typeName, cardRarity = :cardRarity, price = :price, quantityAvailable = :quantityAvailable where cardId = :cardId";
            $namedParameters = array();
            $namedParameters[':itemName'] = $_POST['itemName'];
            $namedParameters[':description'] = $_POST['description'];
            $namedParameters[':cardImage'] = $_POST['itemPicURL'];
            $namedParameters[':typeName'] = $_POST['typeName'];
            $namedParameters[':cardRarity'] = $_POST['cardRarity'];
            $namedParameters[':price'] = $_POST['price'];
            $namedParameters[':quantityAvailable'] = $_POST['quantity'];
            $namedParameters[':cardId'] = $_POST['cardId'];
            $statement = $conn->prepare($sql);
            $result = $statement->execute($namedParameters);
            if($result){
                header('Location: ygoCardList.php');
            }
        } catch (PDOException $e) {
            echo json_encode($sql . "<br>" .$e->getMessage());
        }
    }
    else if(isset($_POST['cardType']) == 'Pokemon'){
        try {
            $sql = "UPDATE pokemon SET itemName = :itemName, description = :description, cardImage = :cardImage, typeName = :typeName, cardRarity = :cardRarity, price = :price, quantityAvailable = :quantityAvailable where cardId = :cardId";
            $namedParameters = array();
            $namedParameters[':itemName'] = $_POST['itemName'];
            $namedParameters[':description'] = $_POST['description'];
            $namedParameters[':cardImage'] = $_POST['itemPicURL'];
            $namedParameters[':typeName'] = $_POST['typeName'];
            $namedParameters[':cardRarity'] = $_POST['cardRarity'];
            $namedParameters[':price'] = $_POST['price'];
            $namedParameters[':quantityAvailable'] = $_POST['quantity'];
            $namedParameters[':cardId'] = $_POST['cardId'];
            $statement = $conn->prepare($sql);
            $result = $statement->execute($namedParameters);
            if($result){
                header('Location: pokeCardList.php');
            }
        } catch (PDOException $e) {
            echo json_encode($sql . "<br>" .$e->getMessage());
        }
    }
?>