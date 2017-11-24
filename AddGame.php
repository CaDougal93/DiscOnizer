<?php
/**
 * @file    AddGame.php
 *
 * @brief   This file contains code that is responsible for adding a game
 *          to the database.
 *
 *
 * @author        Cade McDougal
 * @date          4/12/2016
 */

    $hostname = "localhost";
    $dbname = "disconizer";   
    $username = "cade";      
    $password = "CaGaMc93";    
    $dsn = "pgsql:host=$hostname;dbname=$dbname;user=$username;password=$password";
    try{
        $conn = new PDO($dsn);
    }
    catch (PDOException $e){
        echo $e->getMessage();
        echo "Database connection failed!";
        exit(1);
    }
    $diskName    = $_POST['gameName'];
    $releaseYear = $_POST['releaseDate'];
    $rating      = $_POST['gameRating'];
    $console     = $_POST['console'];
    //Ensure user entered all necessary input
    if($diskName == "" || $releaseYear == "" || $rating == "" || $console == ""){
        echo "Please fill all fields";
        include('index.php');
        exit(0); 
    }
    //Insert the new game into both the disks table, and the games table
    $query = "INSERT INTO Disks (name) VALUES ('$diskName');";
    $result = $conn->query($query);
    $query = "INSERT INTO Games (name, releasedate, rating) 
             VALUES ('$diskName', '$releaseYear', '$rating');";
    $result = $conn->query($query); 
    $query = "INSERT INTO Plays (game, console) 
             VALUES ('$diskName', '$console');";
    $result = $conn->query($query);         
    include('index.php');
    exit(0);  
?>
