<?php
/**
 * @file    RemoveGame.php
 *
 * @brief   This file contains code that is responsible for removing a game from
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
    $diskName    = $_POST['reGameName'];
    $console     = $_POST['rmGmeCon'];
    //Verify that data all necessary data is given
    if($diskName == "" || $console == ""){
        echo "Please enter a disc name and console";
        include('RemoveDisc.php');
        exit(0); 
    }
    //Need to check if the same game is available on other consoles
    $query = "SELECT distinct g2.game, g1.name, g2.console, g1.releaseDate, g1.rating
              FROM games g1, plays g2
              WHERE g1.name = '$diskName' AND
                    g2.game = '$diskName' AND 
                    g2.console <> '$console';";
    $forMultConsoles = $conn->query($query); 
    //if the game is for multiple consoles only delete the game for the given console
    if($forMultConsoles){
        $query = "DELETE FROM plays WHERE game = '$diskName' AND console = '$console';";
        $result = $conn->query($query);
        if(!$result){
            echo "An error occured.";
            exit;
        }
    }                         
    //else the game is only on one console so delete from disks and allow sql to cascade
    else{
        $query = "DELETE FROM disks WHERE name = '$diskName';";
        $result = $conn->query($query);
        if(!$result){
            echo "An error occured.";
            exit;
        }        
        $query = "DELETE FROM plays WHERE name = '$diskName';";
        $result = $conn->query($query);
        if(!$result){
            echo "An error occured.";
            exit;
        }
    }       
    include('index.php');
    exit(0);
?>
