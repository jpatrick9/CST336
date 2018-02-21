<!DOCTYPE html>
<html>
    <head>
        
        <title> Homework 2 </title>
        <link href="css/style.css" rel="stylesheet" type

    </head>
    <body>
        <header>
            
            
            <h1>Rock-Paper-Scissors Simulator! </h1>
            <h3>Best two out of three wins!</h3>
            
            <br />
            
            <div id="arena">
                
                <section>
                    
                </section>
                
                <section>
                    
                </section>
                
            </div>
            
            
        </header>

    </body>
</html>

<?php
    $left = array();
    $right = array();
    $leftwins = array();
    $rightwins = array();
    
    for($i=0;$i<3;$i++){
        //array_push($left[i], rand(0,2));
        //array_push($right[i], rand(0,2));
        
        $left[i] = rand(0,2);
        $right[i] = rand(0,2);
        //ROCK is 0, SCISSORS is 1, PAPER is 2
        
        
        switch ($left[i]){
                case 0: 
                    echo "<img src= 'img/rock.png'/>";
                    break;
                case 1: 
                    echo "<img src= 'img/scissors.png'/>";
                    break;
                case 2: 
                    echo "<img src= 'img/paper.png'/>";
                    break;
            }
            
        switch ($right[i]){
                case 0: 
                    echo "<img 'src= img/rock.png'/>";
                    break;
                case 1: 
                    echo "<img 'src= img/scissors.png'/>";
                    break;
                case 2: 
                    echo "<img 'src= img/paper.png'/>";
                    break;
            }    
        
        if(($left[i]==0 && $right[i]==0) || ($left[i]==1 && $right[i]==1) || ($left[i]==2 && $right[i]==2)){
            
            echo "<h3> It's a draw! </h3>";
        }
        
        if(($left[i]==0 && $right[i]==1) || ($left[i]==1 && $right[i]==2) || ($left[i]==2 && $right[i]==0)){
            echo "<h3> Lefty wins! </h3>";
            $leftwins[i]=1;
        }
        
        if(($right[i]==0 && $left[i]==1) || ($right[i]==1 && $left[i]==2) || ($right[i]==2 && $left[i]==0)){
            echo "<h3> Righty wins! </h3>";
            $rightwins[i]=1;
        }
        
        
        
    }
        
        if(array_sum($rightwins) > array_sum($leftwins)){
            echo "<h3> Righty won more games! </h3>";
        }
        
        if(array_sum($leftwins) > array_sum($righttwins)){
            echo "<h3> Lefty won more games! </h3>";
        }
        
        /*
        if(($rightwins) > ($leftwins)){
            echo "<h3> Righty won more games! </h3>";
        }
        
        if(($leftwins) > ($rightwins)){
            echo "<h3> Lefty won more games! </h3>";
        }
        */
?>

