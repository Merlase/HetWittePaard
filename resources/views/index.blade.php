@extends('layout.default')

@section('content')
<section id="hero">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>Where projects are located</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate consequatur deserunt ad eaque, harum quia, nesciunt commodi amet quod odio animi porro provident! Voluptate doloribus porro numquam, magni, expedita reprehenderit!</p>
			</div>
			<div class="col-md-4">
				<form method="post">
					<div class="form-group">
						<input id="phone" name="phone" type="tel" class="form-control" placeholder="Uw gebruikersnaam" required>
						<label for="phone">Gebruikersnaam</label>
					</div>
					<div class="form-group">
						<input id="phone" name="phone" type="tel" class="form-control" placeholder="Uw wachtwoord" required>
						<label for="phone">Wachtwoord</label>
					</div>
					<div class="form-group">
						<input type="submit">
					</div>
		        	<p class="text-muted">By clicking "Sign up for GitHub", you agree to our
				        <a href="#" target="_blank">Over ons</a> and
				        <a href="#" target="_blank">test</a>. 
				        <span class="js-email-notice">We will send you account related emails occasionally.</span>
			        </p>
				</form>
			</div>
		</div>
	</div>
</section>
@stop
