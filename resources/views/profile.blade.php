<?php
$name = Auth::user()->status; 
if($name === 0){ ?>
  <!DOCTYPE html>
<html>
  <head>
    <title>Profile</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="/assets/css/n-style.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
  </head>
            <div class="container-fluid search_project">
              <div class="row">
                <div class="container search_complate">
                  <a href="">
                    <i class="fa fa-times"></i>
                  </a>
                  <select class="slectcls">
                    <option value="prejectseahrch">Searching Projects</option>
                    <option value="frenalcerssearch">Searching Freelancers</option>
                  </select>
                  <br>
                  <br>
                  <p>
                    <input type="text" name="s" class="search-top" autocomplete="off" placeholder="TYPE KEYWORD HERE">
                    <span>Press Enter</span>
                  </p>
                  <p></p>
                  <div>
                    <div class="col-md-5 col-sm-5 col-xs-7  searchproject-a">
                      <span>PROJECT TITLE</span>
                    </div>
                    <div class="col-md-2 col-sm-3 hidden-xs  searchproject-a">
                      <span>BY</span>
                    </div>
                    <div class="col-md-2 col-sm-2 hidden-sm hidden-xs  searchproject-a">
                      <span>POSTED DATE</span>
                    </div>
                    <div class="col-md-1 col-sm-2 hidden-xs  searchproject-a">
                      <span>BUDGET</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- search end -->
            <div class="primarymenu">
              <a href="">
                <i class="fa fa-times"></i>
              </a>
              <form>
                <ul>
                  <li><a href="">Our team</a></li>
                  <li><a href="">Contact</a></li>
                  <li><a href="">Privacy</a></li>
                  <li><a href="">Terms of service</a></li>
                </ul>
              </form>
            </div>
            <div class="container-fluid content">
              <!-- header -->
              
              <div class="row header">
                
                <div class="col-md-4 col-xs-4 menu">
                  <i class="fa fa-bars menumain"></i>
                  <span class="menumain">MENU</span>
                  <i class="fa fa-search searchmain"></i>
                  <span class="searchmain">SEARCH</span>
                </div>
                <div class="col-md-4 col-xs-4 logo">
                  <a href="../index.php">
                    <img alt="AzadArt" src="/assets/img/logowhite.png">
                  </a>
                </div>
                <div class="col-md-3 col-xs-3 profile">
                  <div class="alllogin">
                    <div class="alllogin-n">
                      
                      <div class="proficon">
        <img src="http://1.gravatar.com/avatar/d2a672c5ad8adcd83f9ecc215c9a2428?s=96&d=mm&r=G ">
        <span>{{ Auth::user()->name }}</span>
        <div class="profopen">
                <span class="profopnavatar">
                <img style="margin-bottom: 0px;" src="http://0.gravatar.com/avatar/8abce4c1d7441f807b4c690b3f43cf53?s=96&d=mm&r=G ">{{ Auth::user()->name }}</span>
                
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                            Your Profile
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                            Notification
                </a>
            </li>
            <li>
                <a href="{{ url('/logout') }}">
                    <i class="fa fa-user"></i>
                            Logout
                </a>
            </li>
        </ul>
        </div>
        </div> 
                    </div>
                  </div>
                </div>
    
      </div>
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

                    <form action="insertw1" method="POST">
                      {{ csrf_field() }}
                      <input  class="inputcreate-a" type="text"  placeholder="YourName" name="wname">
                      <h5>Surname</h5>
                      <input  class="inputcreate-a" type="text" placeholder="Adress"  name="wadres">
                      <h5>Email Address</h5>
                      <input  class="inputcreate-a" type="email" placeholder="Your@mail"  name="wmail">
                      <button type="submit" class="ppremove-a"> Save Details</button>
                      </form>
                    </div>
                  </div>
                  
                  
                </div>
                
                <div class="col-md-7 iscijobs-a">
                  
                  <form action="/insertw2" >
                  <h4>Your Skills</h4>
                  <input class="protitle-a" type="text" name="wprofession" placeholder="e.g: Wordpress Developer">
                  <br>
                  <h4>Category</h4>
                  <input  class="yourate-a"  type="text" name="wportofolio" placeholder="e.g:30">
                  <br>
                  <h4>Professional Title</h4>
                  <select  class="protitle-a" type="text" name="whourrate " placeholder="Skills (max is 5)">
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
                  </form>
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
              <div class="row">
      <div class="row footer">
        <div class="footermain">
          <img alt="AzadArt" src="/assets/img/logowhite.png">
          <div class="Designeid">
            <a href="../index.html">AzadArt</a>
            <span > - Powered by AzadArt inc. </span>
          </div>
        </div>
        </div>
      </div>
          </div>
        </div>
      </div>
      <!-- container fluid end -->
    </body>
  </html>

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
  $(".menumain").click(function(){
$(".primarymenu").fadeIn('fast');
});
$(".fa-times").click(function(){
$(".primarymenu").fadeOut('fast');
});
$(".searchmain").click(function(){
$(".search_project").fadeIn('fast');
});
$(".proficon").click(function(){
$(".profopen").toggle('fast');
});
$(".signup-n").click(function(){
$(".signupfull").fadeIn('fast');
$(".signup").fadeIn('fast');
});

$(".signupfull").click(function(){
$(".signupfull").fadeOut('fast');
$(".signup").fadeOut('fast');
});
$(".login-n").click(function(){
$(".loginfull").fadeIn('fast');
$(".signupfull").fadeIn('fast');
});
$(".signupfull").click(function(){
$(".signupfull").fadeOut('fast');
$(".loginfull").fadeOut('fast');
});
  });
  </script>

<?php }else{
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <!-- Latest compiled and minified CSS -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="/assets/css/n-style.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

</head>
        <div class="container-fluid search_project">
              <div class="row">
                <div class="container search_complate">
                  <a href="">
                    <i class="fa fa-times"></i>
                  </a>
                  <select class="slectcls">
                    <option value="prejectseahrch">Searching Projects</option>
                    <option value="frenalcerssearch">Searching Freelancers</option>
                  </select>
                  <br>
                  <br>
                  <p>
                    <input type="text" name="s" class="search-top" autocomplete="off" placeholder="TYPE KEYWORD HERE">
                    <span>Press Enter</span>
                  </p>
                  <p></p>
                  <div>
                    <div class="col-md-5 col-sm-5 col-xs-7  searchproject-a">
                      <span>PROJECT TITLE</span>
                    </div>
                    <div class="col-md-2 col-sm-3 hidden-xs  searchproject-a">
                      <span>BY</span>
                    </div>
                    <div class="col-md-2 col-sm-2 hidden-sm hidden-xs  searchproject-a">
                      <span>POSTED DATE</span>
                    </div>
                    <div class="col-md-1 col-sm-2 hidden-xs  searchproject-a">
                      <span>BUDGET</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- search end -->
            <div class="primarymenu">
              <a href="">
                <i class="fa fa-times"></i>
              </a>
              <form>
                <ul>
                  <li><a href="">Our team</a></li>
                  <li><a href="">Contact</a></li>
                  <li><a href="">Privacy</a></li>
                  <li><a href="">Terms of service</a></li>
                </ul>
              </form>
            </div>
            <div class="container-fluid content">
              <!-- header -->
              
              <div class="row header">
                
                <div class="col-md-4 col-xs-4 menu">
                  <i class="fa fa-bars menumain"></i>
                  <span class="menumain">MENU</span>
                  <i class="fa fa-search searchmain"></i>
                  <span class="searchmain">SEARCH</span>
                </div>
                <div class="col-md-4 col-xs-4 logo">
                  <a href="../index.php">
                    <img alt="AzadArt" src="/assets/img/logowhite.png">
                  </a>
                </div>
                <div class="col-md-3 col-xs-3 profile">
                  <div class="alllogin">
                    <div class="alllogin-n">
                      
                      <div class="proficon">
        <img src="http://1.gravatar.com/avatar/d2a672c5ad8adcd83f9ecc215c9a2428?s=96&d=mm&r=G ">
        <span>{{ Auth::user()->name }}</span>
        <div class="profopen">
                <span class="profopnavatar">
                <img style="margin-bottom: 0px;" src="http://0.gravatar.com/avatar/8abce4c1d7441f807b4c690b3f43cf53?s=96&d=mm&r=G ">{{ Auth::user()->name }}</span>
                
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                            Your Profile
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                            Notification
                </a>
            </li>
            <li>
                <a href="{{ url('/logout') }}">
                    <i class="fa fa-user"></i>
                            Logout
                </a>
            </li>
        </ul>
        </div>
        </div> 
                    </div>
                  </div>
                </div>
    
      </div>
<body class="profileback-a"> 

<!-- container fluid start -->
                          <div class="container-fluid ">
                          <div class="row">
                          <div class="col-md-12 accauntbar-a">
                          <div class="container">
                        

                                     <h3>Username'Profile</h3><br>
                                  <button class="profilebtn-a">Account Details</button>
                                    <button class="profilebtndisabled-a">Account Details</button>

                                 

    </div>
             <div class="container">
                <div class="col-md-12 profiledit-a">
                           <div class="col-md-7 open">
<div class="col-md-12 workhistory-a"><h4><b>Work history and Reviews (0)</b></h4></div>
<div class="col-md-12  notposte-a"><p>You have not posted any projects yet.
</p></div>

                           </div>

                                               <div class="col-md-7 usrnameediting-a">
                                               <div class="col-md-12">
                                              <div class="col-md-3">
                                              <img src="http://1.gravatar.com/avatar/19790a8817d8280e05e7dc6d32f985b1?s=125&d=mm&r=G">
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
                                              <div class="col-md-4 userara-a">
                                         <p >You have not confirmed your email yet, please check out your mailbox.</p>
                                         <p><a  style="   " href="#">Request confirm email.</a></p>

                                        <ul>
                                          
                                          <li><i class="fa fa-plus-circle" aria-hidden="true"></i>Post a Project</li>
                                          <li> <i class="fa fa-key" aria-hidden="true"></i>Post a Project</li>
                                          <li> <i class="fa fa-sign-out" aria-hidden="true"></i>Post a Project</li>
                                        </ul>
                                        </div>


                                            </div>




                                  </div>

        <div class="row">
      <div class="row footer">
        <div class="footermain">
          <img alt="AzadArt" src="/assets/img/logowhite.png">
          <div class="Designeid">
            <a href="../index.html">AzadArt</a>
            <span > - Powered by AzadArt inc. </span>
          </div>
        </div>
        </div>

                              </div>
                         </div>
               </div>
              

<!-- container fluid end -->
</div>
       </body>
</html>

                                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".profilebtndisabled-a").click(function(){
        $(".usrnameediting-a").hide();
        $(".open").show();
    });
});
$(document).ready(function(){
    $(".profilebtn-a").click(function(){
        $(".usrnameediting-a").show();
        $(".open").hide();
    });
    $(".menumain").click(function(){
$(".primarymenu").fadeIn('fast');
});
$(".fa-times").click(function(){
$(".primarymenu").fadeOut('fast');
});
$(".searchmain").click(function(){
$(".search_project").fadeIn('fast');
});
$(".proficon").click(function(){
$(".profopen").toggle('fast');
});
$(".signup-n").click(function(){
$(".signupfull").fadeIn('fast');
$(".signup").fadeIn('fast');
});

$(".signupfull").click(function(){
$(".signupfull").fadeOut('fast');
$(".signup").fadeOut('fast');
});
$(".login-n").click(function(){
$(".loginfull").fadeIn('fast');
$(".signupfull").fadeIn('fast');
});
$(".signupfull").click(function(){
$(".signupfull").fadeOut('fast');
$(".loginfull").fadeOut('fast');
});
});
</script>
<?php } ?>


    
   


