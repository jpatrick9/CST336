<?php
$host = "localhost";
$dbname = "problem2";
$username = "root";
$password = "";

// Establishing a connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Setting Errorhandling to Exception
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

echo "A) <br />";
//Name and country of birth of female actresses who were NOT born in the USA, ordered by last name
$sql1 = 'SELECT firstName ,lastName, country_of_birth FROM celebrity WHERE country_of_birth NOT LIKE "%USA%" and gender = "F" order by lastName asc;';

$stmt = $dbConn->query($sql1);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
echo $record['firstName']  ." ".$record['lastName'] . " ".$record['country_of_birth']."<br />";
}
echo "B) <br /> ";
//Number of movies per category and their average duration (15 points)
$sql2 = 'SELECT movie_category, count(*), avg(duration) from movie group by movie_category;';

$stmt = $dbConn->query($sql2);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['movie_category']  ." ". $record['count(*)'] ." ". $record['avg(duration)'] ."<br />";
}
echo "C) <br /> ";
//Top three longest movies released after 2000
$sql3 = 'SELECT movie_title, movie_category, duration, company, release_year from movie where release_year > 2000 order by duration desc limit 3;';

$stmt = $dbConn->query($sql3);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['movie_title'] ." ". $record['movie_category']." ". $record['duration']." ". $record['company']. " ". $record['release_year']."<br />";
}
echo "D) <br /> ";
//List of actors and actresses who have not won an academy award, ordered by last name (15 points)
$sql4 = 'SELECT firstName, lastName FROM celebrity LEFT JOIN oscar ON celebrity.celebrityId = oscar.celebrity_id WHERE oscar.celebrity_id IS NULL; ';

$stmt = $dbConn->query($sql4);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['firstName']  . " " . $record['lastName'] . "<br />";
}
echo "E)  <br />";
//List of celebrities who have won an oscar, ordered by "award_year". Include full name, movie title, oscar year, and award category.
$sql5 = 'SELECT firstName,lastName, movie_title,award_category,award_year from celebrity, movie, oscar, award_category where oscar.celebrity_id = celebrity.celebrityId and movie.movieId = oscar.movieId and oscar.award_cat_id = award_category.award_cat_id order by oscar.award_year asc;';

$stmt = $dbConn->query($sql5);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['firstName']  . " " . $record['lastName'] . " " . $record['movie_title'] . " " . $record['award_category'] . " " . $record['award_year'] . "<br />";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="color:#99E999">
      <td>1</td>
      <td>Name and country of birth of female actresses who were NOT born in the USA, ordered by last name</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="color:#99E999">
      <td>2</td>
      <td>Number of movies per category and their average duration</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="color:#99E999">
      <td>3</td>
      <td>All info about the top three longest movies released after 2000</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="color:#99E999">
       <td>4</td>
       <td>List of  actors and actresses who have not won an academy award, ordered by last name </td>
       <td align="center">15</td>
     </tr>
     <tr style="color:#99E999">
      <td>5</td>
      <td>List of celebrities who have won an oscar, ordered by "award_year". Include full name, movie title, oscar year, and award category.</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="color:#99E999">
      <td>6</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b>67</b></td>
    </tr> 
  </tbody></table>    

    </body>
</html>
