@extends('layout.default')
@section('content')
<?php
$p=$_POST;
if(isset($p) && !empty($p) ) {
	var_dump($p);
}
?>
<h1>Bedrijf Registreren</h1>
<form action="" method="post" role="form">
	<div class="form-group required">
		<label class="control-label" for="username">Gebruikersnaam:</label>
		<input type="text" class="form-control" id="username" name="username" required>
	</div>
	<div class="form-group required">
		<label class="control-label" for="companyname">Bedrijfsnaam:</label>
		<input type="text" class="form-control" id="companyname" name="companyname" required>
	</div>
	<div class="form-group required">
		<label class="control-label" for="email">E-mail:</label>
		<input type="email" class="form-control" id="email" name="email" required>
	</div>
	<div class="form-group">
		<label class="control-label required" for="tel">Telefoonnummer:</label>
		<input type="tel" class="form-control" id="tel" name="tel" required>
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