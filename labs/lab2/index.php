<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        
        <div id="main">
            <!-- <img src="img/cherry.png" alt="cherry" title="Cherry" width="70"/> -->
            <?php
            
            include 'inc/functions.php';
            play();
            
            /*
            $randomValue1 = rand(0,2);
            displaySymbol($randomValue1);
            $randomValue2 = rand(0,2);
            displaySymbol($randomValue2);
            $randomValue3 = rand(0,2);
            displaySymbol($randomValue3);
            */
            ?>
            
            <form>
                <input type="submit" value="Spin!"/>
            </form>
        </div>
    </body>
</html>