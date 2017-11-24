<?php
/**
 * @file    RemoveCd.php
 *
 * @brief   This file contains code that is responsible for removing a cd from
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
    $diskName = $_POST['reCdName'];
    $artist     = $_POST['rmCd'];
    if($diskName == "" || $artist == ""){
        echo "Please enter a disc name and artist";
        include('RemoveDisc.php');
        exit(0); 
    }
    //Check to see if two differnt artist have an album with the same names
    $query = "SELECT *
              FROM musiccds
              WHERE name = '$diskName' AND
              artist <> '$artist';";
    $dupes = $conn->query($query); 
    //If two diff albums have same name only delete from cd table
    if($dupes){
        $query = "DELETE FROM musiccds WHERE name = '$diskName' AND artist = '$artist';";
        $result = $conn->query($query);
        if(!$result){
            echo "An error occured.";
            exit;
        }
    }    
    //else delete from disks and let sql cascade                     
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
