<?php
/**
 * Created by PhpStorm.
 * User: molin
 * Date: 2018-11-18
 * Time: 10:07
 */
?>
<!DOCTYPE HTML>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/reset.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/navbarDesign.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/mainDesign.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/signup.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/footer.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="../JS/navbar.js"></script>
    <title>Glyxnäs Multisport</title>
    <link rel="icon" href="/img/logo.png">
</head>

<body>
<div class="containerSignup">
    <div class="navbar">
        <?php
        include '/xampp/htdocs/fragmnts/navbar.php';
        ?>
    </div>
    <div class="main">


        <h2>Anmälan</h2>

        <button onclick="document.getElementById('teamRegister').style.display='block'" style="width:auto;" id="registerButton">Anmäl lag</button>
        <button onclick="document.getElementById('personRegister').style.display='block'" style="width:auto;" id="registerButton">Anmäl Person</button>
        <button onclick="document.getElementById('staffRegister').style.display='block'" style="width:auto;" id="registerButton">Anmäl dig som funktionär</button>

        <div id="teamRegister" class="modal">
            <span onclick="document.getElementById('teamRegister').style.display='none'" class="close" title="Avbryt registrering">&times;</span>
            <form action="../Model/register.php" method="post">
                <div class="containerS">
                    <h2>Anmäl lag</h2>
                    <p>Fyll i alla textfält för att anmäla ett lag</p>
                    <hr>
                    <label for="user"><b>Lagnamn</b></label>
                    <input type="text" placeholder="Skriv in lagnamn" name="userNamn" required>

                    <label for="user"><b>Paddling</b></label>
                    <input type="text" placeholder="Skriv in deltagare" name="userPaddling" required>

                    <label for="user"><b>Simning</b></label>
                    <input type="text" placeholder="Skriv in deltagare" name="userSimning" required>

                    <label for="user"><b>Cykling</b></label>
                    <input type="text" placeholder="Skriv in deltagare" name="userCykling" required>

                    <label for="user"><b>Löpning</b></label>
                    <input type="text" placeholder="Skriv in deltagare" name="userLöpning" required>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('teamRegister').style.display='none'" class="cancelbtn">Avbryt</button>
                        <button type="submit" class="signupbtn">Anmäl</button>
                    </div>
                </div>
            </form>
        </div>

        <div id="personRegister" class="modal">
            <span onclick="document.getElementById('personRegister').style.display='none'" class="close" title="Avbryt registrering">&times;</span>
            <form action="../Model/registerPerson.php" method="post">
                <div class="containerS">
                    <h2>Anmäl Person</h2>
                    <p>Fyll förnamn och efternamn för att anmäla dig</p>
                    <hr>
                    <label for="user"><b>Namn</b></label>
                    <input type="text" placeholder="Förnamn och efternamn" name="Name" required>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('personRegister').style.display='none'" class="cancelbtn">Avbryt</button>
                        <button type="submit" class="signupbtn">Anmäl</button>
                    </div>
                </div>
            </form>
        </div>

        <div id="staffRegister" class="modal">
            <span onclick="document.getElementById('staffRegister').style.display='none'" class="close" title="Avbryt registrering">&times;</span>
            <form action="../Model/registerStaff.php" method="post">
                <div class="containerS">
                    <h2>Anmäl dig som funktionär</h2>
                    <p>Fyll förnamn och efternamn för att anmäla dig som funktionär</p>
                    <hr>
                    <label for="user"><b>Namn</b></label>
                    <input type="text" placeholder="Förnamn och efternamn" name="Name" required>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('staffRegister').style.display='none'" class="cancelbtn">Avbryt</button>
                        <button type="submit" class="signupbtn">Anmäl</button>
                    </div>
                </div>
            </form>
        </div>

        <div id="result">
            <h2>Anmälda Lag</h2>

            <table id="result">
                <tr class="header">
                    <th><b>Lagnamn</b></th>
                    <th><b>Paddling</b></th>
                    <th><b>Simning</b></th>
                    <th><b>Cykling</b></th>
                    <th><b>Löpning</b></th>
                </tr>

                <?php
                include '/xampp/htdocs/fragmnts/registrations.php';
                ?>
            </table>
        </div>
    </div>

    <div class="footer">
        <?php
        include '/xampp/htdocs/fragmnts/footer.php';
        ?>
    </div>
</div>
</body>

</html>