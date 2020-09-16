 <?php 
 $year = filter_input(INPUT_POST, 'year');
 $submit = filter_input(INPUT_POST, 'submit');
 $spz = filter_input(INPUT_POST, 'spz');
 $auto = filter_input(INPUT_POST, 'auto');
 $types = array('Auto', 'Autobus','Karavan','Trolejbus');
 ?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php
if (isset($submit)) { ?>
  Auto: <?= $auto ?>
  <br>SPZ: <?= $spz ?>
  <br>Rok výroby: <?= $year ?><br> Stav auta: 
  <?php 
if ($year>2009) { ?>
  Moderní
<?php 
} elseif ($year>1989) { ?> 
  Ojeté
<?php
} else { ?>
  Veterán
<?php
}


} else { ?> 
  <form action="wp2-2.php" method="post">
 Typ vozidla: <select name="auto" id="cars">
 <?php foreach ($types as $type) { ?>
   <option value="<?= $type ?>"><?= $type ?> </option>
 <?php } ?>


</select>
<br>SPZ <input type="text" name="spz" > 

<br>Rok vyroby<input type="number" name="year" id="year" min="1950" max="2020" >

<br> <input type="submit" name="submit" value="Odeslat">

</form>
<?php } ?>
    





</form>
</body>
</html>