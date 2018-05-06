<!DOCTYPE html>
<html>
<head>
        <meta charset = "utf-8" />
        <title> Trading Card Shopping System </title>
       <style>
          @import url("css/styles.css");
       </style>
       <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
       <link href="styles.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
              <form id="signin" action="adminLogin.php" class="navbar-form navbar-right" role="form" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="username" type="text"  name="username" placeholder="username">                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" name="password" placeholder="Password">                                        
                        </div>
                        <input type="submit" id="login-submit"  name="login-submit" value="Login"></input>
                   </form>
            </div>
        </nav>
        
        <header>
            <h1> CSUMB Trading Card Emporium</h1>
        </header>
            <nav>
            <hr width = "50%"/>
            <a href = "yugioh.php">Yu-gi-oh Cards            </a>
            </nav>
            
            <div class="nav3" style="height:705px;">
                <a><img id="ygo" src="img/1.png" alt="Yu-Gi-Oh!"></a>
                <h3 class="description"> Individual Yugioh Cards for Sale at Unbeatable Prices! </h3>
            </div>
            
            
            
            <nav>
            <hr width = "50%"/>
            <a href = "pokemon.php">        Pokemon Cards</a>
            </nav>
            
            <div class="nav3" style="height:705px;">
                <a><img id="pkmn" src="img/2.png" alt="Pokemon"></a>
                <h3 class="description"> Individual Pokemon Cards for Sale at Unbeatable Prices! </h3>
            </div>
            
            <br /> <br />
            
            <main>
                
                </div>
            </main>
        </header>
        
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always 
        trying to change-->
    </body>
    <!-- closing body -->

</html>