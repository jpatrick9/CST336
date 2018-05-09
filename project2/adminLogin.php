<?php 
// session_start(); //start or resume an existing session 

include 'dbConnection.php';
$conn = getDatabaseConnection('ygoCards');
try{
    if (isset($_POST['login-submit'])) { //checks whether user submitted the form 
        
        $username = $_POST['username']; 
        $password = $_POST['password'];  //hash("sha1", $_POST['password']) 
        // echo "$username, $password,";
        $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";  //Preventing SQL Injection 
                 
        $namedParameters = array(); 
        $namedParameters[':username'] = $username;                 
        $namedParameters[':password'] = $password;             
        
        $statement = $conn->prepare($sql);
        if (!$statement) {
            echo "\nPDO::errorInfo():\n";
            print_r($conn->errorInfo());
        }  
        
        $statement->execute($namedParameters); 
        $record = $statement->fetch(PDO::FETCH_ASSOC); 
         
        if (empty($record)) { //wrong username or password 
            echo '<script language="javascript">';
            echo 'alert("Wrong username or password!");';
            echo "window.location.href='./main.php'";
            echo '</script>';
            // echo json_encode("Wrong username or password!"); 
            // header("Location: main.php");
        } else { 
             
            header("Location: adminProfile.php");                 
        }   
    }
}

catch(PDOException $e){
    print ($sql . "<br>" . $e->getMessage());
}

?>