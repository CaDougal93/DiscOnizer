<?php
/**
 * @file    RemoveMovie.php
 *
 * @brief   This file contains code that is responsible for removing a movie from
 *          the database. 
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
    $diskName = $_POST['reMovieName'];
    $year     = $_POST['rmDvd'];
    //Make sure data is there.
    if($diskName == "" || $year == ""){
        echo "Please enter a disc name and release year";
        include('RemoveDisc.php');
        exit(0); 
    }
    $query = "SELECT name, year, rating, length
              FROM movies
              WHERE name = '$diskName' AND
              year <> $year;";
    $remade = $conn->query($query); 
    //Check if there are two movies with the same namespace
    //If two movies have the same name only delete from movies table
    if($remade){
        $query = "DELETE FROM movies WHERE name = '$diskName' AND year = '$year';";
        $result = $conn->query($query);
        if(!$result){
            echo "An error occured.";
            exit;
        }
    }
    //Only one movie with the users given name so delete from disks database
    //and let sql cascade.                         
    else{
        $query = "DELETE FROM disks WHERE name = '$diskName';";
        $result = $conn->query($query);
        if(!$result){
            echo "An error occured.";
            exit;
        }        
    }       
    include('index.php');
    exit(0);
?>
