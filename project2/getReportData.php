<?php
    include 'dbConnection.php';
    $conn = getDatabaseConnection('ygoCards');
    try{
        $sql = "SELECT ROUND(AVG(price),2) FROM cards";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $ygoPrice = $statement->fetch();
        $sql2 = "SELECT ROUND(AVG(price),2) FROM pokemon";
        $statement2 = $conn->prepare($sql2);
        $statement2->execute();
        $pokePrice = $statement2->fetch();
        $sql3 = "SELECT SUM(quantityAvailable) FROM cards";
        $statement3 = $conn->prepare($sql3);
        $statement3->execute();
        $ygoQuantity = $statement3->fetch();
        $sql4 = "SELECT SUM(quantityAvailable) FROM pokemon";
        $statement4 = $conn->prepare($sql4);
        $statement4->execute();
        $pokeQuantity = $statement4->fetch();
        $sql5 = "SELECT itemName, MAX(price) from cards LIMIT 1";
        $statement5 = $conn->prepare($sql5);
        $statement5->execute();
        $ygoMaxCard = $statement5->fetch();
        $sql6 = "SELECT itemName, MAX(price) from pokemon LIMIT 1";
        $statement6 = $conn->prepare($sql6);
        $statement6->execute();
        $pokeMaxCard = $statement6->fetch();
        echo json_encode(array('ygoPrice'=>$ygoPrice,'pokePrice'=>$pokePrice,'ygoQuantity'=>$ygoQuantity,'pokeQuantity'=>$pokeQuantity,'ygoMaxCard'=>$ygoMaxCard,'pokeMaxCard'=>$pokeMaxCard));
    } catch(PDOException $e){
        echo json_encode($sql . "<br>" .$e->getMessage());
    }
?>