<!DOCTYPE html>
<html>
  <head>
    <title>Profile</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="/assets/css/n-style.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
  </head>
  <body class="profileback-a">
    <!-- container fluid start -->
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-12 accauntbar-a">
          <div class="container">
            
            <h3>Username'Profile</h3><br>
            <button class="profilebtn-a">Account Details</button>
            <button class="profilebtndisabled-a">Profiles Details</button>
            <button class="profilebtndisabled-b">Project Details</button>
            
          </div>
          <div class="container">
            <div class="col-md-12 profiledit-a">
              <div class="col-md-7 open">
<div class="col-md-12 workhistory-a"><h4><b>Current bids </b></h4></div>
<div class="col-md-12  notposte-a"><p>No current bids.

</p></div>

                           </div>
                <!-- <div class="col-md-12  notposte-a"><p>You have not posted any projects yet.
                </p></div> -->
                <div class="col-md-7 usrnameediting-a">
                  <div class="col-md-12">
                    <div class="col-md-3">
                      <img src="/assets/img/ppphoto.png">
                      <button type="button" class="btnphotorem-a">Change</button>
                    </div>
                    <div class="col-md-9"><h5>Your Full Name</h5>
                      <input  class="inputcreate-a" type="" placeholder="YourName">
                      <h5>Address</h5>
                      <input  class="inputcreate-a" type="" placeholder="Adress">
                      <h5>Email Address</h5>
                      <input  class="inputcreate-a" type="" placeholder="Your@mail.ru">
                      <button type="button" class="ppremove-a"> Save Details</button>
                    </div>
                  </div>
                  
                  
                </div>
                
                <div class="col-md-7 iscijobs-a">
                  
                  
                  <h4>Your Skills</h4>
                  <input   class="protitle-a" type="text" name="" placeholder="e.g: Wordpress Developer">
                  <br>
                  <h4> Category</h4>
                  <input  class="yourate-a"  type="text" name="" placeholder="e.g:30">
                  <br>
                  <h4>Professional Title</h4>
                  <select  class="protitle-a" type="text" name="" placeholder="Skills (max is 5)">
                    <option>DESIGN</option>
                    <option>WEB</option>
                    <option>PROQRAM</option>
                  </select>
                  <br>
                  <h4>Your Country</h4>
                  <input  class="protitle-a" type="text" name="" placeholder="Country">
                  <br>
                  <h4>Your Country </h4>
                  <textarea  class="protitle-a" type="text" name=""></textarea>
                  <br>
                  <h4>About You</h4>
                  <input step="5" min="1" type="number" name="" value="" style="width: 66px;height: 34px;"> &nbsp year(s)
                  <br>
                  <input type="file" value="Your Portfolio">
                </div>
                
                <div class="col-md-4 userara-a">
                  <p>You have not confirmed your email yet, please check out your mailbox.</p>
                  <p><a href="#">Request confirm email.</a></p>
                  <ul>
                    
                    <li><i class="fa fa-plus-circle" aria-hidden="true"></i>Post a Project</li>
                    <li> <i class="fa fa-key" aria-hidden="true"></i>Post a Project</li>
                    <li> <i class="fa fa-sign-out" aria-hidden="true"></i>Post a Project</li>
                  </ul>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <!-- container fluid end -->
    </body>
  </html>
  <div>
    <!--   <i class="fa fa-plus-circle" aria-hidden="true"></i>Post a Project
  </div>
  <div>
    <i class="fa fa-key" aria-hidden="true"></i>Post a Project
  </div>
  <div>
    <i class="fa fa-sign-out" aria-hidden="true"></i>Post a Project
  </div> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
  $(".profilebtndisabled-a").click(function(){
  $(".usrnameediting-a").hide();
  $(".iscijobs-a").show();
  $(".notposte-a").hide();
  $(".workhistory-a").hide();
  });
  $(".profilebtn-a").click(function(){
  $(".usrnameediting-a").show();
  $(".iscijobs-a").hide();
  $(".notposte-a").hide();
  $(".workhistory-a").hide();
  });
  $(".profilebtndisabled-b").click(function(){
  $(".open").show();
  $(".iscijobs-a").hide();
  $(".usrnameediting-a").hide();
    $(".notposte-a").show();
  $(".workhistory-a").show();
  });
  });
  </script>