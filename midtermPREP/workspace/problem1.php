<?php


function shuffleBalls(){
    $order="";
    $evenscore = 0;
    $oddscore = 0;
    $row = (int)$_GET['rows'];
    $col = (int)$_GET['cols'];
    
    if(isset($_GET['order'])){
     $order=$_GET['order'];
    }
    if(isset($_GET['ball8'])){
        $eight = "y";
    }
    if($row==0||$col==0){
        echo "Row and column number must be greater then 0!";
    } else if($row> 4||$col>4){
        echo "Row and column number must be lower then 4!";
    }
    else{
    echo "<table align='center'>";
    echo "<tr>";
    
    for($x=0; $x < $row; $x++){
    
        for($y=0; $y < $col; $y++){
            if($eight=='y'){
                $a=8;
                $eight='n';
            }
            else{
            $a = rand(0,15);
            }
            if($a%2==1){
                echo "<td style='background-color:green;'>";
            }else{
                echo "<td style='background-color:yellow;'>";
            }
             echo "<img src = 'billiards/billiards/$a.png' />";
           
            
            echo "</td>";
            if($a%2==1){
            $oddscore = $oddscore + $a;
            } else{
            $evenscore = $evenscore + $a;
            }
            } 
            echo "</tr>";
        } 
    echo "</table>";
    
    echo "Even Balls Points: ".$evenscore;
    echo "-";
    echo "Odd Balls Points: ".$oddscore;
    
    if($evenscore > $oddscore){
        echo "<br />";
        echo "<h2>Even balls win!</h2>";
    } else if($oddscore > $evenscore){
        echo "<br />";
        echo "<h2>Odd balls win!</h2>";
    } else {
        echo "<br />";
        echo "<h2>Its a tie!</h2>";
    }
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Billiards!</title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
    
    <h1>Billiards: Even vs Odd!</h1>
    <?=shuffleBalls()?>
    <hr>
        <form method="GET">
        <h2>Customize Output</h2>
          Rows: <input type="text" name="rows" size="3" maxlength="2" value="3"/> 
          Columns: <input type="text" name="cols" size="3" maxlength="2" value="3"/>
          (Values must not exceed 4)

          <br /> <br />
          <input type="checkbox" name="ball8" value="y"> Include 8 ball </input>
          <br /> <br />
          
          Order Balls: 
          <input type="radio" name="order" value="a" id="asc"><label for="asc"> Ascending </label>
          <input type="radio" name="order" value="d" id="desc"> <label for="desc">  Descending </label>
          
          <br /> <br />
          
          <input type="submit" value="Display" name="display"/>
          
          </form> 
            
    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="color:#99E999">
      <td>1</td>
      <td>The page includes the basic form elements as in the Program Sample: Text boxes, Checkbox, radio buttons</td>
      <td width="20" align="center">3</td>
    </tr>
    <tr style="color:#ff0000 ">
      <td>2</td>
      <td>When accessing the webpage directly, a 3x3 table with random balls is displayed</td>
      <td width="20" align="center">10</td>
    </tr> 
    <tr style="color:#ff0000 ">
      <td>3</td>
      <td>The balls are NOT duplicated </td>
      <td align="center">5</td>
    </tr>    
	<tr style="color:#99E999">
      <td>4</td>
      <td>Even balls have a yellow background. The cue ball (the white ball) is even </td>
      <td align="center">5</td>
    </tr> 
    <tr style="color:#99E999">
      <td>5</td>
      <td>Odd balls have a green background</td>
      <td align="center">5</td>
    </tr>
    <tr style="color:#99E999">
      <td>6</td>
      <td>The sum of ball values is displayed below the table</td>
      <td align="center">5</td>
    </tr>       
    <tr style="color:#99E999">
      <td>7</td>
      <td>When submitting the form, a table with random balls is created using the custom number of rows and columns</td>
      <td align="center">10</td>
    </tr>  
    <tr style="color:#99E999">
      <td>8</td>
      <td>There is validation for empty number of rows and columns, and rows and columns greater than 4  </td>
      <td align="center">5</td>
    </tr>  
    <tr style="color:#ff0000 ">
      <td>9</td>
      <td>When the  "Include the 8 ball" checkbox is checked, the 8 ball must be displayed within the table, in a random position </td>
      <td align="center">5</td>
    </tr>    
    <tr style="color:#ff0000 ">
      <td>10</td>
      <td>The balls are displayed in ascending order if "Ascending" is checked. </td>
      <td align="center">5</td>
    </tr>        
    <tr style="color:#ff0000 ">
      <td>11</td>
      <td>The balls are displayed in descending order if "Descending" is checked. </td>
      <td align="center">5</td>
    </tr> 
    <tr style="color:#99E999">
      <td>12</td>
      <td>The total number of points of even and odd balls is properly displayed. </td>
      <td align="center">5</td>
    </tr>  
    <tr style="color:#99E999">
      <td>13</td>
      <td>The right winner (even balls, odd balls, or tie) is displayed. </td>
      <td align="center">5</td>
    </tr>              
    <tr style="color:#99E999">
      <td>14</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b>50</b></td>
    </tr> 
  </tbody></table>

          
    </body>
</html>