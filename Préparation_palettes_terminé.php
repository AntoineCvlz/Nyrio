<?php

session_start();

if($_SERVER['HTTP_REFERER'] == "http://192.168.5.254/Chargement_de_la_palette.php") {
    for($i = 0; $i < $_SESSION['bonsoir'] ; $i++) {
        $commandlaunchpy = escapeshellcmd('./sh/lancement3.sh');
        $output = shell_exec($commandlaunchpy);
    }
}
if($_SERVER['HTTP_REFERER'] == "http://192.168.5.254/Etape_2_cycle_alpha.php") {
    for($i = 0; $i < $_SESSION['bonsoir'] ; $i++) {
        $commandlaunchpy = escapeshellcmd('./sh/lancement2.sh');
        $output = shell_exec($commandlaunchpy);
    }
}

$Filename = "./txt/Compteur.txt";
$File = file($Filename);
unset($File[0]);
file_put_contents($Filename, $File);

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Préparation de la palette terminée</title>
    <link rel="stylesheet" href="./css/Cobotduo.css">
</head>
<body>

<form method="POST" action="Page_Accueil.php">

    <!-- TEXTE ETAPE 1 DU CYCLE ALPHA -->

    <center><h1 style="color: #FF0000;"> Préparation des palettes terminée</h1></center>

    <!-- Bouton invisible autocliqué -->

    <div class='hide'>
        <input type='submit' name="GoToPageAccueil" id="BoutonInvisible"/>
    </div>

    <script>
        document.getElementById('BoutonInvisible').click();
    </script>

</form>





</body>
</html>