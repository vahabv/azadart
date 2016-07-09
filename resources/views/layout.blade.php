<!DOCTYPE html>
<html>
	<head>
		<title>AzadArt</title>
	</head>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="/assets/css/n-style.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
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
				<div class="col-md-3 col-xs-3 profile">
					<div class="alllogin">
						<div class="alllogin-n">
							
							<span class="login-n" href="">LOGIN</span>
							
							
							<span class="signup-n" href="">SIGN UP</span>
						</div>
					</div>
				</div>
				<div class="loginfull">
					
					<form>
						<h4>AzadArt-OPX</h4>
						<label>İstifadəçi adı və ya e-poçt</label><br><br>
						<input type="text" name="" placeholder="İstifadəçi adını daxil edin"><br><br>
						<label>Şifrənizi daxil edin</label><br><br>
						<input type="password" name="" placeholder="Şifrə"><br><br>
						<button>Daxil Ol</button>
						<a href="">Şifrəmi Unutmuşam</a>
					</form>
				</div>
				<div class="signupfull">
				</div>
<div class="signup">
<h4>AzadArt-OPX</h4>
	<form id="signup">
		<span>Vəzifənizi təyin edin</span><br><br>
		<label for="username">İstifadəçi adı</label><br>
		<input type="text" name="username" placeholder="İstifadəçi adını daxil edin"><br><br>
			<label for="email">Email adresiniz</label><br>
		<input type="text" name="email" placeholder="Email adresinizi daxil edin"><br><br>
			<label for="password">Şifrə</label><br>
		<input type="text" name="password" placeholder="Şifrənizi daxil edin"><br><br>
		<label for="password_retypy">Şifrənizi Təkrar yazın</label><br>
		<input type="text" name="password_retypy" placeholder="Şifrənizi təkrar daxil edin"><br><br>	
		<button class="signbtn">Qeydiyyatdan Keç</button><br><br>
		<p>By creating an account, you agree to our</p>
		<a href="">Term of Use and Privacy policy</a>
	</form>

</div>
				
			</div>
			
			<!-- header end -->
@yield ('content')
			
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