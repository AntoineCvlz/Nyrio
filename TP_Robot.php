<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Page TP_Robot</title>
    <link rel="stylesheet" href="./css/Cobotduo.css">
</head>
<body>

<form method="POST">

    <!-- Logo Niryo -->

    <center><a href="Page_Accueil.php"><img class="NiryoLogo" src="./images/png/Logo_Niryo.png"/></a></center>

    <!-- QR CODE  -->

    <a title="SetDidact"><img class="QRCode" src="./images/png/QRCode_Set.png"/></a>

    <!-- Cobot Duo -->

    <center><h1 class="CobotDuo"> ScobotDuo </h1></center>
    <br />

    <!-- SET -->

    <div class="divImageSet"><img src="./images/png/Logo_Set.png" align="right"  /></div>

    <!-- Commande distributeur 1 -->

    <center><h2 class="TexteTitreh2"> Commande du distributeur 1 : la ventouse. </h2></center>
    <center> Choisissez qui commandera la ventouse : </center>
    <center><h4>Robot 1 :</h4></center>

    <center><label class="switch">
            <input type="checkbox" id="toggleR1D1" name="toggleRobot1D1" <?php if(isset($_POST["toggleRobot1D1"])) echo "checked='checked'"; ?> onclick="document.getElementById('toggleR2D1').checked = false; document.getElementById('toggleRpiCentrale1').checked = false;"> <!-- javascript ////// document.getElementById('toggleR2D1').checked = false ////// Ceci sert à uncheck la checkbox toggleR2D1 si elle est cochée et si toggleR1D1 est cochée en deuxième. -->
            <span class="slider round"></span>
        </label></center>

    <br />
    <br />

    <center><h4>Robot 2 :</h4></center>
    <center><label class="switch">
            <input type="checkbox" id="toggleR2D1" name="toggleRobot2D1" <?php if(isset($_POST["toggleRobot2D1"])) echo "checked='checked'"; ?> onclick="document.getElementById('toggleR1D1').checked = false; document.getElementById('toggleRpiCentrale1').checked = false;">
            <span class="slider round"></span>
        </label>
        <br />
        <br />

        <center><h4>Rpi Centrale :</h4></center>
        <center><label class="switch">
                <input type="checkbox" id="toggleRpiCentrale1" name="toggleRpi1" <?php if(isset($_POST["toggleRpi1"])) echo "checked='checked'"; ?> onclick="document.getElementById('toggleR1D1').checked = false; document.getElementById('toggleR2D1').checked = false;">
                <span class="slider round"></span>
            </label>

            <br />
            <br />



            <!-- Commande distributeur 2 -->


            <br />
            <br />


            <center><h2 class="TexteTitreh2"> Commande du distributeur 2 : le vérin pneumatique</h2></center>
            <center> Choisissez qui commandera le vérin pneumatique : </center>
            <center><h4>Robot 1 :</h4></center>

            <center><label class="switch">
                    <input type="checkbox" id="toggleR1D2" name="toggleRobot1D2" <?php if(isset($_POST["toggleRobot1D2"])) echo "checked='checked'"; ?> onclick="document.getElementById('toggleR2D2').checked = false; document.getElementById('toggleRpiCentrale2').checked = false;">
                    <span class="slider round"></span>
                </label></center>


            <br />
            <br />

            <center><h4>Robot 2 :</h4></center>
            <center><label class="switch">
                    <input type="checkbox" id="toggleR2D2" name="toggleRobot2D2" <?php if(isset($_POST["toggleRobot2D2"])) echo "checked='checked'"; ?> onclick="document.getElementById('toggleR1D2').checked = false; document.getElementById('toggleRpiCentrale2').checked = false;">
                    <span class="slider round"></span>
                </label>
                <br />
                <br />

                <center><h4>Rpi Centrale :</h4></center>
                <center><label class="switch">
                        <input type="checkbox" id="toggleRpiCentrale2" name="toggleRpi2" <?php if(isset($_POST["toggleRpi2"])) echo "checked='checked'"; ?> onclick="document.getElementById('toggleR1D2').checked = false; document.getElementById('toggleR2D2').checked = false;">
                        <span class="slider round"></span>
                    </label>

                    <br />
                    <br />


                    <!-- Commande distributeur 3 -->


                    <br />
                    <br />


                    <center><h2 class="TexteTitreh2"> Commande distributeur 3 : la souffleuse</h2></center>
                    <center> Choisissez qui commandera la souffleuse : </center>
                    <center><h4>Robot 1 :</h4></center>
                    <center><label class="switch">
                            <input type="checkbox" id="toggleR1D3" name="toggleRobot1D3" <?php if(isset($_POST["toggleRobot1D3"])) echo "checked='checked'"; ?> onclick="document.getElementById('toggleR2D3').checked = false; document.getElementById('toggleRpiCentrale3').checked = false;">
                            <span class="slider round"></span>
                        </label></center>

                    <br />
                    <br />

                    <center><h4>Robot 2 :</h4></center>
                    <center><label class="switch">
                            <input type="checkbox" id="toggleR2D3" name="toggleRobot2D3" <?php if(isset($_POST["toggleRobot2D3"])) echo "checked='checked'"; ?> onclick="document.getElementById('toggleR1D3').checked = false; document.getElementById('toggleRpiCentrale3').checked = false;">
                            <span class="slider round"></span>
                        </label>
                        <br />
                        <br />

                        <center><h4>Rpi Centrale :</h4></center>
                        <center><label class="switch">
                                <input type="checkbox" id="toggleRpiCentrale3" name="toggleRpi3" <?php if(isset($_POST["toggleRpi3"])) echo "checked='checked'"; ?> onclick="document.getElementById('toggleR1D3').checked = false; document.getElementById('toggleR2D3').checked = false;">
                                <span class="slider round"></span>
                            </label>

                            <br />
                            <br />
                            <br />
                            <br />

                            <button type="submit" class="Validation" name='ValidationEleve'>Valider mes choix</button></center>

                        <?php

                        if(isset($_POST['ValidationEleve'])) {



                            if(isset($_POST['toggleRobot1D1']) && empty($_POST['toggleRobot2D1']) && empty($_POST['toggleRpi1'])) {

                                echo '<h1 style="color: FF0000;"> Ventouse : </h1><h3>Le Robot 1 a été sélectionné.</h3>';
                            }


                            if(isset($_POST['toggleRobot2D1']) && empty($_POST['toggleRobot1D1']) && empty($_POST['toggleRpi1'])) {

                                echo '<h1 style="color: FF0000;"> Ventouse : </h1><h3>Le Robot 2 a été sélectionné.</h3>';
                            }


                            if(isset($_POST['toggleRpi1']) && empty($_POST['toggleRobot1D1']) && empty($_POST['toggleRobot2D1'])) {

                                echo '<h1 style="color: FF0000;"> Ventouse : </h1><h3>Le Rpi Centrale a été sélectionné.</h3>';
                            }


                            if(empty($_POST['toggleRobot1D1']) && empty($_POST['toggleRobot2D1']) && empty($_POST['toggleRpi1'])) {

                                echo '<h1 style="color: FF0000;"> Ventouse : </h1><h3>Aucun choix n\'a été sélectionné.</h3>';
                            }




                            if(isset($_POST['toggleRobot1D2']) && empty($_POST['toggleRobot2D2']) && empty($_POST['toggleRpi2'])) {

                                echo '<h1 style="color: FF0000;"> Vérin pneumatique : </h1><h3>Le Robot 1 a été sélectionné.</h3>';
                            }


                            if(isset($_POST['toggleRobot2D2']) && empty($_POST['toggleRobot1D2']) && empty($_POST['toggleRpi2'])) {

                                echo '<h1 style="color: FF0000;"> Vérin pneumatique : </h1><h3>Le Robot 2 a été sélectionné.</h3>';
                            }

                            if(isset($_POST['toggleRpi2']) && empty($_POST['toggleRobot1D2']) && empty($_POST['toggleRobot2D2'])) {

                                echo '<h1 style="color: FF0000;"> Vérin pneumatique : </h1><h3>Le Rpi Centrale a été sélectionné.</h3>';
                            }


                            if(empty($_POST['toggleRobot1D2']) && empty($_POST['toggleRobot2D2']) && empty($_POST['toggleRpi2'])) {

                                echo '<h1 style="color: FF0000;"> Vérin pneumatique : </h1><h3>Aucun choix n\'a été sélectionné.</h3>';
                            }





                            if(isset($_POST['toggleRobot1D3']) && empty($_POST['toggleRobot2D3']) && empty($_POST['toggleRpi3'])) {

                                echo '<h1 style="color: FF0000;"> Souffleuse : </h1><h3>Le Robot 1 a été sélectionné.</h3>';
                            }


                            if(isset($_POST['toggleRobot2D3']) && empty($_POST['toggleRobot1D3']) && empty($_POST['toggleRpi3'])) {

                                echo '<h1 style="color: FF0000;"> Souffleuse : </h1><h3>Le Robot 2 a été sélectionné.</h3>';
                            }


                            if(isset($_POST['toggleRpi3']) && empty($_POST['toggleRobot1D3']) && empty($_POST['toggleRobot2D3'])) {

                                echo '<h1 style="color: FF0000;"> Souffleuse : </h1><h3>Le Rpi Centrale a été sélectionné.</h3>';
                            }


                            if(empty($_POST['toggleRobot1D3']) && empty($_POST['toggleRobot2D3']) && empty($_POST['toggleRpi3'])) {

                                echo '<h1 style="color: FF0000;"> Souffleuse : </h1><h3>Aucun choix n\'a été sélectionné.</h3>';
                            }


                            echo '<center><div class="blink"> Faites valider vos choix par le professeur. </div></center>';

                        }

                        ?>

                        <br />
                        <br />
                        <br />


                        <!-- Images Scobots -->

                        <button type="submit" style ="border: 0px; background-color: transparent;"  name="ValidationProf">
                            <center><img src="./images/png/scobots.png" alt="Scobots" width="650px"/></center>
                        </button>

</form>

<br />












<?php

if(isset($_POST['ValidationProf'])) {
    /* POUR LA VENTOUSE : */

    if(isset($_POST['toggleRobot1D1']) && empty($_POST['toggleRobot2D1']) && empty($_POST['toggleRpi1'])) {

/*        system("gpio mode 28 out");
        system("gpio mode 25 out");*/


        system("gpio write 28 1");
        system("gpio write 25 0");


        echo '<h1 style="color: FF0000;"> Ventouse : </h1><h3>Le Robot 1 a été validé par le professeur.</h3>';
    }


    if(isset($_POST['toggleRobot2D1']) && empty($_POST['toggleRobot1D1']) && empty($_POST['toggleRpi1'])) {

/*        system("gpio mode 28 out");
        system("gpio mode 25 out");*/


        system("gpio write 28 1");
        system("gpio write 25 1");


        echo '<h1 style="color: FF0000;"> Ventouse : </h1><h3>Le Robot 2 a été validé par le professeur.</h3>';
    }


    if(isset($_POST['toggleRpi1']) && empty($_POST['toggleRobot1D1']) && empty($_POST['toggleRobot2D1'])) {



        system("gpio write 28 0");
        system("gpio write 25 1");


        echo '<h1 style="color: FF0000;"> Ventouse : </h1><h3>Le Rpi Centrale a été validé par le professeur.</h3>';
    }


    if(empty($_POST['toggleRobot1D1']) && empty($_POST['toggleRobot2D1']) && empty($_POST['toggleRpi1'])) {



        system("gpio write 28 0");
        system("gpio write 25 0");


        echo '<h1 style="color: FF0000;"> Ventouse : </h1><h3>Aucun choix n\'a été validé par le professeur.</h3>';
    }


    /* POUR LE VERIN PNEUMATIQUE : */


    if(isset($_POST['toggleRobot1D2']) && empty($_POST['toggleRobot2D2']) && empty($_POST['toggleRpi2'])) {

        system("gpio write 23 1");
        system("gpio write 27 0");


        echo '<h1 style="color: FF0000;"> Vérin pneumatique : </h1><h3>Le Robot 1 a été validé par le professeur.</h3>';
    }


    if(isset($_POST['toggleRobot2D2']) && empty($_POST['toggleRobot1D2']) && empty($_POST['toggleRpi2'])) {



        system("gpio write 23 1");
        system("gpio write 27 1");


        echo '<h1 style="color: FF0000;"> Vérin pneumatique : </h1><h3>Le Robot 2 a été validé par le professeur.</h3>';
    }

    if(isset($_POST['toggleRpi2']) && empty($_POST['toggleRobot1D2']) && empty($_POST['toggleRobot2D2'])) {



        system("gpio write 23 0");
        system("gpio write 27 1");


        echo '<h1 style="color: FF0000;"> Vérin pneumatique : </h1><h3>Le Rpi Centrale a été validé par le professeur.</h3>';
    }


    if(empty($_POST['toggleRobot1D2']) && empty($_POST['toggleRobot2D2']) && empty($_POST['toggleRpi2'])) {


        system("gpio write 23 0");
        system("gpio write 27 0");


        echo '<h1 style="color: FF0000;"> Vérin pneumatique : </h1><h3>Aucun choix n\'a été validé par le professeur.</h3>';
    }

    /* POUR LA SOUFFLEUSE : */

    if(isset($_POST['toggleRobot1D3']) && empty($_POST['toggleRobot2D3']) && empty($_POST['toggleRpi3'])) {



        system("gpio write 21 1");
        system("gpio write 22 0");


        echo '<h1 style="color: FF0000;"> Souffleuse : </h1><h3>Le Robot 1 a été validé par le professeur.</h3>';
    }


    if(isset($_POST['toggleRobot2D3']) && empty($_POST['toggleRobot1D3']) && empty($_POST['toggleRpi3'])) {



        system("gpio write 21 1");
        system("gpio write 22 1");


        echo '<h1 style="color: FF0000;"> Souffleuse : </h1><h3>Le Robot 2 a été validé par le professeur.</h3>';
    }


    if(isset($_POST['toggleRpi3']) && empty($_POST['toggleRobot1D3']) && empty($_POST['toggleRobot2D3'])) {


        system("gpio write 21 0");
        system("gpio write 22 1");


        echo '<h1 style="color: FF0000;"> Souffleuse : </h1><h3>Le Rpi Centrale a été validé par le professeur.</h3>';
    }


    if(empty($_POST['toggleRobot1D3']) && empty($_POST['toggleRobot2D3']) && empty($_POST['toggleRpi3'])) {


        system("gpio write 21 0");
        system("gpio write 22 0");


        echo '<h1 style="color: FF0000;"> Souffleuse : </h1><h3>Aucun choix n\'a été validé par le professeur.</h3>';
    }

    echo '<h1 style="color: #008000;"> Choix validés par le professeur.';
}

?>

</body>
</html>
