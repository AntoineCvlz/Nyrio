<?php

session_start();
$commandlaunchpy = escapeshellcmd('./sh/lancement9.sh');
$outputArrivéeRavoux = shell_exec($commandlaunchpy);
if(isset($_POST['Demarrage'])) {
    if(isset($_POST['Step1']) && isset($_POST['Step2']) && isset($_POST['Step4']) && isset($_POST['Step5'])) {
        header("Location: Demarrage_du_cycle.php");
    }
    else {
        echo "<center><h4 id='HautDePage'>Veuillez checker toutes les checkbox pour continuer.</h4></center>";
    }
}

?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Page Ravoux</title>
    <link rel="stylesheet" href="./css/Cobotduo.css">
</head>
<body>

<form method="POST">

    <!-- Logo Niryo -->

    <center><a href="Page_Accueil.php"><img class="NiryoLogo" src="./images/png/Logo_Niryo.png"/></a></center>

    <!-- QR CODE  -->

    <a title="SetDidact"><img class="QRCode" src="./images/png/QRCode_Set.png"/></a>

    <!-- Cobot Duo -->

    <center><h1 class="CobotDuo"> CobotDuo </h1></center>
    <br />

    <!-- SET -->

    <div class="divImageSet"><img src="./images/png/Logo_Set.png" align="right"  /></div>

    <!-- Etape 1 -->

    <script type="text/javascript">
        function checked1() {
            if (document.getElementById("TapisArret").checked == true) {
                location.href="#step2";
            }
            if (document.getElementById("TapisArret").checked == false) {

            }
        }
    </script>

    <center><h1 id="step1" style="color: #2196F3">Etape 1/6 :</h1></center>
    <center><h2 class="TexteTitreh2">Votre tapis est-il à l'arrêt ?</h2></center>
    <center><label class="switch">
            <input type="checkbox" id="TapisArret" name="Step1" <?php if(isset($_POST["Step1"])) echo "checked='checked'"; ?>>
            <span class="slider round"></span>
        </label></center>
    <br />

    <center><button type="button" class="Validation" onclick="checked1();">Valider</button></center>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <!-- Etape 2 -->

    <script type="text/javascript">
        function checked2() {
            if (document.getElementById("PaletteTapis").checked == true) {
                location.href="#step3";
            }
            if (document.getElementById("PaletteTapis").checked == false) {
                location.href="#step2";
            }
        }
    </script>

    <center><h1 id="step2" style="color: #2196F3">Etape 2/6 :</h1></center>
    <center><h2 class="TexteTitreh2">Assurez-vous qu'il n'y a pas de palette sur le tapis.</h2></center>
    <center><label class="switch">
            <input type="checkbox" id="PaletteTapis" name="Step2" <?php if(isset($_POST["Step2"])) echo "checked='checked'"; ?>>
            <span class="slider round"></span>
        </label></center>
    <br />

    <center><button type="button" class="Validation" onclick="checked2();">Valider</button></center>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <!-- Etape 3 -->

    <center><h1 id="step3" style="color: #2196F3">Etape 3/6 :</h1></center>
    <center><h2 class="TexteTitreh2">Choix du nombre de palette</h2></center>

    <center><h4> Nombre de palette : <span id="nbpalette"></span></h4></center>
    <input type="hidden" id="inputCache" value="" name="bonsoir">

    <script type="text/javascript">
        var nombrepalette = 1;
        document.getElementById("nbpalette").innerHTML=nombrepalette;
        document.getElementById("inputCache").value=nombrepalette;
        function plus() {
            nombrepalette ++;
            document.getElementById("nbpalette").innerHTML=nombrepalette;
            document.getElementById("inputCache").value=nombrepalette;
            if (nombrepalette > 1) {
                document.getElementById("Moins").style.display = "inline";
            }
            if (nombrepalette == 5) {
                document.getElementById("Plus").style.display = "none";
            }
        }

        function moins() {
            nombrepalette --;
            document.getElementById("nbpalette").innerHTML=nombrepalette;
            document.getElementById("inputCache").value=nombrepalette;
            if (nombrepalette == 1) {
                document.getElementById("Moins").style.display = "none";
            }
            if (nombrepalette < 5) {
                document.getElementById("Plus").style.display = "inline";
            }

        }
    </script>

    <center><div>
            <button type="button" id="Moins" class="BoutonMoins" name="BoutonMoins" onclick="moins()" style="display: none;">-</button>
            <button type="button" id="Valider" class="Validation" onclick="location.href='#step4';">Valider</button>
            <button type="button" id="Plus" class="BoutonPlus" name="BoutonPlus" onclick="plus();">+</button>
        </div></center>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />


    <!-- Etape 4 -->

    <script type="text/javascript">
        function checked4() {
            if (document.getElementById("PositionPalette").checked == true) {
                location.href="#step5";
            }
            if (document.getElementById("PositionPalette").checked == false) {
                location.href="#step4";
            }
        }
    </script>

    <center><h1 id="step4" style="color: #2196F3">Etape 4/6 :</h1></center>
    <center><h2 class="TexteTitreh2">Positionnez les palettes</h2> <div class="blink"> ATTENTION AU SENS !</div></center>
    <div><center><img src="./images/png/Positionnement_palette.png"/></center></div>
    <center><label class="switch">
            <input type="checkbox" id="PositionPalette" name="Step4" <?php if(isset($_POST["Step4"])) echo "checked='checked'"; ?>>
            <span class="slider round"></span>
        </label></center>
    <br />

    <center><button type="submit" name="SortieVerin" class="Validation" onclick="checked4();">Valider</button></center>


    <?php

    if(isset($_POST['Step4'])) {
        if(isset($_POST['SortieVerin'])) {
            $commandesortieverin = escapeshellcmd('python3 sortieverin.py');
            $outputsortieverin = shell_exec($commandesortieverin);
            $commandesortieverin2 = escapeshellcmd('python3 sortieverin2.py');
            $outputsortieverin2 = shell_exec($commandesortieverin2);
            if($_POST['bonsoir'] == 1) {
                $_SESSION['bonsoir'] = 1;
            }
            if($_POST['bonsoir'] == 2) {
                $_SESSION['bonsoir'] = 2;
            }
            if($_POST['bonsoir'] == 3) {
                $_SESSION['bonsoir'] = 3;
            }
            if($_POST['bonsoir'] == 4) {
                $_SESSION['bonsoir'] = 4;
            }
            if($_POST['bonsoir'] == 5) {
                $_SESSION['bonsoir'] = 5;
            }
        }
    }

    ?>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <!-- Etape 5 -->

    <script type="text/javascript">
        function checked5() {
            if (document.getElementById("ConditionneuseON").checked == true) {
                location.href="#step6";
            }
            if (document.getElementById("ConditionneuseON").checked == false) {
                location.href="#step5";
            }
        }
    </script>

    <center><h1 id="step5" style="color: #2196F3">Etape 5/6 :</h1></center>
    <center><h2 class="TexteTitreh2">Démarrez le cycle de la conditionneuse</h2></center>
    <center><label class="switch">
            <input type="checkbox" id="ConditionneuseON" name="Step5" <?php if(isset($_POST["Step5"])) echo "checked='checked'"; ?>>
            <span class="slider round"></span>
        </label></center>
    <br />

    <center><button type="button" class="Validation" onclick="checked5();">Valider</button></center>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <!-- Etape Finale -->

    <script type="text/javascript">
        function terminer() {
            location.href="#HautDePage";
        }
    </script>

    <center><h1 id="step6" style="color: #2196F3">Etape 6/6</h1></center>
    <center><h2 class="TexteTitreh2">Démarrer le cycle ScobotDuo</h2></center>
    <center><button type="submit" class="Validation" name='Demarrage' onclick="terminer();">Valider</button></center>

    <br />
    <br />


    <!-- Images Niryo Ned -->

    <center><img src="./images/png/scobots.png" alt="Scobots" width="650px" /></center>
</form>

</body>
</html>
