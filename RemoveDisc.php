<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" type="text/css" href="RemoveDisc.css" />
        <link rel ="stylesheet" type="text/css" href="index.css" />
        <script src="DiscOnizer.js"></script>
        <title>DiscOnizer - Delete Disc</title>
    </head>
    <body>
        <div id="ribbon">
            <a href="index.php" id="homePageTab">Home</a>
            <a href="RemoveDisc.php" id="remveDiscTab">Delete Disc</a>
            <a href="AddNewDisc.php" id="addDiscTab">Add Disc</a>
        </div>
        <h2>Delete A Disc!</h2>
        <select id="pickType" onchange="describeDelete(this)">
            <option value="">Disk Type</option>
            <option value="1" >Movie</option>
            <option value="2" >Game</option>
            <option value="3" >CD</option>
        </select>
        <form id="removeMovie" action="RemoveMovie.php" method="POST">
            <input id="reMovieName" name="reMovieName" type="textbox" placeholder="Movie Name">
            <input id="rmDvd" name="rmDvd" type="textbox" placeholder="Release Year">
            <button type = "submit" id="deleteMovie">Delete Movie</button>
        </form>

        <form id="removeGame" action="RemoveGame.php" method="POST">
            <input id="reGameName" name="reGameName" type="textbox" placeholder="Game Name">
            <input id="rmGmeCon" name="rmGmeCon" type="textbox" placeholder="Console">
            <button type = "submit" id="deleteGame">Delete Game</button>
        </form>

        <form id="removeCd" action="RemoveCd.php" method="POST">
            <input id="reCdName" name="reCdName" type="textbox" placeholder="Album Name">
            <input id="rmCd" name="rmCd" type="textbox" placeholder="Artist">
            <button type = "submit" id="deleteCd">Delete CD</button>
        </form>
    </body>
</html>