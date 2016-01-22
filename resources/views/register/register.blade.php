@extends('layout.default')
@section('content')
<?php
$p=$_POST;
if(isset($p) && !empty($p) ) {
	var_dump($p);
}
?>
<p><a href="register-bedrijf">Registreren als bedrijf.</a></p>
<h1>Registreren</h1>
<form action="" method="post" role="form">
	<div class="form-group required">
		<label class="control-label" for="firstname">Voornaam:</label>
		<input type="text" class="form-control" id="firstname" name="firstname" required>
	</div>
	<div class="form-group required">
		<label class="control-label" for="lastname">Achternaam:</label>
		<input type="text" class="form-control" id="lastname" name="lastname" required>
	</div>
	<div class="form-group required">
		<label class="control-label" for="username">Gebruikersnaam:</label>
		<input type="text" class="form-control" id="username" name="username" required>
	</div>
	<div class="form-group required">
		<label class="control-label" for="email">E-mail:</label>
		<input type="email" class="form-control" id="email" name="email" required>
	</div>
	<div class="form-group required">
		<label class="control-label" for="tel">Telefoonnummer:</label>
		<input type="tel" class="form-control" id="tel" name="tel">
	</div>
	<div class="form-group required">
		<label class="control-label" for="pwd">Wachtwoord:</label>
		<input type="password" class="form-control" id="pwd" name="pwd" required>
	</div>
	<div class="form-group required">
		<label class="control-label" for="check">Wachtwoord herhalen:</label>
		<input type="password" class="form-control" id="check" name="check" required>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
@stop