<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<table class= "table table-striped">
       <caption>Descriptif des éléments hors forfait
       </caption>
             <tr>
                <th class="date">Date</th>
        <th class="libelle">Libellé</th>  
                <th class="montant">Montant</th>
                <th class="montant">Mode de paiement</th>   
                <th class="action">&nbsp;</th>              
             </tr>
          
    <?php    
      foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
    {
      $paiement =$unFraisHorsForfait['paiement'];
      switch($paiement){
        case '1':
        $paiement='Espece';
        break;
        case'2':
        $paiement='Carte de Crédit';
        break;
      }
      $libelle = $unFraisHorsForfait['libelle'];
      $date = $unFraisHorsForfait['date'];
      $montant=$unFraisHorsForfait['montant'];
      $id = $unFraisHorsForfait['id'];
  ?>    
            <tr>
                <td> <?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td><?php echo $paiement ?></td>
                <td><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
        onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer ce frais</a></td>
             </tr>
  <?php    
          
     }
    
  ?>    
                                          
    </table>
      <form action="index.php?uc=gererFrais&action=validerCreationFrais" method="post">

      <div class = container>
      <div class = jumbotron>
          <fieldset>
            <legend>Nouvel élément hors forfait <?php?>
            </legend>
            <p>
              <label for="txtDateHF">Date (jj/mm/aaaa): </label>
              <input type="text" class="form-control" id="txtDateHF" name="dateFrais" size="10" maxlength="10" value=""  />
            </p>
            <p>
              <label for="txtLibelleHF">Libellé</label>
              <input type="text" class="form-control" id="txtLibelleHF" name="libelle" size="70" maxlength="256" value="" />
            </p>
            <p>
              <label for="txtMontantHF">Montant : </label>
              <input type="text" class="form-control" id="txtMontantHF" name="montant" size="10" maxlength="10" value="" />
            </p>
            <div class="form-group">
            <div class="form-group">
    <label for="exampleFormControlSelect1">Mode de Paiement :</label>
    <select class="form-control" name = "paiement">
      <?php foreach ($modePaiement as $lesPaiements) { 
        echo '<option value = '.$lesPaiements['idpaiement'] .'>'.$lesPaiements['paiement'].'</option>';
    }
    ?>
    </select>
    <br>

    </fieldset>
      
      <div class="piedForm">
      <p>
        <input id="ajouter" type="submit" class="btn btn-success" value="Ajouter" size="20" />
        <input id="effacer" type="reset" class="btn btn-danger" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
  </div>
  </div>
  </div>
  

