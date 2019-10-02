    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        

    <div class="card" style="width: 18rem;">
  <div class="card-header">
              Visiteur :  <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a></li>
    <li class="list-group-item"><a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a></li>
    <li class="list-group-item"><a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a></li>
  </ul>
</div>
<br>
    