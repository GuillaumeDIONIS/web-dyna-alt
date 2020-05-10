<!DOCTYPE HTML>
<html>

<head>
<title>Exercice 2</title>
<meta charset="utf-8">
</head>
<body>
<?php
       $size = 12;
       $color = 0;
       $message = "Pas de message";
       
       
       
       if(!empty($_GET['size']))$size=$_GET['size'];
       if(!empty($_GET['color']))$color=$_GET['color'];
       if(!empty($_GET['message']))$message=$_GET['message'];
       if(isset($_GET['Bouton_+'])){
              
              $size++;
              
       }
       if(isset($_GET['Bouton_-'])){

              $size--;

       }
      
       
       
       if(!empty($_GET)) {
              
              echo 'Le message souhaité est le suivant  : <div style="font-size:'.$size.'px; color:'.$color.'"> '.$message.'</div>';
       }else{
              echo '! Veuillez saisir une taille, une couleur et un message !';
       }
       
       
       
?>
       
       <p><a href = "ex2.php?message=Message_1&size=15&color=%23ff0000">"Message_1" en rouge + taille 15px</a></p>

       <p><a href = "ex2.php?message=Message_2&size=30&color=%2327d909">"Message_2" en vert + taille 30px</a></p>

       
       <p><a href = "ex2.php?message=Message_3&size=50&color=%230000ff">"Message_3" en bleu + taille 50px</a></p>
       

       
       
              
       
       <form method="GET">
              
              <input type="submit" value="+" name="Bouton_+"> 
              <input type="submit" value="-" name="Bouton_-">
              
              <label for="size">Size : </label>
              <input type="number" value=<?php echo $size; ?> name="size" id="size">
              
              
              <label for="color">Color : </label>
              <input type="color" value=<?php echo $color; ?> name="color" id="color">
              
              
              <label for="message">Message : </label>
              <input type="text" value=<?php echo $message; ?> name="message" id="message">
              <input type="submit" value="Valider">
              
       </form>
       
       
       </body>
</html>