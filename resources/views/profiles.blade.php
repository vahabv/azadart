<!DOCTYPE html>
<html>
	<head>
		<title>AzadArt</title>
	</head>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/n-style.css">
	<body>
		<!-- search -->
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
				@if (Auth::guest())
				<div class="col-md-3 col-xs-3 profile">
				
					<div class="alllogin">
						<div class="alllogin-n">
							
							<span class="login-n" href="">LOGIN</span>
							
							
							<span class="signup-n" href="">SIGN UP</span>
						</div>
					</div>
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
		<label for="username">İstifadəçi adı</label><br>
		<input type="text" id="name" placeholder="İstifadəçi adını daxil edin" name="name" value="{{ old('name') }}" ><br><br>
			<label for="email">Email adresiniz</label><br>
		<input type="text" name="email" placeholder="Email adresinizi daxil edin" value="{{ old('email') }}"><br><br>
			<label for="password" name="password" >Şifrə</label><br>
		<input type="password" name="password" placeholder="Şifrənizi daxil edin"><br><br>
		<label for="password_confirmation">Şifrənizi Təkrar yazın</label><br>
		<input type="password" name="password_confirmation" placeholder="Şifrənizi təkrar daxil edin"><br><br>	
		<button type="submit" class="signbtn">Qeydiyyatdan Keç</button><br><br>
		<p>By creating an account, you agree to our</p>
		<a href="">Term of Use and Privacy policy</a>
	</form>

</div>
				
			</div>
			
			<!-- header end -->
			<div class="row background">
				<div class="sbmenu">
					<div class="col-md-2 col-xs-2 sbinput">
						<h2>Category</h2>
						<select>
							<option>All Categoris</option>
							<option>Ecommerce</option>
							<option>Web Design</option>
						</select>
					</div>
					<div class="col-md-2 col-xs-2 sbinput">
						<h2>Locations</h2>
						<select>
							<option>All Locations</option>
							<option>New Zellond</option>
							<option>UK</option>
						</select>
					</div>
					<div class="col-md-2 col-xs-2 sbinput">
						<h2>Keyword</h2>
						<div>
							<input type="text" name="" placeholder="Keyword">
							<a href="">
								<i id="searchicon" class="fa fa-search"></i>
							</a>
						</div>
					</div>
					<div class="col-md-2 col-xs-2 sbinput">
						<h2>Hourly rate</h2>
						<div>
							<input  type="range" name="">
						</div>
					</div>
					<div class="col-md-2 col-xs-2 sbinput">
						<h2>Skills Required</h2>
						<input type="text" name="" placeholder="Keyword">
						<a href="">
							<i id="searchicon" class="fa fa-search"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="container">
				<button class="btnmain">Create a Profile <i class="fa fa-plus-circle"></i></button>
				<div class="row main">
					<div class="col-md-6 col-xs-6 worker">
						<img src="http://1.gravatar.com/avatar/928bd2c6c64963e07140456ba10a0aec?s=96&d=mm&r=G">
						<div class="workprof">
							<span>Jamisony4870</span><br>
							<a href="">these discounts are great</a>
						</div>
						<button>View Profile</button>
						<div class="row bottom-profile">
							<div class="col-md-6 col-xs-6 star">
								<i class="fa fa-star-o off star-off-png"></i>
								<i class="fa fa-star-o off star-off-png"></i>
								<i class="fa fa-star-o off star-off-png"></i>
								<i class="fa fa-star-o off star-off-png"></i>
								<i class="fa fa-star-o off star-off-png"></i>
							</div>
							<div class="col-md-4 col-xs-4 money">
							<h6>$15.00/h</h6></div>
							<div class="col-md-2 col-xs-2 years">
							<h6>5&nbspyears</h6></div>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 worker">
						<img src="http://1.gravatar.com/avatar/928bd2c6c64963e07140456ba10a0aec?s=96&d=mm&r=G">
						<div class="workprof">
							<span>Jamisony4870</span><br>
							<a href="">these discounts are great</a>
						</div>
						<button>View Profile</button>
						<div class="row bottom-profile">
							<div class="col-md-6 col-xs-6 star">
								<i class="fa fa-star-o off star-off-png"></i>
								<i class="fa fa-star-o off star-off-png"></i>
								<i class="fa fa-star-o off star-off-png"></i>
								<i class="fa fa-star-o off star-off-png"></i>
								<i class="fa fa-star-o off star-off-png"></i>
							</div>
							<div class="col-md-4 col-xs-4 money">
							<h6>$15.00/h</h6></div>
							<div class="col-md-2 col-xs-2 years">
							<h6>5&nbspyears</h6></div>
						</div>
					</div>
				</div>
			</div>
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
	</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
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