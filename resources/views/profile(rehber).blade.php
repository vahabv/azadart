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
       
                              </div>
                         </div>
               </div>
              

<!-- container fluid end -->

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
});
</script>