/**
 * @file    DiscOnizer.js
 *
 * @brief   This file contains code that is responsible for controlling the css for the website.
 *
 *
 * @author        Cade McDougal
 * @date          4/12/2016
 */


/*
 *@brief:   This function is used when the user chooses to add new data. 
 *          depending on what kind of disk is chose to add will depend
 *          on what text boxes are available for input data.
 *@param:   select      This holds the choice of the user 
 * 
 */
function showDiv(select){
    //User wants to add dvd so only show boxes necessary for adding dvd
    if(select.value === "1"){
        document.getElementById('addDvd').style.display = "block";  
        document.getElementById('addGme').style.display = "none";
        document.getElementById('addCd').style.display = "none";
    }
    //User wants to add game so only show boxes necessary for adding a game
    else if(select.value === "2"){
        document.getElementById('addDvd').style.display = "none";  
        document.getElementById('addGme').style.display = "block";
        document.getElementById('addCd').style.display = "none"; 
    }
    //User wants to add cd so only show boxes necessary for adding cd
    else if(select.value === "3"){
        document.getElementById('addDvd').style.display = "none";  
        document.getElementById('addGme').style.display = "none";
        document.getElementById('addCd').style.display = "block";
    }
    //User has not chose what kind of disk will be added so show no text boxes
    else{
        document.getElementById('addDvd').style.display = "none";  
        document.getElementById('addGme').style.display = "none";
        document.getElementById('addCd').style.display = "none";
    }
} 


/*
 *@brief:   This function is used when the user chooses to delete data. 
 *          depending on what kind of disk is chose to delete will depend
 *          on what text boxes are available for input data.
 *@param:   select      This holds the choice of the user 
 * 
 */
function describeDelete(select){
    //User wants to delete a movie so only show boxes necessary for deleting movie
    if(select.value === "1"){
        document.getElementById('removeMovie').style.display = "block";  
        document.getElementById('removeGame').style.display = "none";
        document.getElementById('removeCd').style.display = "none";
    }
    //User wants to delete a game so only show boxes necessary for deleting a game
    else if(select.value === "2"){
        document.getElementById('removeGame').style.display = "block";
        document.getElementById('removeMovie').style.display = "none";  
        document.getElementById('removeCd').style.display = "none"; 
    }
    //User wants to delete a cd so only show boxes necessary for deleting a cd
    else if(select.value === "3"){
        document.getElementById('removeMovie').style.display = "none";  
        document.getElementById('removeGame').style.display = "none";
        document.getElementById('removeCd').style.display = "block";
    }
    //User has not chose what kind of disk will be deleted so show no text boxes
    else{
        document.getElementById('removeMovie').style.display = "none";  
        document.getElementById('removeGame').style.display = "none";
        document.getElementById('removeCd').style.display = "none";
    }    
}

   
/*
 *@brief: This function displays text boxes necessary to retrieve all of
 *        a movies information needed
 */
function isDvd(){
    document.getElementById('addDvd').style.display = "block";  
    document.getElementById('addGme').style.display = "none";
    document.getElementById('addCd').style.display = "none";
}


/*
 *@brief: This function displays text boxes necessary to retrieve all of
 *        a games information that is needed
 */
function isGame(){
    document.getElementById('addDvd').style.display = "none";  
    document.getElementById('addGme').style.display = "block";
    document.getElementById('addCd').style.display = "none"; 
}
    

/*
 *@brief: This function displays text boxes necessary to retrieve all of
 *        a cds information that is needed
 */    
function isCd(){
    document.getElementById('addDvd').style.display = "none";  
    document.getElementById('addGme').style.display = "none";
    document.getElementById('addCd').style.display = "block";
}

 