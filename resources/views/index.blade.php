<!DOCTYPE html>
<html>
    <head>
        <title>AzadArt</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/assets/css/n-style.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    </head>
    <body>
    <div class="loginfull">
                    
                    <form method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                        <h4>AzadArt-OPX</h4>
                        <label>İstifadəçi adı və ya e-poçt</label><br><br>
                        <input type="text" name="email" placeholder="İstifadəçi adını daxil edin" value="{{ old('email') }}"><br><br>
                        <label>Şifrənizi daxil edin</label><br><br>
                        <input type="password" name="password" placeholder="Şifrə"><br><br>
                        <button>Daxil Ol</button>
                        <a href="">Şifrəmi Unutmuşam</a>
                    </form>
                </div>
                <div class="signupfull">
                </div>
                <div class="signup">
<h4>AzadArt-OPX</h4>
    <form id="signup" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}
        <span>Vəzifənizi təyin edin</span><br><br>
        <input type="radio" value="0" style="height:20px;width:20px;" name="status">
        <input type="radio" value="1" style="height:20px;" name="status">
        <label for="username">İstifadəçi adı</label><br>
        <input type="text" id="name" placeholder="İstifadəçi adını daxil edin" name="name" value="{{ old('name') }}" ><br><br>
            <label for="email">Email adresiniz</label><br>
        <input type="email" name="email" placeholder="Email adresinizi daxil edin" value="{{ old('email') }}"><br><br>
            <label for="password" name="password">Şifrə</label><br>
        <input type="password" name="password" placeholder="Şifrənizi daxil edin"><br><br>
        <label for="password_confirmation">Şifrənizi Təkrar yazın</label><br>
        <input type="password" name="password_confirmation" placeholder="Şifrənizi təkrar daxil edin"><br><br>  
        <button type="submit" class="signbtn">Qeydiyyatdan Keç</button><br><br>
        <p>By creating an account, you agree to our</p>
        <a href="">Term of Use and Privacy policy</a>
    </form>

</div>
        <!-- container fluid start###################### -->
        <div class="container-fluid main-a">
            <div class="row">
                <div class="col-md-6 left-a">
                    <div class="a-menutitle">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        <span>MENU</span>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span>SEARCH</span>
                    </div>
                    <div class="a-logon">
                        <img src="/assets/img/logowhite.png">
                    </div>
                    <div class="null">
                        
                        <h1>The best way to<br>
                        find a professional</h1>
            <button class="post-a"> <a href="submitproject">Post a Project</a></button>
                    </div>
                </div>

                <div class="col-md-5 rigth-a">
                    <div class="a-slbtn">
                    @if (Auth::guest())
                        <button class="sign-a"  type="submit">SIGN UP</button>
                        <button class="login-a" type="submit">LOGIN</button>
                            
                    </div>
                    @else
                 <div class="proficon">
<img src="http://1.gravatar.com/avatar/d2a672c5ad8adcd83f9ecc215c9a2428?s=96&d=mm&r=G">
<span>{{ Auth::user()->name }}</span>
<div class="profopen">
        <span class="profopnavatar">
        <img style="margin-bottom: 0px;" src="http://0.gravatar.com/avatar/8abce4c1d7441f807b4c690b3f43cf53?s=96&d=mm&r=G">{{ Auth::user()->name }}</span>
        
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
                @endif

            
                    <div class="nul2">
                        <h1>Need a job? <br>
                        Tell us your story</h1>
                       <a href="auth"> <button class="create-a"> Create a Profile</button></a>
                    </div>
                </div>
                
            </div>
            <div class="col-md-12 project-a">
            <a href=""><button class="cretbtn">Post a Project</button></a>
            <div class="container">
                <h1>Looking for Available Projects?</h1>
                <button id="btna" class="btnnone-a">Latest projects</button>
                <button id="btnb" class="btnnone-a">Feature Projects</button>
            </div>
            <div class="container">
                <div class="col-md-3 projectstitle-a">
                    <span>PROJECT TITLE</span>
                </div>
                <div class="col-md-3 projectstitle-a">
                    <span>BY</span>
                </div>
                <div class="col-md-4 projectstitle-a">
                    <span>POSTED DATE</span>
                </div>
                <div class="col-md-1 projectstitle-a">
                    <span>BUDGET</span>
                </div>
                <div class="col-md-12 projectdetals-a">
                    <div class="col-md-3"><img src="/assets/img/ppphoto.png">Test</div>
                    <div class="col-md-3">AzadArt</div>
                    <div class="col-md-4">20.16.20</div>
                    <div class="col-md-2">5$
                   <a href=""> <button class="btnsummary"> Apply</button></a>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-md-12 profiller-a">
                <div class="container">
                    <h1>Looking for Professional Freelancers?</h1>
               <a href="auth"> <button class="btn-post-profile">Create a Profile</button></a>
                    <button id="btnc" class="btntwo-a">Latest projects</button>
                    <button id="btnd" class="btntwo-a">Top Rating Profiles</button>
                    
                    <div class="col-md-12 freelancers-a">
                        
                        <div class="col-md-5 worker-a">
                            <img src="http://1.gravatar.com/avatar/928bd2c6c64963e07140456ba10a0aec?s=96&d=mm&r=G">
                            <div class="workprof-a">
                                <span>Jamisony4870</span><br>
                                <a href="">these discounts are great</a>
                            </div>
                            <a href="author"><button>View Profile</button></a>
                            <div class="col-md-12 bottom-profile-a">
                                <div class="col-md-6 star-a">
                                    <i class="fa fa-star-o off star-off-png"></i>
                                    <i class="fa fa-star-o off star-off-png"></i>
                                    <i class="fa fa-star-o off star-off-png"></i>
                                    <i class="fa fa-star-o off star-off-png"></i>
                                    <i class="fa fa-star-o off star-off-png"></i>
                                    
                                </div>
                                <div class="col-md-4 money-a">
                                <h6>$15.00/h</h6></div>
                                <div class="col-md-2 years-a">
                                <h6>5&nbspyears</h6></div>
                            </div>
                        </div>
                        <div class="col-md-5 worker-a">
                            <img src="http://1.gravatar.com/avatar/928bd2c6c64963e07140456ba10a0aec?s=96&d=mm&r=G">
                            <div class="workprof-a">
                                <span>Jamisony4870</span><br>
                                <a href="">these discounts are great</a>
                            </div>
                            <a href="author"><button>View Profile</button></a>
                            <div class="col-md-12 bottom-profile-a">
                                <div class="col-md-6 star-a">
                                    <i class="fa fa-star-o off star-off-png"></i>
                                    <i class="fa fa-star-o off star-off-png"></i>
                                    <i class="fa fa-star-o off star-off-png"></i>
                                    <i class="fa fa-star-o off star-off-png"></i>
                                    <i class="fa fa-star-o off star-off-png"></i>
                                    
                                </div>
                                <div class="col-md-4 money-a">
                                <h6>$15.00/h</h6></div>
                                <div class="col-md-2 years-a">
                                <h6>5&nbspyears</h6></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- ############ -->
                
                <div class="col-md-12 marketplace">
                    <div class="container-fluid">
                        <div class="title">
                            <h3>THE FREELANCE MARKETPLACE WP THEME MADE BY ENGINETHEMES</h3>
                            <h4 style=" color: #3b3b3b;font-size: 34px;font-weight: 600;line-height: 1.4;   margin-bottom: 25px;
                            ">We love to build awesome solutions for your business.<br>
                            With all our passion and experience in WP.</h4>
                        </div>
                        <div class="col-md-3 allbusines">
                            <div class="block">
                                <div class="block2">
                                    <i class="fa fa-bullhorn"></i>
                                    <h1>1</h1>
                                    <br>
                                    <p>Projects</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 allbusines">
                            <div class="block">
                                <div class="block2">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    <h1>2</h1>
                                    <br>
                                    <p>Profiles</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 allbusines">
                            <div class="block">
                                <div class="block2">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                    <h1>7</h1>
                                    <br>
                                    <p>Employers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 allbusines">
                            <div class="block">
                                <div class="block2">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <h1>14</h1>
                                    <br>
                                    <p>Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 speedworld-a">
                    <div class="col-md-4 paragrafs"><p>Your theme is very clean, simple and easy to customize, even for someone with no previous experience like me. Thanks you so much for such beautiful theme and all your support. I will recommend DirectoryEngine to anyone interested.
                    </p><h4> <b>Speed World</b></h4></div>
                <div class="col-md-3 paragrafs"></p>I choose FreelanceEngine when I need UI/UX project done right. It not only removes my stress but also save me much time and money. Looking for ward to experiencing your new products.
            </p><h4>  <b>Greenhomes</b></h4>
        </div>
    <div class="col-md-4 paragrafs"></p>Thank you for creating such an amazing and professional product. Your themes did help my business and my clients a lot. They are truly elegant, useful and valuable. I’ll definitely look to you for my future WordPress theme purchases.
</p><h4>  <b> Hoover</b></h4>
</div>
</div>

</div>



</div>
</div>
<div class="col-md-12 footer-a">
<img alt="AzadArt" src="/assets/img/logowhite.png">

<div class="Designeid-a">
<a href="../">AzadArt</a>
<span > - Powered by AzadArt inc. </span>
</div>
</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#btnb").click(function(){
        $(".projectdetals-a").hide();
    });
    $("#btna").click(function(){
        $(".projectdetals-a").show();
    });
});
$(document).ready(function(){
    $("#btnd").click(function(){
        $(".freelancers-a").hide();
    });
    $("#btnc").click(function(){
        $(".freelancers-a").show();
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
$(".sign-a").click(function(){
$(".signupfull").fadeIn('fast');
$(".signup").fadeIn('fast');
});
$(".signupfull").click(function(){
$(".signupfull").fadeOut('fast');
$(".signup").fadeOut('fast');
});
$(".login-a").click(function(){
$(".loginfull").fadeIn('fast');
$(".signupfull").fadeIn('fast');
});
$(".signupfull").click(function(){
$(".signupfull").fadeOut('fast');
$(".loginfull").fadeOut('fast');
});
});
</script>