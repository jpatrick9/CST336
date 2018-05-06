include '../../../inc/dbConnection.php';

      $conn = getDatabaseConnection('answers');
      
      $sql = "SELECT * FROM answers WHERE id = :id";