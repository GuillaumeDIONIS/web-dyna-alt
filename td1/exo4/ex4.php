<?php
$title='Exercice4';
include "header.php";

$lignes = 2;
$colonnes = 2;

if(!empty($_GET['lignes']))$lignes=$_GET['lignes'];
if(!empty($_GET['colonnes']))$colonnes=$_GET['colonnes'];

?>

<h3><a href="ex4.php?lignes=2&colonnes=2">Création d'une tableau 2X2</a></h3> <!-- Création tableau 2X2-->

<h3><a href="ex4.php?lignes=5&colonnes=5">Création d'une tableau 5X5</a></h3> <!-- Creéation tableau 5X5-->

<h3><a href="ex4.php?lignes=10&colonnes=8">Création d'une tableau 10X8</a></h3>



<?php if(!empty($_GET)){
    
        echo '<table border="2"><tbody>';
        
        for($l=0;$l<$lignes;$l++){ // lignes en boucles
            
            echo ($l%2==0) ? '<tr>' : '<tr style="font-weight:bold">'; //Une ligne sur 2 sera en gras
            
            for($c=0;$c<$colonnes;$c++){
                
                echo ($c%2==0) ? '<td>'.$l.'-'.$c.'</td>' : '<td style="background-color:#FF0000">'.$l.'-'.$c.'</td>'; // Une colonne sur 2 sera de couleur rouge
                
            }
            
            echo'<tr>';
        }
    
    echo'</tbody></table>';
    
} 
?>
    


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