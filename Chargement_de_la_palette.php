<?php

session_start();
$_SESSION['Numéro_du_cycle'] = $_SESSION['Numéro_du_cycle'] + 1;

for($i = 0; $i < $_SESSION['bonsoir'] ; $i++) {
    $commandlaunchpy = escapeshellcmd('./sh/lancement.sh');
    $output = shell_exec($commandlaunchpy);
}



?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Chargement de la palette</title>
    <link rel="stylesheet" href="./css/Cobotduo.css">
</head>
<body>

<!-- Logo Niryo -->

<center><a href="Page_Accueil.php"><img class="NiryoLogo" src="./images/png/Logo_Niryo.png"/></a></center>

<!-- QR CODE  -->

<a title="SetDidact"><img class="QRCode" src="./images/png/QRCode_Set.png"/></a>

<!-- Cobot Duo -->

<center><h1 class="CobotDuo"> ScobotDuo </h1></center>
<br />

<!-- SET -->

<div class="divImageSet"><img src="./images/png/Logo_Set.png" align="right"  /></div>








<!-- TEXTE ETAPE 1 DU CYCLE ALPHA -->

<center><h1 style="color: #FF0000;">Chargement de la palette</h1></center>

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

        <a><strong> Attente </strong></a>

        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        <a><strong> Dépose intercalaire </strong></a>

    </div></center>

<br />
<br />

<center><div>

        <a><img alt="" src="./images/gif/depose-bouchons.gif" /></a>

        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        <a><img alt="" src="./images/gif/depose-bouchons.gif" /></a>

        <input type="hidden" name="bla" id="Pages_vues" value="<?php echo $_SESSION['pages_vues']; ?>" >

        <!-- Bouton invisible autocliqué -->
        <form method="POST" action="Etape_1_cycle_alpha.php">
            <div class='hide'>
                <input type='submit' name="GoToEtape1CycleAlpha" id="GoToEtape1CycleAlpha" value='Etape1'/>
            </div>
        </form>

        <form method="POST" action="Préparation_palettes_terminé.php">
            <div class='hide'>
                <input type='submit' name="GoToPreparationTerminee" id="GoToPreparationTerminee" value='Preparationterminee'/>
            </div>
        </form>

        <script>

            var Pages_vues = document.getElementById('Pages_vues').value;

            if(Pages_vues == 18) {
                document.getElementById('GoToPreparationTerminee').click();
            }
            if(Pages_vues < 18) {
                document.getElementById('GoToEtape1CycleAlpha').click();
            }

        </script>



</body>
</html>
