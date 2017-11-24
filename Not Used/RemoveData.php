<?php
    //$hostname = "localhost";
    //$dbname   = "cade.mcdougal";   //will be cade.mcdougal on class machine
    //$username = "cade.mcdougal";       //will be cade.mcdougal
    //$password = "CaGaMc1993";    //will be CaGaMc1993

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
    $diskName    = $_POST['discName'];
    if($diskName == ""){
        echo "Please enter a disc name";
        include('RemoveDisc.php');
        exit(0); 
    }
    $query = "DELETE FROM disks WHERE name = '$diskName';";
    $result = $conn->query($query);
    if(!$result){
        echo "An error occured.";
        exit;
    }
    include('index.php');
    exit(0);
?>