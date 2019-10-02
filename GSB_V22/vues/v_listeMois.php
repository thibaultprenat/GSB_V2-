 <div class = container>
 <div class = jumbotron>
      <h2>Mes fiches de frais</h2><br>
      <h3>Mois à sélectionner : </h3>
      <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">
         
      <p>
	 
        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lstMois" class="form-control" name="lstMois">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
            
        </select>
      </p>
      
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" class="btn btn-success" value="Valider" size="20" />
        <input id="annuler" type="reset" class="btn btn-danger" value="Effacer" size="20" />
      </p> 
      </div>
      </div>
      </div>
        
      </form>