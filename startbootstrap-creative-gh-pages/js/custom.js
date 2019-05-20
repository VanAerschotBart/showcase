var lang = "EN";  //needs to be declared so it can be used, and since the innerHTML is in English... 
        
function translator3000() {  
        
    var transButton = document.getElementById("myButton");
    var transConList = document.getElementsByClassName("transCon");  //get every translation container
            
    if(lang == "EN") {
        transButton.className = "langBtn UK";  //to set the correct background (flag) of the "button"
        lang = "NL";
                
        for(var a=0; a<transConList.length; a++) {
                    
            var transList = transConList[a].getElementsByClassName("translate");  //get the elements in need of translation
                    
            for(var b = 0; b<translationNL[a].length; b++) {
                        
                if(Array.isArray(translationNL[a][b])) {  //if it's an array, it means we're at the skills list
                        
                    var skillsList = transConList[a].getElementsByTagName("li");
                            
                    for(var c=0; c<skillsList.length; c++){
                        skillsList[c].innerHTML =  translationNL[a][b][c];
                    }
                            
                }
                else{
                    transList[b].innerHTML =  translationNL[a][b];
                }
            }
                    
        }
    }
    else if(lang =="NL") {
        transButton.className = "langBtn NL";
        lang = "EN";
                
        for(var a=0; a<transConList.length; a++) {
                    
            var transList = transConList[a].getElementsByClassName("translate");
                    
            for(var b = 0; b<translationNL[a].length; b++) {
                        
                if(Array.isArray(translationEN[a][b])) {
                            
                    var skillsList = transConList[a].getElementsByTagName("li");
                            
                    for(var c=0; c<skillsList.length; c++){
                        skillsList[c].innerHTML =  translationEN[a][b][c];
                    }
                            
                }
                else {
                    transList[b].innerHTML =  translationEN[a][b];
                }
            }
                    
        }
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