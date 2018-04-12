<div class ="erreur">
<ul>
<?php 
foreach($_REQUEST['erreurs'] as $erreur)
	{
      echo "<li>⚠ $erreur ⚠</li>";
	}
?>
    <input id="annuler" type="button" value="Retour" onclick="document.location.href = document.referrer" size="20" />
</ul></div>
