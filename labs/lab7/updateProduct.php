<?php
    include 'dbConnection.php';
    
    $connection = getDatabaseConnection("ottermart");
    
    function getCategories($catId) {
    global $connection;
    
    $sql = "SELECT catId, catName from category ORDER BY catName";
    
    $statement = $connection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option  ";
        echo ($record["catId"] == $catId)? "selected": ""; 
        echo " value='".$record["catId"] ."'>". $record['catName'] ." </option>";
    }
}
    
    function getProductInfo()
    {
        global $connection;
        $sql = "SELECT * FROM product WHERE productId = " . $_GET['productId'];
    
        //echo $_GET["productId"];
        
        $statement = $connection->prepare($sql);
        $statement->execute();
        $record = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    
    if (isset($_GET['updateProduct'])) {
        
        //echo "Trying to update the product!";
        
        $sql = "UPDATE product
                SET productName = :productName,
                    productDescription = :productDescription,
                    productImage = :productImage,
                    price = :price,
                    catId = :catId
                WHERE productId = :productId";
        $np = array();
        $np[":productName"] = $_GET['productName'];
        $np[":productDescription"] = $_GET['description'];
        $np[":productImage"] = $_GET['productImage'];
        $np[":price"] = $_GET['price'];
        $np[":catId"] = $_GET['catId'];
        $np[":productId"] = $_GET['productId'];
                
        $statement = $connection->prepare($sql);
        $statement->execute($np);        

        
    }
    
    
    if(isset ($_GET['productId']))
    {
        $product = getProductInfo();
    }
    
    //print_r($product);
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Product </title>
        <style>
            form {
                display: inline;
            }
            body {
                text-align: center;
                background-color: #58D68D;
                color:red;
                font-size: 125%;
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-position:center;
            }
        </style>
        
    </head>
    <body>
        <h1>Update Product</h1>
        
        <form>
            <a href = "admin.php">Back</a>
            </br>
            </br>
            </br>
            <input type="hidden" name="productId" value= "<?=$product['productId']?>"/>
            Product name: <input type="text" value = "<?=$product['productName']?>" name="productName"><br>
            Description: <textarea name="description" cols = 50 rows = 4><?=$product['productDescription']?></textarea><br>
            Price: <input type="text" name="price" value = "<?=$product['price']?>"><br>
    
            Category: <select name="catId">
                <option>Select One</option>
                <?php getCategories( $product['catId'] ); ?>
            </select> <br />
            Set Image Url: <input type = "text" name = "productImage" value = "<?=$product['productImage']?>"><br>
            <input type="submit" name="updateProduct" value="Update Product">
            
        </form>
    </body>
</html>