<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();



$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':
		include("controleurs/c_connexion.php");
        break;
	
	case 'gererFrais' :
        //test pour renvoyer vers le sommaire adéquat l'utilisateur
        if ($_SESSION["idtypeuser"] ==1){include("vues/v_sommaire.php");}
        else{header("location: index.php?ucconnexion&action=demandeConnexion");}
		include("controleurs/c_gererFrais.php");
        break;
	
	case 'etatFrais' :
        if ($_SESSION["idtypeuser"] ==1){include("vues/v_sommaire.php");}
        else{header("location: index.php?ucconnexion&action=demandeConnexion");}
		include("controleurs/c_etatFrais.php");
        break; 
	
	case 'gestionVacances' :
        if ($_SESSION["idtypeuser"] ==1){include("vues/v_sommaire.php");}
        else{header("location: index.php?ucconnexion&action=demandeConnexion");}
		include("controleurs/c_gestionVacances.php");
        break;
    case'gestionVacancesResp':       
        if($_SESSION["idtypeuser"] ==2){include("vues/v_sommaire_resp.php");}
        else{header("location: index.php?ucconnexion&action=demandeConnexion");}
        include("controleurs/c_gestionVacancesResp.php");
        break;
}
include("vues/v_pied.php") ;
?>

