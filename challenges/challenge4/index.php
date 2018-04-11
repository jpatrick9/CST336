<?php
session_start();

if(isset($_SESSION)){
    
}

$number = rand(1,100);

$guessCount = 0;
$guesses = array();

if($guesses[$guessCount] == $number){
    echo "You guessed the number " . $number . " in " . $guessCount . " attempts ";
}





        
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <form action = "index.php" method = "post">
        
        Your guess: <input type= "int" name = "guess"><br>
        
        <form><br>
        $field = <input type="int" guess ="guess"/>;

        <input type="submit" name="Guess" value="Guess" onclick="Guess()" /> <br>
        <input type="submit" name="Give Up" value="Give Up" onclick="giveUp()" />
        <input type="submit" name="Play Again" value="Play Again" onclick="playAgain()" />

</form>

        <form>
            
             <br />
            
             
        </form>
        
        </form>
        
    </body>
</html>