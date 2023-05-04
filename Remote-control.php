<?php
if(isset($_POST['ValidationCommandeGPIO'])) {
    if($_POST['cmd1'] == 1) {
        system("gpio mode 21 out");
        system("gpio write 21 0");
    }
    else {
        system("gpio mode 21 out");
        system("gpio write 21 0");
    }

    if($_POST['cmd2'] == 1) {
        system("gpio mode 21 out");
        system("gpio write 21 0");
    }
    else {
        system("gpio mode 21 out");
        system("gpio write 21 0");
    }

    if($_POST['cmd3'] == 1) {
        system("gpio mode 21 out");
        system("gpio write 21 0");
    }
    else {
        system("gpio mode 21 out");
        system("gpio write 21 0");
    }

    if($_POST['cmd4'] == 1) {
        system("gpio mode 21 out");
        system("gpio write 21 0");
    }
    else {
        system("gpio mode 21 out");
        system("gpio write 21 0");
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Démarrage du cycle</title>
    <link rel="stylesheet" href="./css/Cobotduo.css">
</head>
<body>
<!-- QR CODE  -->

<a title="SetDidact"><img class="QRCode" src="./images/png/QRCode_Set.png"/></a>

<!-- SET -->

<div class="divImageSet"><img src="./images/png/Logo_Set.png" align="right"  /></div>

<!-- Cobot Duo -->

<center><h1 class="CobotDuo" style="font-size: 35px;"> Remote-control </h1></center>

<!-- LIGNE D'ESPACEMENT -->

<br /><br /><br /><br />

<hr style="width: 100%; height: 3px; border-color: #57b3fd; background: #57b3fd;">

<center>
    <form method="post">
        <div class="block">
            <h1 class="CobotDuo" style="font-size: 25px;">Commande GPIO</h1>
            <div class="container about">
                <div class="columns">
                    <div class="column about-single-element">
                        <label class="switch">
                            <input type="checkbox" id="cmd1" name="cmd1">
                            <span class="slider round"></span>
                        </label>
                        <p>cmd1</p>
                    </div>
                    <div class="column about-single-element">
                        <label class="switch">
                            <input type="checkbox" id="cmd2" name="cmd2">
                            <span class="slider round"></span>
                        </label>
                        <p>cmd2</p>
                    </div>
                    <div class="column about-single-element">
                        <label class="switch">
                            <input type="checkbox" id="cmd3" name="cmd3">
                            <span class="slider round"></span>
                        </label>
                        <p>cmd3</p>
                    </div>
                    <div class="column about-single-element">
                        <label class="switch">
                            <input type="checkbox" id="cmd4" name="cmd4">
                            <span class="slider round"></span>
                        </label>
                        <p>cmd4</p>
                    </div>
                </div>
            </div>
        </div>
        <center><button type="submit" class="Validation" name="ValidationCommandeGPIO">Valider</button></center>
    </form>
</center>

<hr style="width: 100%; height: 3px; border-color: #57b3fd; background: #57b3fd;">

<center>
    <div class="block">
        <h1 class="CobotDuo" style="font-size: 25px;">Lecture GPIO</h1>
        <div class="container about">
            <div class="columns">
                <div class="column about-single-element">
                    <div class="switch-holder">
                        <div class="switch-label">
                            <span>Gpio5</span>
                        </div>
                        <div class="switch-toggle">
                            <input type="checkbox" id="gpio5">
                            <label for="gpio5"></label>
                        </div>
                    </div>
                </div>
                <div class="column about-single-element">
                    <div class="switch-holder">
                        <div class="switch-label">
                            <span>Gpio6</span>
                        </div>
                        <div class="switch-toggle">
                            <input type="checkbox" id="gpio6">
                            <label for="gpio6"></label>
                        </div>
                    </div>
                </div>
                <div class="column about-single-element">
                    <div class="switch-holder">
                        <div class="switch-label">
                            <span>Gpio7</span>
                        </div>
                        <div class="switch-toggle">
                            <input type="checkbox" id="gpio7">
                            <label for="gpio7"></label>
                        </div>
                    </div>
                </div>
                <div class="column about-single-element">
                    <div class="switch-holder">
                        <div class="switch-label">
                            <span>Gpio8</span>
                        </div>
                        <div class="switch-toggle">
                            <input type="checkbox" id="gpio8">
                            <label for="gpio8"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>

<hr style="width: 100%; height: 3px; border-color: #57b3fd; background: #57b3fd;">

<center>
    <div class="block">
        <h1 class="CobotDuo" style="font-size: 25px;">Variable</h1>
        <div class="container about">
            <div class="columns">
                <div class="column about-single-element">
                    <p>Variable 1 : <?php echo "777" ?> Unité</p>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>

<?php

?>