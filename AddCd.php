<?php
/**
 * @file    AddCd.php
 *
 * @brief   This file contains code that is responsible for adding a music
 *          cd to the database.
 *
 *
 * @author        Cade McDougal
 * @date          4/12/2016
 */ 

    $hostname = "localhost";
    $dbname   = "disconizer";   
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
    $diskName    = $_POST['albumName'];
    $artist      = $_POST['artist'];
    $trackCount  = $_POST['trackCount'];
    $genre       = $_POST['genre'];
    //Make sure that no data is left blank
    if($diskName == "" || $artist == "" || $trackCount == "" || $genre == ""){
        echo "Please fill all fields";
        include('index.php');
        exit(0); 
    }
    $query = "INSERT INTO Disks (name) VALUES ('$diskName');";
    $result = $conn->query($query);
    $query = "INSERT INTO MusicCds (name, artist, trackcount, genre) 
             VALUES ('$diskName', '$artist', '$trackCount', '$genre');";
    $result = $conn->query($query); 
    include('index.php');
    exit(0);  
?>
