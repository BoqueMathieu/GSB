<div id="contenu">
    <h3>Dates à sélectionner : </h3>
    <form action="index.php?uc=gestionVacances&action=validerVacance" method="post">
        <div class="corpsForm" style="border : solid 0.1em #000; border-bottom-width:1px; margin-bottom : 0em; width : 30%;margin-left:34%;">
            <h3>Date de debut Vacances : </h3>
            <input type="date" max="2016-31-12" min="<?php echo date("Y-m-d"); ?>" name="the_date" value="<?php echo date("Y-m-d"); ?>">

            <div>
                <h3>Date de fin Vacances : </h3>
                <input type="date" max="2016-31-12" min="<?php echo date("Y-m-d"); ?>" name="the_date2" value="<?php echo date("Y-m-d"); ?>">
            </div>
        </div>

<fieldset>
    <legend>Mes demandes de vacances
    </legend>
    <table border="1" cellpadding="15" style="position:relative;margin-left:34%;">
        <tr>   
            <th>Date debut vacance</th>
            <th>Date fin vacance</th>
            <th>Validation</th>
        </tr>

        <tr>
            <?php
            //boucle permettant de récuperer chaque ligne de la table stockées dans le tableau $lesVacances
            foreach ($lesVacances as $uneVacance)
            {
                $dateDebut = $uneVacance['dateDebut'];
                $dateFin = $uneVacance['dateFin'];
                $validation = $uneVacance['validation'];
                //Affiche des données lignes par lignes
            ?>


            <td><label for="dateDebut"><?php echo $dateDebut ?></label></td>
            <td><label for="dateFin"><?php echo $dateFin ?></label></td>
            <td><label for="validation"><?php echo $validation ?></label></td> 
        </tr>


        <?php
            }
        ?>
    </table>
</fieldset>
<fieldset>
    <table border="1" cellpadding="15" id="tabvacance">
        <tr>   
            <th>Total jours vacances restants</th>
        </tr>

        <tr>
            <?php
            foreach ($lesJoursdeVacances as $untotal)
            {
                $totalPerso = $untotal['totalJoursVacances'];
            ?>


            <td><label for="totalJoursVacances"><?php echo $totalPerso ?></label></td>
        </tr>


        <?php
            }
        ?>
    </table>




</fieldset>
<div class="piedForm">
    <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
    </p> 
</div>

</form>
