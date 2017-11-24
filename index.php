<?php 
include_once ('GetData.php');
 ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" type="text/css" href="index.css" />
        <script type="text/javascript" src="DiscOnizer.js"></script>
        <title>DiscOnizer - Home Page</title>
    </head>
    <body>
        <div id="ribbon">
            <a href="index.php" id="homePageTab">Home</a>
            <a href="RemoveDisc.php" id="remveDiscTab">Delete Disc</a>
            <a href="AddNewDisc.php" id="addDiscTab">Add Disc</a>
        </div>
        <div id="movieList">
            <table id="movieTable">
                <tr>
                    <th>Movie</th>
                    <th>Year</th>
                    <th>Run-Time</th>
                    <th>Rating</th>
                </tr> 
                <?php showMovies() ?>
            </table>
        </div>
        <div id="gameList">
            <table>
                <tr>
                    <th>Game</th>
                    <th>Year</th>
                    <th>Rating</th>
                    <th>Console</th>
                </tr>
                <?php showGames() ?>
            </table> 
        </div>

        <div id="cdList">
            <table>
                <tr>
                    <th>Album</th>
                    <th>Artist</th>
                    <th>TrackCount</th>
                    <th>Genre</th>
                </tr>
                <?php showCds() ?>
            </table>   
        </div> 
    </body>
</html>