<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class ="container">
<div class ="jumbotron">
<div id="contenu">
      <h2>Identification utilisateur</h2>


<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
   
    
			<p>
       <label for="nom">Login</label>
       <input id="login" type="text" class="form-control" name="login"  size="30" maxlength="45">
      </p>
			<p>
				<label for="mdp">Mot de passe*</label>
			  <input id="mdp"  type="password"  class="form-control" name="mdp" size="30" maxlength="45">
      </p>
         <input type="submit" value="Valider" class="btn btn-success" name="valider">
         <input type="reset" value="Annuler" class="btn btn-danger" name="annuler"> 
      </p>
</form>

</div>
</div>
