<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="UTF-8">
  <title><?php echo "SB | Dashboard"; ?></title>
<?php include('includes/header.php'); ?>

 
  <div class="row">
    <div class="large-12 columns">
        <h1 id="userHeading">Username placeholder</h1>

      <div class="row">
        <div class="large-12 columns">
          <div class="row">
             
            <div id="friends" class="large-4 small-6 columns card" draggable="true" >
 
              <h4>Friends Activity</h4><hr>
 
              <div class="row">
                <div class="large-1 column">
                  <img src="http://placehold.it/50x50&text=[img]">
                </div>
 
                <div class="large-9 columns">
                  <h5><a href="#">Friend Name</a></h5>
                  <h6 class="subheader show-for-small">Doors at 00:00pm</h6>
                </div>
              </div><hr>
 
              <div class="hide-for-small">
                <div class="row">
                  <div class="large-1 column">
                    <img src="http://placehold.it/50x50&text=[img]">
                  </div>
 
                  <div class="large-9 columns">
                    <h5 class="subheader"><a href="#">Friend Name</a></h5>
                  </div>
                </div><hr>
 
                <div class="row">
                  <div class="large-1 column">
                    <img src="http://placehold.it/50x50&text=[img]">
                  </div>
 
                  <div class="large-9 columns">
                    <h5 class="subheader"><a href="#">Friend Name</a></h5>
                  </div>
                </div><hr>
 
                <div class="row">
                  <div class="large-1 column">
                    <img src="http://placehold.it/50x50&text=[img]">
                  </div>
 
                  <div class="large-9 columns">
                    <h5 class="subheader"><a href="#">Friend Name</a></h5>
                  </div>
                </div>
              </div>
            </div>
             
 
 
             
 
            <div id="dailyPic" class="large-4 small-6 columns card" draggable="true">
                <h4>Pic of the Day</h4><hr>
              <img src=img/playground_rings.jpg alt="gym rings">
            </div>

              
            <div id="WOD_blog" class="large-4 small-12 columns card" draggable="true">
 
              <h4>Blog</h4><hr>
              <div class="panel">
                <h5><a href="#">Post Title 1</a></h5>
 
                <h6 class="subheader">
                  Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...
                </h6>
 
                <h6><a href="#">Read More »</a></h6>
              </div>
 
              <div class="panel hide-for-small">
                <h5><a href="#">Post Title 2 »</a></h5>
              </div>
 
              <div class="panel hide-for-small">
                <h5><a href="#">Post Title 3 »</a></h5>
              </div>
 
              <a href="#" class="right">Go To Blog »</a>
 
            </div>
 
             
 
          </div>
        </div>
      </div>
        <hr>
        <?php include('includes/footer.php'); ?>