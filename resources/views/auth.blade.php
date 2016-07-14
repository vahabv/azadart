
@extends ('layout')

@section ('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 tab-content">
				<div class="title-auth">
					<span>Already have an account? <a href="">Login</a></span>
				</div>
				<div class="auth-form">
				<div class="row">
				<div class="col-md-12">
				<div class="col-md-4 authfomr4">
					<label>Username</label>
					<span>Enter username</span>
					</div>
					<div class="col-md-8">
					<input type="text" name="" placeholder="Enter Username">
					</div>
					</div>
					</div>
				</div>
				<div class="auth-form">
					<div class="row">
				<div class="col-md-12">
				<div class="col-md-4 authfomr4">
					<label>Email Address</label>
					<span>Enter a email</span>
					</div>
					<div class="col-md-8">
					<input type="text" name="" placeholder="Your email adress">
					</div>
					</div>
					</div>
				</div>	
				<div class="auth-form">
					<div class="row">
				<div class="col-md-12">
				<div class="col-md-4 authfomr4">
					<label>I'm Looking To:</label>
					<span>Choose type account</span>
					</div>
					<div class="col-md-8">
					<input type="checkbox" name="">
					</div>
					</div>
					</div>
				</div>	
				<div class="auth-form">
					<div class="row">
				<div class="col-md-12">
				<div class="col-md-4 authfomr4">
					<label>Password</label>
					<span>Enter password</span>
					</div>
					<div class="col-md-8">
					<input type="text" name="" placeholder="Password">
					</div>
					</div>
					</div>
				</div>	
				<div class="auth-form">
					<div class="row">
				<div class="col-md-12">
				<div class="col-md-4 authfomr4">
					<label>Retype Password</label>
					<span>Retype password</span>
					</div>
					<div class="col-md-8">
					<input type="text" name="" placeholder="Password">
					</div>
					</div>
					</div>
				</div>
				<div class="form-authsend">
				<div class="row">
				<div class="col-md-12">
				<div class="col-md-4"></div>
				<div class="col-md-8">
				<button class="authbtn" type="submit">Create account</button>
					<p>By creating an account, you agree to our <a href=""> Term of Use and Privacy policy</a></p>
					</div>
					</div>
					</div>
				</div>			
			</div>
		</div>		
	</div>	
</div>	



@stop