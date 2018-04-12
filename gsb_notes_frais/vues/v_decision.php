<?php 
/*echo json_encode($_REQUEST);
echo $_REQUEST['submitbutton'];*/
?>
<form  method="post" action="index.php?uc=gestionVacancesResp&action=choixDecisionVacance">
    <table border="1" cellpadding="15" id="tabvacance">
        <tr>
            <th>DateDebut </th>
            <th>DateFin </th>
            <th>Nom </th>
            <th>Prenom </th>
            <th>Decision </th>
        </tr>
        <tr>
			<?php
            foreach($laDemandeDeVacance as $uneReponse){
                    $dateDebut = $uneReponse['dateDebut'];
					$dateFin = $uneReponse['dateFin'];
                    $nomvisiteur= $uneReponse['nom'];
                    $prenomvisiteur = $uneReponse['prenom'];
        ?>
        <td><label for="dateDebut"><?php echo $dateDebut ?></label></td>
            <td><label for="dateFin"><?php echo $dateFin ?></label></td>
            <td><label for="nom"><?php echo $nomvisiteur ?></label></td> 
            <td><label for="prenom"><?php echo $prenomvisiteur ?></label></td>
        <input type="hidden" name="idVacance" value="<?php echo $_REQUEST['submitbutton']; ?>">
    <td><input type="radio" name="decision" value="valider" ><label>Valider</label><br>
    <input type="radio" name="decision" value="refuser"> <label>Refuser</label></td>
    </tr>
    </table>
    <div class="piedForm" style="position:relative;margin-left:69%">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="button" value="Retour" onclick="document.location.href = document.referrer" size="20" />
      </p> 
      </div>
        <?php
            
				}
			?>
    </form>


