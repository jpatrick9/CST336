<?php
    if(isset($_POST['ygoIdVal'])){
        try{
            include 'dbConnection.php';
            $conn = getDatabaseConnection('ygoCards');
            $sql = "DELETE FROM cards where cardId = :id";
            $namedParameters = array();
            $namedParameters[':id'] = $_POST['ygoIdVal'];
            $statement = $conn->prepare($sql);
            $statement->execute($namedParameters);
            echo json_encode("Successful delete");
        }
        catch (PDOException $e){
                echo json_encode($sql . "<br>" .$e->getMessage());
        }
    }
    else if(isset($_POST['pokeIdVal'])){
        try{
            include 'dbConnection.php';
            $conn = getDatabaseConnection('ygoCards');
            $sql = "DELETE FROM pokemon where cardId = :id";
            $namedParameters = array();
            $namedParameters[':id'] = $_POST['pokeIdVal'];
            $statement = $conn->prepare($sql);
            $statement->execute($namedParameters);
            echo json_encode("Successful delete");
        }
        catch (PDOException $e){
                echo json_encode($sql . "<br>" .$e->getMessage());
        }
    }
    
?>