 <div id="contenu">
      <h2>Mes dates de vacances</h2>
      <h3>Mois à sélectionner : </h3>
       <!--<form action="index.php?uc=gestionVacances&action=voirVacance" method="post"> -->
      <form  method="post"> 
     <fieldset>
            <legend>Demande de vacance
            </legend>
         <table border="1" cellpadding="15" style="margin-left:30%;">
         <tr>   
         <th>Date debut vacance</th>
        <th>Date fin vacance</th>
        <th>Validation</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Choix Responsable</th>    
        </tr>
        
        <tr>
			<?php
				foreach ($lesVacances as $uneVacance)
				{
					$dateDebut = $uneVacance['dateDebut'];
					$dateFin = $uneVacance['dateFin'];
					$validation = $uneVacance['validation'];
                    $nomvisiteur= $uneVacance['nom'];
                    $prenomvisiteur = $uneVacance['prenom'];
			?>
        
             
             <td><label for="dateDebut"><?php echo $dateDebut ?></label></td>
            <td><label for="dateFin"><?php echo $dateFin ?></label></td>
            <td><label for="validation"><?php echo $validation ?></label></td> 
            <td><label for="nom"><?php echo $nomvisiteur ?></label></td> 
            <td><label for="prenom"><?php echo $prenomvisiteur ?></label></td>
            
            <td><button name="submitbutton" type="submit" formaction="index.php?uc=gestionVacancesResp&action=gestionDecisionVacance" value="<?php echo $uneVacance['id']; ?>">Decision</button></td>
             </tr>
             
         
			<?php
				}
			?>
			</table>
			
			
			
           
          </fieldset>
      

      </form>