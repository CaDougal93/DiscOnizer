<?php
/*
 * @file    GetData.php
 *
 * @brief   This file contains code that is responsible for retrieving information from
 *          the database. 
 *
 *
 * @author        Cade McDougal
 * @date          4/12/2016
 */


/*
 *@brief:  This function pulls all the data from the movies table to display
 *         in a table format.
 */
function showMovies(){
    $hostname = "localhost";
    $dbname   = "disconizer";   
    $username = "cade";      
    $password = "CaGaMc93";    
    $dsn      = "pgsql:host=$hostname;dbname=$dbname;user=$username;password=$password";
    try{
        $conn = new PDO($dsn);
    }
    catch (PDOException $e){
        echo $e->getMessage();
        echo "Database connection failed!";
        exit(1);
    }
    $query = "SELECT * FROM movies ORDER BY name ASC";
    $result = $conn->query($query);
    if(!$result){
        echo "An error occured.";
        exit;
    }
    //Output each movie in the database in a table format for viewing
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>";
        echo $row['name'];
        echo "</td>";
        echo "<td>";
        echo $row['year'];
        echo "</td>";
        echo "<td>";
        echo $row['length'];
        echo "</td>";
        echo "<td>";
        echo $row['rating'];
        echo "</td>";
        echo "</tr>";
    }
}


/*
 *@brief:  This function pulls all the data from the games table to display
 *         in a table format.
 */
function showGames(){
    $hostname = "localhost";
    $dbname   = "disconizer";   
    $username = "cade";      
    $password = "CaGaMc93";    
    $dsn      = "pgsql:host=$hostname;dbname=$dbname;user=$username;password=$password";
    try{
        $conn = new PDO($dsn);
    }
    catch (PDOException $e){
        echo $e->getMessage();
        echo "Database connection failed!";
        exit(1);
    }
    $query = "SELECT name, releasedate, rating, console
              FROM   games, plays
              WHERE  games.name = plays.game
              ORDER BY name ASC;";
    $result = $conn->query($query);
        if(!$result){
        echo "An error occured.";
        exit;
    }
    //Output each game in the database in a table format for viewing
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>";
        echo $row['name'];
        echo "</td>";
        echo "<td>";
        echo $row['releasedate'];
        echo "</td>";
        echo "<td>";
        echo $row['rating'];
        echo "</td>";
        echo "<td>";
        echo $row['console'];
        echo "</td>";
        echo "</tr>";
    }
}


/*
 *@brief:  This function pulls all the data from the Cds table to display
 *         in a table format.
 */
function showCds(){
    $hostname = "localhost";
    $dbname   = "disconizer";   
    $username = "cade";      
    $password = "CaGaMc93";    
    $dsn      = "pgsql:host=$hostname;dbname=$dbname;user=$username;password=$password";
    try{
        $conn = new PDO($dsn);
    }
    catch (PDOException $e){
        echo $e->getMessage();
        echo "Database connection failed!";
        exit(1);
    }
    $query = "SELECT * FROM musiccds ORDER BY name ASC;";
    $result = $conn->query($query);
        if(!$result){
        echo "An error occured.";
        exit;
    }
    //Output each cd in the database in a table format for viewing
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>";
        echo $row['name'];
        echo "</td>";
        echo "<td>";
        echo $row['artist'];
        echo "</td>";
        echo "<td>";
        echo $row['trackcount'];
        echo "</td>";
        echo "<td>";
        echo $row['genre'];
        echo "</td>";
        echo "</tr>";
    }
}

?>


