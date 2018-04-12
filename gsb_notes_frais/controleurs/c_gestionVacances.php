<?php
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
$lesVacances;
switch($action){       
    case 'voirVacance':   
        //affichage total des jours de vacances restants
        $lesJoursdeVacances =$pdo-> getTotalVacances($idVisiteur);
        //affichage des demande de vacance du visiteur
        $lesVacances = $pdo->getLesDemandesDeVacance($idVisiteur);
        include("vues/v_afficherVacances.php");
	break;
    case'validerVacance':
        //test sur le rempliassage de variable the_date et the_date2
        if(isset($_REQUEST['the_date']) and isset($_REQUEST['the_date2'])){
            $dateDebut = $_REQUEST['the_date'];
            $dateFin = $_REQUEST['the_date2'];  
        }
        if($dateDebut > $dateFin){
            ajouterErreur("La date dépasse les limites, le formulaire ne sera pas envoyé");
            include("vues/v_erreurs.php");
        }else{
        //calcule du nombre de vacance demander par le visiteur
	       $nbjours = round((strtotime($dateFin) - strtotime($dateDebut))/(60*60*24));
        //Recherche le total de vacance pour le visiteur
            $lesJoursdeVacances =$pdo-> getTotalVacances($idVisiteur);
        //teste sur le nombres de jours de vacances restants
            if($nbjours > $lesJoursdeVacances[0]['totalJoursVacances']){
                ajouterErreur("Nombre de vacance disponibles :".$lesJoursdeVacances[0]['totalJoursVacances']);
                include("vues/v_erreurs.php");
	       }else{
        //Insertion dans la table d'une nouvelle demande de vacance
                $pdo->creeDemandeVacances($idVisiteur,$dateDebut,$dateFin);
                ?>
<div class="confirmer">
    <span><?php echo"Insertion Validée"; ?></span><br>
    <input id="annuler" type="button" value="Retour" onclick="document.location.href = document.referrer" size="20" />
</div>
<?php
            }
           
        }
        break;
}
        

?>