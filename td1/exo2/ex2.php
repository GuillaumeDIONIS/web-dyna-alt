<!DOCTYPE HTML>
<html>

<head>
<title>Exercice 2</title>
<meta charset="utf-8">
</head>
<body>
<?php
        $size = empty($size);
        $color = empty($color);
        $message = empty($message);
        
       
         $size = $_GET["size"];
       
         $color = $_GET["color"];
       
         $message = $_GET["message"];
       
      
       echo 'Le message souhaité est le suivant  : <div style="font-size:'.$size.'px; color:'.$color.'"> '.$message.'</div>';
       
       if (empty($size) or empty($color) or empty($message)){

              echo '! Veuillez saisir une taille, une couleur et un message !';
       }
       
       
       
?>
       
       <p><a href = "ex2.php?message=Message_1&size=15&color=%23ff0000">"Message_1" en rouge + taille 15px</a></p>

       <p><a href = "ex2.php?message=Message_2&size=30&color=%2327d909">"Message_2" en vert + taille 30px</a></p>

       
       <p><a href = "ex2.php?message=Message_3&size=50&color=%230000ff">"Message_3" en bleu + taille 50px</a></p>
       
       <a href = "ex2.php?message=<?=urlencode($message)?>&size=<?$size+1?>&color=<?=urlencode($color)?>"><button>+</button></a>
       <a href = "ex2.php?message=<?=urlencode($message)?>&size=<?$size-1?>&color=<?=urlencode($color)?>"><button>-</button></a>
       
       <form method="GET">
              <label for="size">Size : </label>
              <input type="number" value="10" name="size" id="size">
              
              
              <label for="color">Color : </label>
              <input type="color" value="" name="color" id="color">
              
              
              <label for="message">Message : </label>
              <input type="text" value="" name="message" id="message">
              <input type="submit" value="Valider">
              
       </form>
       
       
       </body>
</html>