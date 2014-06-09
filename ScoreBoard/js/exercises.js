function Exercise (muscleStren, muscleEndur, cardio, flexi, agility, speed, power, balance, coordi,reaction) {
    this.muscleStren = muscleStren;
    this.muscleEndur = muscleEndur;
    this.cardio = cardio;
    this.flexi = flexi;
    this.agility = agility;
    this.speed = speed;
    this.power = power;
    this.balance = balance;
    this.coordi = coordi;
    this.reaction = reaction;
    this.attributes = [];
}
//Exercises
var pushUps = new Exercise(3,9,1,0,0,6,4,1,1,1);
pushUps.attributes = ["Muscle Strength", "Muscle Endurance", "Lean", "Agility", "Power", "Upper Body", "Arms", "Body Weight",
"CrossFit Gym"];
var benchPress = new Exercise(9,1,0,0,0,4,6,2,1,0);


var goals = ["Sit Ups", "Pull Ups", "Deadlift", "Muscle-ups",]

//var array = [
//Muscle Strength,
//Muscle Endurance,
//Cardio,
//Flexibility,
//Mass,
//Lean,
//Agility,
//Speed,
//Power,
//Balance,
//Coordination,
//Reaction Time,
//Upper Body,
//Lower Body,
//Core,
//Arms,
//Body Weight,
//CrossFit Gym,
//Olympic
//];


//This function runs the log button on the challenges page
//TODO change the record text to the new entry.

var pushUpScore = $( "#log-pushUps" ).click(function( event ) {
    var pushScore = $("#pushUps-reps").val() * pushUps.muscleEndur;
    alert( "Nice set! Your muscle endurance score for your chest is " + pushScore +".");
    $("pushUps-record").text(pushScore);
    
    
});
var addGoal = $("#goal-pushUps").click(function(event) {
    var goalValue = $("#pushUps-reps").val();
    goals.push("Push-Ups");
    alert(goalValue + " pushups has been added to your list of goals.");
    for (var i = 0; i <goals.length; i++) {
             alert(goals[i] + " is in your list of goals");
             console.log("this is working!!!");
             }
});
    
    
    
    
    