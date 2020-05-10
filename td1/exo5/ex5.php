<?php
$title="Exercice5";
include "header.php";
include 'functions.php';


$lignes = 2;
$colonnes = 2;

if(!empty($_GET['lignes']))$lignes=$_GET['lignes'];
if(!empty($_GET['colonnes']))$colonnes=$_GET['colonnes'];

?>

<h3><a href="ex5.php?lignes=2&colonnes=2">Création d'une tableau 2X2</a></h3> <!-- Création tableau 2X2-->

<h3><a href="ex5.php?lignes=5&colonnes=5">Création d'une tableau 5X5</a></h3> <!-- Creéation tableau 5X5-->

<h3><a href="ex5.php?lignes=10&colonnes=8">Création d'une tableau 10X8</a></h3>



<?=createHtmlTable($lignes, $colonnes); ?>



<form method="GET"> <!-- On a les différents tableau a générer -->

    <label for="size">Nombres de lignes : </label>
    <input type="number" value="5" name="lignes" id="lignes">

    <label for="size">Nombres de colonnes : </label>
    <input type="number" value="5" name="colonnes" id="colonnes">

    <input type="submit" value="OK">



</form>

<?php
include "footer.php";
?>