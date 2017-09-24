function setDate(){
        var string = "";        /* The string we return with the day and countdown */
        var returnObject = new Object();
        var date= new Date();
        var hour = date.getHours();
        var minutes = date.getMinutes();
        var days = ["Søndag","Mandag","Tirsdag","Onsdag","Torsdag","Fredag","Lørdag"];
        var day = days[date.getDay()];
        
        returnObject["day"]=day;
        string += day+": ";   /* We start by insetting the weekday into the string */
        
        var hoursLeft = 0;
        var minutesLeft = 0; 
            
    /* The Burger Shack has different closing hours depending in day so vi have to make a few if's */
    /* We first check if it's the mornings where opening hours are to 5 AM */
        if(day === days[6] || day === days[0]){
            if(hour<5){
                hoursLeft=5-hour;
                minutesLeft=60-minutes;
                string +="vi vender burgere "+"<span>"+hoursLeft+"T "+minutesLeft+"MIN"+"</span> endnu";
                returnObject["string1"]="Vi vender burgere";
                returnObject["string2"]="<span>"+hoursLeft+"T "+minutesLeft+"MIN"+"</span> endnu";
                return returnObject;
            } 
        }
    /* We then check if it's the day where opening hours are until 5 AM the next morning */
        if(day === days[5] || day === days[6]){
            if(hour>21){
                hoursLeft = 23-hour;
                minutesLeft = 60-minutes;
                string +="vi vender burgere "+"<span>"+(hoursLeft+5)+"T "+minutesLeft+"MIN"+"</span> endnu";
                returnObject["string1"]="Vi vender burgere";
                returnObject["string2"]="<span>"+(hoursLeft+5)+"T "+minutesLeft+"MIN"+"</span> endnu";
                return returnObject;
            }
        } 
    /* We then check if it's a regular day at night after closing hours */
        for (i = 0; i < 7; i++) { 
            if(days[i]===day){
                if(hour>21){
                    hoursLeft = 23-hour;
                    minutesLeft = 60-minutes;
                    if(minutesLeft>30){
                        minutesLeft-60;
                        hoursLeft+1;
                    }
                    returnObject["string1"]="Vi åbner igen om";
                    returnObject["string2"]=(hoursLeft+11)+"T "+ (minutesLeft+30)+"MIN";
                    string += "vi åbner igen om "+(hoursLeft+11)+"T "+ (minutesLeft+30)+"MIN";                  
                }
     /* We then check of it's in between opening hours on a regular day */
                else if(hour>11 && hour<21 || hour===11 && minutes>30) {
                    if(hour===20){
                        hour+=1;
                    }
                    hoursLeft = 20-hour;
                    minutesLeft = 60-minutes;
                    returnObject["string1"]="Vi vender burgere";
                    returnObject["string2"]="<span>"+hoursLeft+"T "+minutesLeft+"MIN"+"</span> endnu";
                    string +="vi vender burgere "+"<span>"+hoursLeft+"T "+minutesLeft+"MIN"+"</span> endnu";
                }
    /* And lastly the rest if none of the above if's are true */            
                else {
                    hoursLeft= 11-hour;
                    minutesLeft= 30-minutes;
                    if(minutes>30){
                        minutesLeft+=60; 
                        hoursLeft-=1;
                    }
                    returnObject["string1"]="Vi åbner igen om";
                    returnObject["string2"]="<span>"+hoursLeft+"T "+minutesLeft+"MIN"+"</span>";
                    string +="vi åbner igen om: "+"<span>"+hoursLeft+"T "+minutesLeft+"MIN"+"</span>";
                }
            }
        }
        returnObject["string"]=string;    
        return returnObject;
            
        }
            
        
