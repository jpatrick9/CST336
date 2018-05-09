<?php
    session_start();
    include 'dbConnection.php'; //include '../dbConnection.php';
    $conn = getDatabaseConnection('ygoCards');
    
    // function getAllTypes(){
    //     global $conn;
    //     $sql = "SELECT *
    //             FROM types";
    //     $statement = $conn->prepare($sql);
    //     $statement->execute();
    //     $classes = $statement->fetchAll(PDO::FETCH_ASSOC);
    //     foreach($classes as $cl){
    //         echo "<option value='" . $cl['typeName'] . "'>" . $cl['typeName'] . "</option>";
    //     }
    // }
    
    // function getRarity(){
    //     global $conn;
    //     $sql = "SELECT rarity
    //             FROM types";
    //     $statement = $conn->prepare($sql);
    //     $statement->execute();
    //     $classes = $statement->fetchAll(PDO::FETCH_ASSOC);
    //     foreach($classes as $cl){
    //         echo "<option value='" . $cl['rarity'] . "'>" . $cl['rarity'] . "</option>";
    //     }
    // }
    
    function getItems() {
    global $conn;
    $namedParameters = array();
    
    
    $sql = "SELECT * 
            FROM cards 
            WHERE 1"; 
    
    // if($_GET['typeName']=="" || $_GET['storeSearch']=="")
    // {
    //     echo "Please fill in fields!";
    //     return;
    // }
    
    // if(isset($_GET['submit'])) {
    //     if (isset($_GET['storeSearch'])) {
    //         $sql .= " AND itemName LIKE :itemName";
    //         $namedParameters[':itemName'] = "%" . $_GET['storeSearch'] . "%";
    //     }
    //     if (isset($_GET['typeType'])) {
    //         $sql .= " AND typeName = :typeName ";
    //         $namedParameters[':typeName'] = $_GET['typeType'];
    //     }
    //      if (isset($_GET['raritycard'])) {
    //         $sql .= " AND cardRarity = :rarity ";
    //         $namedParameters[':rarity'] = $_GET['raritycard'];
    //     }

    //     if ($_GET['sort'] == 'desc') {
    //         $sql .= " ORDER BY itemName desc";
    //     }
    //     if ($_GET['sort'] == 'asc') {
    //         $sql .= " ORDER BY itemName asc";
    //     }
    // }
            
    
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($records as $r) {
        echo "<div class='Yugioh'>";
        echo    "<details>";
        echo        "<summary>" . $r['itemName'] . "</summary>";
        echo        "<p> Category: " . $r['typeName'] . "</p>";
        echo        "<p> Description: ". $r['description']."</p>"; 
        echo        "<td><img src='" . $r['cardImage'] . "'></td>";
        echo        "<form id= 'ygoEditForm' action='editCard.php' method='post'>";
        echo            "<input type='hidden' name='val' value='".$r['itemName']."'>";
        echo            "<input type='hidden' name='ygoIdVal' value='".$r['cardId']."'>";
        echo            "<input type='hidden' name='ygoDescription' value='".$r['description']."'>";
        echo            "<input type='hidden' name='ygoImage' value='".$r['cardImage']."'>";
        echo            "<input type='hidden' name='ygoTypeName' value='".$r['typeName']."'>";
        echo            "<input type='hidden' name='ygoRarity' value='".$r['cardRarity']."'>";
        echo            "<input type='hidden' name='ygoPrice' value='".$r['price']."'>";
        echo            "<input type='hidden' name='ygoQuantity' value='".$r['quantityAvailable']."'>";
        echo            "<input id='ygoEditButton' type='submit' value='Edit' class='btn btn-warning' style='position:relative; top:-10px'>";
        echo        "</form>";
        echo        "<form id='ygoDeleteForm' method='post'";
        echo            "<input type='hidden' name='val' value='".$r['itemName']."'>";
        echo            "<input type='hidden' name='ygoIdVal' value='".$r['cardId']."'>";
        echo            "<input id='ygoDeleteButton' type='submit' value='Delete' class='btn btn-danger' style='position:relative; top:-10px'>";
        echo        "</form>";
        echo    "</details>";
        echo "</div>";
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Yugioh Card List</title>
        <!--<p>insert description</p>-->
        
        <style>
            /*styling goes here*/
        </style>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="styles.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/adminProfile.js"></script>
     </head>
    <body>
        <h1 class="text-center">Yugioh Card List</h1>
<!--        <a href="checkout.php">Shopping Cart</a>-->
<!--        <form>-->
<!--<fieldset style='border-radius:35px;-->
<!--                             width:300px;-->
<!--                             margin: 0 auto;'>            <input type="text" name="storeSearch" placeholder="Search Product">-->
<!--            <select name="typeType">-->
<!--                <option disabled selected value value>Choose a type</option>-->
<!--                -->
<!--            </select></br>-->
            
<!--            <select name="raritycard">-->
<!--                <option disabled selected value value>Choose a rarity</option>-->
<!--                -->
<!--            </select></br>-->
            

<!--            Sort Products By:</br>-->
<!--            <select name="sort">-->
<!--                <option value="desc">Descending</option>-->
<!--                <option value="asc" selected>Ascending</option>-->
<!--            </select>-->
<!--            <input type="submit" name="submit" value="Search!">-->
<!--            </fieldset>        -->
<!--        </form>-->
        <?=getItems()?>
    </body>
</html>