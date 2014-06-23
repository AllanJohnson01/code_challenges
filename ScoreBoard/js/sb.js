"use strict";


//function handleDragStart(e) {
//  this.style.opacity = '0.4';  // this / e.target is the source node.
//}

function handleDragOver(e) {
  if (e.preventDefault) {
    e.preventDefault(); 
  }

  //e.dataTransfer.dropEffect = 'move';

  return false;
}

function handleDragEnter(e) {
  // this / e.target is the current hover target.
  this.classList.add('over');
}

function handleDragLeave(e) {
  this.classList.remove('over');  // this / e.target is previous target element.
}
var dragSrcEl = null;

function handleDragStart(e) {
  // Target (this) element is the source node.
//  this.style.opacity = '0.4';

  dragSrcEl = this;

  e.dataTransfer.effectAllowed = 'move';
  e.dataTransfer.setData('text/html', this.innerHTML);
}
function handleDrop(e) {
  // this / e.target is current target element.

  if (e.stopPropagation) {
    e.stopPropagation(); // stops the browser from redirecting.
  }

  // See the section on the DataTransfer object.

  return false;
}

function handleDragEnd(e) {
  // this/e.target is the source node.

  [].forEach.call(cols, function (col) {
    col.classList.remove('over');
  });
}
function handleDrop(e) {
  // this/e.target is current target element.

  if (e.stopPropagation) {
    e.stopPropagation(); // Stops some browsers from redirecting.
  }

  // Don't do anything if dropping the same column we're dragging.
  if (dragSrcEl != this) {
    // Set the source column's HTML to the HTML of the column we dropped on.
    dragSrcEl.innerHTML = this.innerHTML;
    this.innerHTML = e.dataTransfer.getData('text/html');
  }

  return false;
}


var cols = document.querySelectorAll('.card');
[].forEach.call(cols, function(col) {
  col.addEventListener('dragstart', handleDragStart, false);
  col.addEventListener('dragenter', handleDragEnter, false)
  col.addEventListener('dragover', handleDragOver, false);
  col.addEventListener('dragleave', handleDragLeave, false);
  col.addEventListener('drop', handleDrop, false);
  col.addEventListener('dragend', handleDragEnd, false);
});





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
    var userHeading = document.getElementById("userHeading")
    if (user != "") {
        userHeading.innerHTML = user + "'s Dashboard";
        
        
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
var chestScore = $( "#submit2" ).click(function( event ) {
    var benchScore,
        pushScore;
   benchScore = $("#bench-press").val() * benchPress.muscleStren;
    pushScore = $("#push-ups").val() * pushUps.muscleEndur;
    
    alert( "Your muscle strength score for your chest is " + benchScore + ".\nYour muscle endurance score for your chest is " + pushScore +".");
});



$("#login").click(function() {
    $("#register").show();
  });


    
    
    
    