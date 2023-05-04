<?php

session_start();
if($_SERVER['HTTP_REFERER'] == "http://192.168.5.254/Demarrage_du_cycle.php") {
    for($i = 0; $i < $_SESSION['bonsoir'] ; $i++) {
        $commandlaunchpy = escapeshellcmd('./sh/lancement3.sh');
        $output = shell_exec($commandlaunchpy);
    }
}
if($_SERVER['HTTP_REFERER'] == "http://192.168.5.254/Step_2.php") {
    for($i = 0; $i < $_SESSION['bonsoir'] ; $i++) {
        $commandlaunchpy = escapeshellcmd('./sh/lancement2.sh');
        $output = shell_exec($commandlaunchpy);
    }
}
if($_SERVER['HTTP_REFERER'] == "http://192.168.5.254/Chargement_de_la_palette.php") {
    for($i = 0; $i < $_SESSION['bonsoir'] ; $i++) {
        $commandlaunchpy = escapeshellcmd('./sh/lancement.sh');
        $output = shell_exec($commandlaunchpy);
    }
}

$monFichier = fopen('./txt/Compteur.txt', 'r+');

$pages_vues = fgets($monFichier);
$pages_vues += 1;
fseek($monFichier, 0);
fputs($monFichier, $pages_vues);
fclose($monFichier);

$_SESSION['pages_vues'] = $pages_vues;
if($_SESSION['pages_vues'] <= 1) {
    $_SESSION['Numéro_du_cycle'] = 1;
}
if ($_SESSION['pages_vues'] == 10) {
    $_SESSION['Numéro_du_cycle'] = 2;
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Etape 1 du cycle</title>
    <link rel="stylesheet" href="./css/Cobotduo.css">
</head>
<body>

<!-- Logo Niryo -->

<center><a href="Page_Accueil.php"><img class="NiryoLogo" src="./images/png/Logo_Niryo.png"/></a></center>

<!-- QR CODE  -->

<a title="SetDidact"><img class="QRCode" src="./images/png/QRCode_Set.png"/></a>

<!-- Cobot Duo -->

<center><h1 class="CobotDuo"> CobotDuo </h1></center>
<br />

<!-- SET -->

<div class="divImageSet"><img src="./images/png/Logo_Set.png" align="right"  /></div>





<form method="POST" action="Step_2.php">

    <!-- TEXTE ETAPE 1 DU CYCLE ALPHA -->

    <center><h1 style="color: #FF0000;">Etape 1 du cycle <?php echo $_SESSION['Numéro_du_cycle']; ?></h1></center>

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

            <a><strong> Dépose bouchon </strong></a>

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            <a><strong> Prise flacon plein </strong></a>

        </div></center>

    <br />
    <br />

    <center><div>

            <a><img alt="" src="./images/gif/depose-bouchons.gif" /></a>

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            <a><img alt="" src="./images/gif/depose-bouchons.gif" /></a>

            <!-- Bouton invisible autocliqué -->

            <div class='hide'>
                <input type='submit' name="GoToEtape2CycleAlpha" id="BoutonInvisible"/>
            </div>

            <script>
                document.getElementById('BoutonInvisible').click();
            </script>

</form>





</body>
</html>