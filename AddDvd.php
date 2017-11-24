<?php
/**
 * @file    AddDvd.php
 *
 * @brief   This file contains code that is responsible for adding a dvd
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
    $diskName    = $_POST['dvdName'];
    $releaseYear = $_POST['year'];
    $length      = $_POST['dvdLength'];
    $rating      = $_POST['rating'];
    //Ensure user entered all necessary information for the movie
    if($diskName == "" || $releaseYear == "" || $length == "" || $rating == ""){
        echo "Please fill all fields";
        include('index.php');
        exit(0); 
    }
    //Add movie to both disks table, and movies table
    $query = "INSERT INTO Disks (name) VALUES ('$diskName');";
    $result = $conn->query($query);
    $query = "INSERT INTO Movies (name, year, length, rating) 
             VALUES ('$diskName', '$releaseYear', '$length', '$rating');";
    $result = $conn->query($query); 
    include('index.php');
    exit(0);  
?>
