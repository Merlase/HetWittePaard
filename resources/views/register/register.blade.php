@extends('layout.default')
@section('content')
<h1>Registreren</h1>
 <form role="form">
  <div class="form-group required">
    <label class="control-label" for="email">voornaam:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group required">
    <label class="control-label" for="pwd">achternaam:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
     <div class="form-group required">
         <label class="control-label" for="pwd">gebruikersnaam:</label>
         <input type="extra" class="form-control" id="pwd">
     </div>
     <div class="form-group required">
         <label class="control-label" for="pwd">e-mail:</label>
         <input type="extra" class="form-control" id="pwd">
     </div>
     <div class="form-group ">
         <label class="control-label" for="pwd">telefoonnummer:</label>
         <input type="extra" class="form-control" id="pwd">
     </div>
     <div class="form-group required">
         <label class="control-label" for="pwd">wachtwoord:</label>
         <input type="extra" class="form-control" id="pwd">
     </div>
     <div class="form-group required">
         <label class="control-label" for="pwd">wachtwoord herhalen:</label>
         <input type="extra" class="form-control" id="pwd">
     </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@stop