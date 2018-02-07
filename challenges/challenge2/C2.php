<?php

    function getRandomColor() {
        
       $card =  rand(1,5);
        $suit = rand(1,4);

switch(card){
    case 1:
        $card = "ten";
        break;
    case 2:
        $card = "jack";
        break;    
    case 3:
        $card = "queen";
        break;    
    case 4:
        $card = "king";
        break;
    case 5:
        $card = "ace";
        break;
        
}


switch(suit){
    case 1:
        $suit = "clubs";
        break;
        case 1:
        $suit = "diamonds";
        break;
        case 1:
        $suit = "hearts";
        break;
        case 1:
        $suit = "spades";
        break;
}

    }


?>


<!DOCTYPE html>
<html>
    
	<head>
	    
        <title>Random Card Game</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    
	</head>
    
	<body>
        
		<header>
            <h2> Random Card Game</h2>
             
        </header>
        
		<br /><br />
        
		<div id="content">
            
            <div id="Human">
                <h4>Human</h4>  
                <?php                
                getRandomColor();
                ?>
                <img src="/cards/" + $suit + "/" + $card + ".png" />
            </div>
            
            <div id="Computer">
                <h4>Computer</h4> 
                <?php
                getRandomColor();
                ?>
                <img src="/cards/" + $suit + "/" + $card + ".png" />
            </div>
        
        </div>
		
        <footer>
            
             
             
        </footer>
        
    </body>
</html>