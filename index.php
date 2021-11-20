<?php

$presentTime  = new DateTime;
$destinationTime = new DateTime('1998-07-12 21:00');

// echo $presentTime->format('M d Y A h i');
// echo "<br>";
// echo $presentTime->format('M');
// echo "<br>";
// echo $destinationTime->format('M d Y A h i');
// echo "<br>";

$interval = $presentTime->diff($destinationTime);
// echo $interval->format('%y ans %m mois %d jours %h heures %i min %s sec');
// echo "<br>";

$minutes = ($interval->format('%y') * 24 * 60 * 365) + ($interval->format('%d') * 24 * 60) + ($interval->format('%h') * 60) + ($interval->format('%i'));
// echo $minutes;
// echo "<br>";

$conso = $minutes / 10000;
// echo $conso;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/segment7" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet"> 
    <title>Retour vers le futur</title>
</head>
<body>
    <div id="container">
        <form id="tableauDeBord" action="/private/connexion" method="POST">
            <div class = "affichageDateArrivee">
                <div class = "info month">
                    <label for="month"><b>MONTH</b></label>
                    <input class="infoDateArrivee" type="text" id="month" value = "<?php echo $destinationTime->format('M'); ?>" name="mouth" >
                </div>
                <div class = "info day">
                    <label for="day"><b>DAY</b></label>
                    <input class="infoDateArrivee" type="text" id="day" value = "<?php echo $destinationTime->format('d'); ?>" name="day" >
                </div>
                <div class = "info year">
                    <label for="year"><b>YEAR</b></label>
                    <input class="infoDateArrivee" type="text" id="year" value = "<?php echo $destinationTime->format('Y'); ?>" name="year" >
                </div>
                <div class = "info ampm">
                    <label for="am/pm"><b>AM/PM</b></label>
                    <input class="infoDateArrivee" type="text" id="am/pm" value = "<?php echo $destinationTime->format('A'); ?>" name="am/pm" >
                </div>
                <div class = "info hour">
                    <label for="hour"><b>HOUR</b></label>
                    <input class="infoDateArrivee" type="text" id="hour" value = "<?php echo $destinationTime->format('h'); ?>" name="hour" >
                </div>
                <div class = "deuxPoints">
                    :
                </div> 
                <div class = "info min">
                    <label for="min"><b>MIN</b></label>
                    <input class="infoDateArrivee" type="text" id="min" value = "<?php echo $destinationTime->format('i'); ?>" name="min" >
                </div>
            </div>
            <p class ="dest">DESTINATION TIME</p>


            <div class = "affichageDateDepart">
                <div class = "info month">
                    <label for="month"><b>MONTH</b></label>
                    <input class="infoDateDepart" type="text" id="month" value = "<?php echo $presentTime->format('M'); ?>" name="mouth" >
                </div>
                <div class = "info day">
                    <label for="day"><b>DAY</b></label>
                    <input class="infoDateDepart" type="text" id="day" value = "<?php echo $presentTime->format('d'); ?>" name="day" >
                </div>
                <div class = "info year">
                    <label for="year"><b>YEAR</b></label>
                    <input class="infoDateDepart" type="text" id="year" value = "<?php echo $presentTime->format('Y'); ?>" name="year" >
                </div>
                <div class = "info ampm">
                    <label for="am/pm"><b>AM/PM</b></label>
                    <input class="infoDateDepart" type="text" id="am/pm" value = "<?php echo $presentTime->format('A'); ?>" name="am/pm" >
                </div>
                <div class = "info hour">
                    <label for="hour"><b>HOUR</b></label>
                    <input class="infoDateDepart" type="text" id="hour" value = "<?php echo $presentTime->format('h'); ?>" name="hour" >
                </div>
                <div class = "deuxPoints">
                    :
                </div>      
                <div class = "info min">
                    <label for="min"><b>MIN</b></label>
                    <input class="infoDateDepart" type="text" id="min" value = "<?php echo $presentTime->format('i'); ?>" name="min" >
                </div>
            </div>
            <p class ="dest">PRESENT TIME</p>


            <div class = "affichageInterval">
                <div class = "info month">
                    <label for="month"><b>MONTH</b></label>
                    <input class="infoDateInterval" type="text" id="month" value = "<?php echo $interval->format('%m'); ?>" name="mouth" >
                </div>
                <div class = "info day">
                    <label for="day"><b>DAY</b></label>
                    <input class="infoDateInterval" type="text" id="day" value = "<?php echo $interval->format('%d'); ?>" name="day" >
                </div>
                <div class = "info year">
                    <label for="year"><b>YEAR</b></label>
                    <input class="infoDateInterval" type="text" id="year" value = "<?php echo $interval->format('%y'); ?>" name="year" >
                </div>
                <div class = "info hour">
                    <label for="hour"><b>HOUR</b></label>
                    <input class="infoDateInterval" type="text" id="hour" value = "<?php echo $interval->format('%h'); ?>" name="hour" >
                </div>
                <div class = "deuxPoints">
                    :
                </div> 
                <div class = "info min">
                    <label for="min"><b>MIN</b></label>
                    <input class="infoDateInterval" type="text" id="min" value = "<?php echo $interval->format('%i'); ?>" name="min" >
                </div>
                <div class = "deuxPoints">
                    :
                </div>
                <div class = "info sec">
                    <label for="sec"><b>SEC</b></label>
                    <input class="infoDateInterval" type="text" id="sec" value = "<?php echo $interval->format('%s'); ?>" name="sec" >
                </div>
            </div>
            <p class ="dest">INTERVAL TIME</p>


            <div class = "infoCarbu">
                <label for="carbu"><b>QUANTITE DE CARBURANT NECESSAIRE</b></label>
                <input class="affichageCarbu" type="text" id="CARBU" value = "<?php echo $conso; ?>" name="CARBU" >
            </div>
        </form>
    </div>
</body>
</html>