<!DOCTYPE html>
<html>
    <title>Home Economics & Cooking</title>
    <body background = "images/kitchen.jpg">
        <head>
            <nav>
            <a href = "index.php">Home</a>
            <a href = "pans.php">Pans</a>
            <a href = "knives.php">Knives</a>
            <a href = "lessons.php">Lessons</a>
            <a href = "recipes.php">Recipes</a>
        </nav>
            <h1>Guitar Lessons</h1>
            <style>
                @import url("css/styles.css");

            </style>
        </head>
        
            <p>Our private lessons are sold in 1/2-hour increments. 
            The cost is $40* for each 1/2-hour ticket or $140 for four 1/2-hour 
            tickets. Tickets should be purchased ahead of time, and then handed 
            to your teacher at the beginning of each lesson. Our lesson tickets 
            are valid for six months. All scheduling is done directly with each teacher. 
            Contact info can be found on this page, or by calling the shop. There is a 
            strict 24-hour cancellation policy. If you cancel a lesson less than 24 hours 
            in advance (or don't show up at all), your teacher is entitled to the ticket(s) 
            required to cover the lesson time.</p>
            
            <p>Please log in if you are already a member. If not create a new profile!</p>
            
            <?php
        $nameErr = "";
        $name = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["username"])) {
            $nameErr = "Username left empty!";
          } else {
            $name = test_input($_POST["username"]);
          }
          
          if (empty($_POST["password"])) {
            $emailErr = "Password left empty!";
          } else {
            $email = test_input($_POST["password"]);
          }
          
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

<p><span class="error"></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="username">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="password">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

    
    <p>If you are a new customer, please click HERE</p>
    <form action="lessonorder.php" method="get">
        <input type="submit" value="New Customer" name="newCustomer"/>
    </form>
            
            <br /> <br />
    </body>
</html>