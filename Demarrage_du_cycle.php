<?php

session_start();
echo $_SESSION['bonsoir'];

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Démarrage du cycle</title>
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




<form method='POST' action="Etape_1_cycle_alpha.php">

    <!-- TEXTE CYCLE DE DEMARRAGE -->

    <center><h1 style="color: #FF0000;">Cycle de démarrage</h1></center>

    <br />
    <br />
    <br />
    <br />

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

            <a><strong> Dépose <?php echo $_SESSION['bonsoir'] ?> bouchons </strong></a>

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            <a><strong> Dépose <?php echo $_SESSION['bonsoir']; ?> flacons </strong></a>

        </div></center>

    <br />
    <br />

    <center><div>

            <a><img alt="" src="./images/gif/depose-bouchons.gif" /></a>

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            <a><img alt="" src="./images/gif/depose-bouchons.gif" /></a>

        </div></center>

    <!-- Bouton invisible autocliqué -->

    <div class="hide">
        <input type='submit' name="Lancement_cycle" id="BoutonInvisible"/>
    </div>

    <script>
        document.getElementById('BoutonInvisible').click();
    </script>

</form>

</body>
</html>