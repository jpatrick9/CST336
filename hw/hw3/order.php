<!DOCTYPE html>
<body background = "images/kitchen.jpg">
    
    <title>Order</title>
    
    <head> 
    <h1>Order</h1>
        <style>
           @import url("css/styles.css");
         
        </style>
    </head>
    

<p>Please enter your choices along with your phone number and your name. 
Press submit to finish order. All orders will take a week to process and two to be deliver.</p>

<?php


?>

    <h3>Cooking Accessories</h3>
    <form action="finish.php" method="get">
        
        <div class="dropdown style">
        <select id="selectype" name="type">
        <option value = "">Select</option>
        <option value="full">Pans</option>
        <option value="cut">Knives</option>
        </select>
        
        
        </br> 
        
        <select id="selectype" name="brand">
        <option value="">Select</option>
        <option value="taylor">Taylor</option>
        <option value="takamine">Takamine</option>
        <option value="gibson">Gibson</option>
        <option value="martin">Martin</option>
        <option value="ibanez">Ibanez</option>
        <option value="fender">Fender</option>
        </select>
        
        </br> 
        <fieldset>
            <legend>Select purchase type:</legend>
        <input type="radio" name="strings" value="pans"> Rent<br>
        <input type="radio" name="strings" value="Knives"> Buy<br>
        </fieldset>
        
        <div/>
        
        
        </br> 

        Phone Number:<input type="text" name="phone-number" />
        </br> 
        </br> 
        Name: <input type="text" name="name"/>
        </br> 
        </br> 
        <input type="submit" value="Submit" />
    </form>
</body>

</html>