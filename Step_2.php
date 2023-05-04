<?php

session_start();

for($i = 0; $i < $_SESSION['bonsoir']; $i++) {
    $commandlaunchpy = escapeshellcmd('./sh/lancement.sh');
    $output = shell_exec($commandlaunchpy);
}

$_SESSION['pages_vues_modulo'] = $_SESSION['pages_vues'] % 9;

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title> Etape 2 du cycle </title>
    <link rel="stylesheet" href="./css/Cobotduo.css">
</head>
<body>

<!-- Logo Niryo -->

<center><a href="Pages_Accueil.php"><img class="NiryoLogo" src="./images/png/Logo_Niryo.png"/></a></center>

<!-- QR CODE -->

<a title="SetDidact"><img class="QRCode" src="./images/png/QRCode_Set.png"/></a>

<!-- Cobot Dyo -->

<center><h1 class="CobotDuo"> CobotDuo </h1></center>
<br />

<!-- SET -->

<div class="divImageSet"><img src="./images/png/Logo_Set.png" align="right"/></div>




<form method="POST">

    <!-- TEXTE ETAPE 1 DU CYCLE ALPHA -->

    <center><h1 style="color: #FF0000;">Etape 2 du cycle <?php echo $_SESSION['Numéro_du_cycle']; ?></h1></center>


    <?php

    if($_SESSION['pages_vues'] == 1) {
        echo '<center> 1er flacon </center>';
    }
    else {
        echo '<center>' . $_SESSION['pages_vues'] . 'em flacon </center>';
    }

    ?>

    <!-- Textes Robot 1 et Robot 2 -->

    <center><div>

            <a style="color: #FF0000; font-size: 20px;"><strong>Robot 1</strong></a>

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            <a style="color: #FF0000; font-size: 20px;"><strong>Robot 2</strong></a>

        </div></center>

    <br />
    <br />

    <!-- Textes actions de chaque robots -->

    <center><div>

            <a><strong> Prise flacon vide </strong></a>

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            <a><strong> Prise flacon vide </strong></a>

        </div></center>

    <br />
    <br />

    <center><div>

            <a><img alt="" src="./images/gif/depose-bouchons.gif" /></a>

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            <a><img alt="" src="./images/gif/depose-bouchons.gif" /></a>

        </div></center></form>

<!-- Bouton invisible autocliqué -->

<input type="hidden" name="jesaispas" id="pages_vues_modul" value="<?php echo $_SESSION['pages_vues_modulo']; ?>">
<input type="hidden" name="jesaispasdeux" id="Pages_vues" value="<?php echo $_SESSION['pages_vues']; ?>">

<form method="POST" action="Préparation_palettes_terminé.php">
    <div class="hide">
        <input type="submit" name="" id="GoToPrep"/>
    </div>
</form>


<form method="POST" action="Etape_1_cycle_alpha.php">
    <div class="hide">
        <input type="submit" name="" id="GoToEtape1CycleAlpha"/>
    </div>
</form>


<form method="POST" action="Chargement_de_la_palette.php">
    <div class="hide">
        <input type="submit" name="" id="GoToCharg"/>
    </div>
</form>



<script>

    var pages_vues_modulo_9 = document.getElementById('pages_vues_modul').value;

    var Pages_Vues = document.getElementById('Pages_vues').value;

    if(Pages_Vues == 18) {

        document.getElementById('GoToPrep').click();

    }

    else {

        if(pages_vues_modulo_9 == 0) {
            document.getElementById('GoToCharg').click();
        }

        else {
            document.getElementById('GoToEtape1CycleAlpha').click();
        }


    }



</script>


</body>
</html>