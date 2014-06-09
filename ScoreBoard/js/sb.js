"use strict";

//Cookie functions for week 5. I wanted to save the username and email.
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) === 0) return c.substring(name.length, c.length);
    }
    return "";
}


function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    }
}
$("#submit1").click(function() {
        var user = $("#username1").val();
        console.log(user);
   if (user != "" && user != null) {
       setCookie("username", user, 30);
   }
});




//This function runs the "try it yourself" form on the home page
var chestScore = $( "#start-form" ).submit(function( event ) {
    var benchScore,
        pushScore;
   benchScore = $("#bench-press").val() * benchPress.muscleStren;
    pushScore = $("#push-ups").val() * pushUps.muscleEndur;
    
    alert( "Your muscle strength score for your chest is " + benchScore + ".\nYour muscle endurance score for your chest is " + pushScore +".");
});



$("#login").click(function() {
    $("#register").show();
  });


    
    
    
    