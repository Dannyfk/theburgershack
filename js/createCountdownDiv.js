function createCountdownDiv(countdownObject) {
    var wrapperDiv = document.createElement("div");
    wrapperDiv.setAttribute("id","dateCountdownClear");
    
    var verticalDiv = document.createElement("div");
    verticalDiv.setAttribute("class","verticalLine");
    verticalDiv.setAttribute("id","verticalLine2");
    wrapperDiv.appendChild(verticalDiv);
    
    var day = document.createElement("p");
    day.setAttribute("class","frontPageLargeHeader");
    day.innerHTML=countdownObject["day"];
    wrapperDiv.appendChild(day);
    
    var verticalDiv2 = document.createElement("div");
    verticalDiv2.setAttribute("class","verticalLine");
    verticalDiv2.setAttribute("id","verticalLine3");
    wrapperDiv.appendChild(verticalDiv2);
    
    var firstText = document.createElement("p");
    firstText.setAttribute("class","frontPageLargeHeader");
    firstText.innerHTML=countdownObject["string1"];
    wrapperDiv.appendChild(firstText);
    
    var secondText = document.createElement("p");
    secondText.setAttribute("class","frontPageLargeHeader");
    secondText.innerHTML=countdownObject["string2"];
    wrapperDiv.appendChild(secondText);
    
    return wrapperDiv;
}