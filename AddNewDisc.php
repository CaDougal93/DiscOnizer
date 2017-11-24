<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" type="text/css" href="addNewDisc.css" />
        <link rel ="stylesheet" type="text/css" href="index.css" />
        <script src="DiscOnizer.js"></script>
        <title>DiscOnizer - Add Disc</title>
    </head>
    <body>
        <div id="ribbon">
            <a href="index.php" id="homePageTab">Home</a>
            <a href="RemoveDisc.php" id="remveDiscTab">Delete Disc</a>
            <a href="AddNewDisc.php" id="addDiscTab">Add Disc</a>
        </div>
        <h2>Add A New Disc!</h2>
        <select id="pickType" onchange="showDiv(this)">
            <option value="">Disk Type</option>
            <option value="1" >Movie</option>
            <option value="2" >Game</option>
            <option value="3" >CD</option>
        </select>
        <div id="addDvd">
            <h2>Add A Movie</h2> 
            <form action="AddDvd.php" method="POST">
                <input id="dvdName" name="dvdName" type="textbox" placeholder="Movie Name">
                <input id="year" name="year" type="textbox" placeholder="Year Released">
                <input id="dvdLength" name="dvdLength" type="textbox" placeholder="Length (minutes)">
                <input id="rating" name="rating" type="textbox" placeholder="Rating">
                <button type = "submit" id="addDvDBut">Add Movie</button>
            </form>
        </div>
        <div id="addGme" name="addGame">
            <h2>Add A Game</h2>
            <form action="AddGame.php" method="POST">
                <input id="gameName" name="gameName" type="textbox" placeholder="Game Name">
                <input id="releaseDate" name="releaseDate" type="text" placeholder="Year Released">
                <input id="gameRating" name="gameRating" type="text" placeholder="Rating">
                <input id="console" name="console" type="text" placeholder="Console">
                <button type="submit" id="addGmeBut">Add Game</button> 
            </form>
        </div>
        <div id="addCd">
            <h2>Add A CD</h2> 
            <form action="AddCd.php" method="POST">
                <input id="albumName" name="albumName" type="textbox" placeholder="Album Name">
                <input id="artist" name="artist" type="text" placeholder="Artist">
                <input id="trackCount" name="trackCount" type="text" placeholder="Track Count">
                <input id="genre" name="genre" type="text" placeholder="Genre">
                <button type="submit" id="addCdBut">Add CD</option>
            </form>
        </div>
    </body>
</html>