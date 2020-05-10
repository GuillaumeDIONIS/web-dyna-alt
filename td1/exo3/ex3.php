<!DOCTYPE HTML>
<html>

    <head>
        <title>Exercice 3</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $size = 12;
        $color = 0;
        $message = "Pas de message";



        if(!empty($_POST['size']))$size=$_POST['size'];
        if(!empty($_POST['color']))$color=$_POST['color'];
        if(!empty($_POST['message']))$message=$_POST['message'];
        if(isset($_POST['Bouton_+'])){

            $size++;

        }
        if(isset($_POST['Bouton_-'])){

            $size--;

        }



        if(!empty($_POST)) {

            echo 'Le message souhaité est le suivant  : <div style="font-size:'.$size.'px; color:'.$color.'"> '.$message.'</div>';
        }else{
            echo '! Veuillez saisir une taille, une couleur et un message !';
        }



        ?>

        <form id="1" method="POST"> <!--Message-rouge-->
            <input type="hidden" value="Message_1" name="message" id="message">
            <input type="hidden" value="#ff0000" name="color" id="color">
            <input type="hidden" value="15" name="size" id="size">
        </form>
        
        <form id="2" method="POST"> <!--Message-vert-->
            <input type="hidden" value="Message_2" name="message" id="message">
            <input type="hidden" value="#2ff000" name="color" id="color">
            <input type="hidden" value="30" name="size" id="size">
        </form>
        
        <form id="3" method="POST"> <!--Message-bleu-->
            <input type="hidden" value="Message_3" name="message" id="message">
            <input type="hidden" value="#0000ff" name="color" id="color">
            <input type="hidden" value="50" name="size" id="size">
        </form>

        <button><a href='#' onclick='document.getElementById("1").submit()'>Message1</a></button>
        <button><a href='#' onclick='document.getElementById("2").submit()'>Message2</a></button>
        <button><a href='#' onclick='document.getElementById("3").submit()'>Message3</a></button>





        <form method="POST">

            <input type="submit" value="+" name="Bouton_+"> 
            <input type="submit" value="-" name="Bouton_-">

            <label for="size">Size : </label>
            <input type="number" value=<?php echo $size; ?> name="size" id="size">


            <label for="color">Color : </label>
            <input type="color" value=<?php echo $color; ?> name="color" id="color">


            <label for="message">Message : </label>
            <input type="textarea" value=<?php echo $message; ?> name="message" id="message">
            <input type="submit" value="Valider">

        </form>


    </body>
</html>