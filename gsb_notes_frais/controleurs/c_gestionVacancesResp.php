<?php
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
//echo $idVisiteur;
//echo $_REQUEST['the_date'];
$lesVacances;
$laDemandeDeVacance;
$id ;
//echo $nbjours;
//echo json_encode($_REQUEST);


switch($action){        
    case 'decisionVacance':
        $lesVacances = $pdo->getLesDemandesDeVacanceResp();
        include("vues/v_afficherVacancesResp.php");
        break;

    case 'gestionDecisionVacance':
        $id = $_REQUEST['submitbutton'];
        $laDemandeDeVacance = $pdo->afficherDemandeResp($id);
        include("vues/v_decision.php");
        break;
    case 'choixDecisionVacance':
        $id= $_REQUEST['idVacance'];
        $choix = $_REQUEST['decision'];
        $res = $pdo->majDecisionVacance($id,$choix); 
        header("Location:index.php?uc=gestionVacancesResp&action=decisionVacance");
        break;
}

?>