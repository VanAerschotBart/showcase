var lang = "EN";  //needs to be declared so it can be used, and since the innerHTML is in English...

function chooseYourSide(transArr) {
    
    var transConList = document.getElementsByClassName("transCon");  //get every translation container
    
    for(var a=0; a<transConList.length; a++) {
                    
        var transList = transConList[a].getElementsByClassName("translate");  //get the elements in need of translation
                    
        for(var b = 0; b<transArr[a].length; b++) {
                        
            if(Array.isArray(transArr[a][b])) {  //if it's an array, it means we're at the skills list
                        
                var skillsList = transConList[a].getElementsByTagName("li");
                            
                for(var c=0; c<skillsList.length; c++){
                        skillsList[c].innerHTML =  transArr[a][b][c];
                }
                            
            }
            else{
                transList[b].innerHTML =  transArr[a][b];
            }
        }
                    
    }
    
}
        
function translator3000() {
    
    var transButton = document.getElementById("myButton");
    
    if(lang == "EN") {
        transButton.className = "langBtn UK";
        chooseYourSide(translationNL);
        lang = "NL";
    }
    else if(lang =="NL") {
        transButton.className = "langBtn NL";
        chooseYourSide(translationEN);
        lang = "EN";
    }
    else {
        alert("var lang error");
    }
      
}

//building a translation "button"
$(document).ready(function() {
        
    var navcon = document.getElementById("navContainer");
    var transButton = document.createElement("div");  //nearly impossible to style a button element the way I want to (bc of bootstrap) so I just use a div
    transButton.className = "langBtn NL";
    transButton.setAttribute("id", "myButton");
    transButton.addEventListener("click", translator3000);
    navcon.appendChild(transButton);
        
});