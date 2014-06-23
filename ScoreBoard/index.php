<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="UTF-8">
  <title><?php echo "Johnson_Allan_MIS577_10997"; ?></title>
<!--
***Week 1 Session date: May 05, 2014 ***
Date milestone submitted: May 11, 2014
This site currently consists of this index page and the following milestone 1 features:
1) Global structure tags - index.html
2) Text tags - index.html
3) Images - index.html
4) First page named index.html
5) The title of the fist page in the format of - header, index.html LastName_FirstName_MIS577_Section
6) Started a form in the last section - index.html

*** Week 2 Session date: May 05, 2014 ***
Submittion date: May 18, 2014
Milestone features:
1) Added CSS throughout index.html
2) Added the get started form on the splash page- index.html
3) Added links in the nav (to the dashboard page) and footer to (social sites)
4) included multiple images in the footer and background of index.html
5) created a table on dashboard.html
6) Updated this header. 

*** Week 3 Session date: May 18, 2014 ***
Submittion date: May 25, 2014
Milestone features:
1) More CSS-- Throughout
2) Added login links-- index.html
3) Used the JavaScript prompt function on the register and login links on the home page to prompt the user to enter their username-- index.html
4) Used JavaScript alert function on the get started form and created a score variable to return the score to the user when they enter their data-- index.html
5) Added fitness components paragraphs-- dashboard.html
6) Updated this header. 

*** Week 4 Session date: May 25, 2014 ***
Submittion date: June 01, 2014
Milestone features:
1) Discovered the benefits of Foundation from Zurb. I used their framework to develop my challanges page
2) added the format for my exercises. Hopefully I will learn how to load them dynamically from the server in the future. 
3) I created a constructor object for my exercises in sb.js with properties and attributes. 
4) I tried many times to use a for loop to enumerate through the property values of my pushUps object (in the Exercises class), but couldn't figure out why it wouldn't work when I would press the "log it" button on challenges.html
5) I added the most simple for loop at the bottom of challenges.html which just logs a message to the console upon pressing the goals button. It didn't really demonstrate anything other than I may not have lost my sanity. Wait I just uploaded it to my server and it appears that my logic was working. I don't know why it would work when I ran it locally. I don't know how developers maintain their sanity.
6) Updated this header.

*** Week 5 Session date: June 01, 2014 ***
Submittion date: June 08, 2014
Milestone features:
1) Added a new login/register form- index.html
2) Added some JavaScript to show the hidden form upon pressing the register button- index.html/sb.js
3) Added setCookie(), getCookie(), and checkCookie()- sb.js
4) Used the date method in setCookie()- sb.js
5) Updated this header.


*** Week 6 Session date: June 08, 2014 ***
Submittion date: June 15, 2014
Milestone features:
1) Manipulated the DOM by changing my cache of the username (from logging in on the homepage) to display the username in the heading on the dashboard page. 
2) Added the dashboard with some placeholder layouts.
3) Changed the button on the login form so that it takes the users to their dashboard upon submitting.
4) Manipulated the DOM by enabling the user to move the three main blocks on the dashboard page by dragging and dropping on top of another element. 
5) Updated this header.

*** Week 7 Final Project Session date: June 15, 2014 ***
Submittion date: June 24, 2014
Milestone features:
1) Unified the look of the site with CSS and foundation
2) 



-->
    <?php include('includes/header.php'); ?>
 
  <ul class="example-orbit" data-orbit>
  <li>
    <img src="img/CrossFit-tire-flipping.jpg" alt="slide 1" />
    <div class="orbit-caption">
      Caption One.
    </div>
  </li>
  <li class="active">
    <img src="img/girl_in_gym.jpg" alt="slide 2" />
    <div class="orbit-caption">
      Caption Two.
    </div>
  </li>
  <li>
    <img src="img/crossfit_rope_climb.jpg" alt="slide 3" />
    <div class="orbit-caption">
      Caption Three.
    </div>
  </li>
</ul>
  
 
 
  <div class="row" id="index-pics">
    <div class="large-4 columns">
      <img src="img/stacked_weights.jpg"/>
      <h4>What Is This?</h4>
      <p>The ScoreBoard does two things. First it tells you everything you ever wanted to know about your fitness from the workouts you do. This  </p>
    </div>
    
    <div class="large-4 columns">
      <img src="img/crossfit_rings.jpg"/>
      <h4>How Does It Work?</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. </p>
    </div>
    
    <div class="large-4 columns">
      <img src="img/gym_bars.jpg"/>
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
    </div>
  
    </div>
    
 
<div class="row">
    <div class="large-12 columns">
    
      <div class="panel">
        <h4>Give it a try!</h4>
            
        <div class="row">
          <div class="large-9 columns">
            <p>We'd love to hear from you, you attractive person you.</p>
          </div>
          <div class="large-3 columns">
            <a href="#" class="radius button right">Contact Us</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>

<!--
        <nav class="login-nav">
            <ul>
                <li id="login">Register/Login</li>

            </ul>
    
        </nav>
    </nav>
    
    <header class="header">
        <div id="page_title">
            <h1 id="the">The</h1>
            <h1>SCOREBOARD</h1>
            <h2>The Ultimate Tool to Measure Your Fitness</h2>
        </div>
    </header>

    <section class="wrapper">
        <div class="content">
            <h2>What is Scoreboard?</h2>
            <p>Scoreboard is your measure of fitness measured against your friends and the world. Want to know how you measure up? </p>
            <h2>How it works</h2>
            <p>Easier than burpees, that's for sure. Simply log your workouts and exercises and Scoreboard does the rest. As soon as you enter your workout you will see how you stack up against your friends, your city, and the world! </p>
        </div>
-->
        
    </section>
      <div class="row">
        <div class="large-6 columns">
          <div class="signup-panel" id="try-it">
            <h4 class="welcome"> Want to know how you measure up?</h4>
            <form id="start-form" class="shadow">
                <div>
                    <label for="bench-press">Max 1 rep bench press:</label><br>
                    <input id="bench-press" type="number">lbs<br>
                    <label for="push-ups">Max push-ups:</label><br>
                    <input id="push-ups" type="number">reps<br>
                    <input type="radio" name="sex" value="male">Male
                    <input type="radio" name="sex" value="female">Female<br>
                    <a href=""><button onclick="" class="button" id="submit2" type="button" value="Score Me" >Score Me</button></a>
                </div>
             </form>
              </div>
            </div>
          </div>
<!--        This section is the Register/signup form from foundation's building blocks-->
     <div class="row">
        <div class="large-6 columns">
          <div class="signup-panel" id="register" >
            <h4 class="welcome"> Welcome to the ScoreBoard!</h4>
            <form id="register-login">
              <div class="row collapse">
                <div class="small-2  columns">
                  <span class="prefix"><i class="fi-torso-female"></i></span>
                </div>
                <div class="small-10  columns">
                  <input type="text" placeholder="username" id="username1">
                </div>
              </div>
              <div class="row collapse">
                <div class="small-2 columns">
                  <span class="prefix"><i class="fi-mail"></i></span>
                </div>
                <div class="small-10  columns">
                  <input type="text" placeholder="email">
                </div>
              </div>
              <div class="row collapse">
                <div class="small-2 columns ">
                  <span class="prefix"><i class="fi-lock"></i></span>
                </div>
                <div class="small-10 columns ">
                  <input type="text" placeholder="password">
                </div>
              </div>
                <a href="dashboard.php"><button onclick="" class="button" id="submit1" type="button" value="Sign Up!" >Sign Up</button></a>
            </form>
            
             <p>Already have an account? <a href="#">Login here &raquo</a></p>
          </div>
    </div>
   </div>              
            
    <?php include ('includes/footer.php'); ?>
