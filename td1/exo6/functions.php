<?php

function element($titre, $contenu, $niveau=1){
    
    $element='<h'.$niveau.'>'.$titre.'</h'.$niveau.'>';
    $element.='<div>'.$contenu.'</div>';
    return $element;
}



function parseElements($elements){
    $gener= '';
    
    foreach($elements as $nomb=>$element){
        
        $niveau =1;
        $titre ='';
        $contenu ='';
        
        foreach ($elements as $con => $vol){
            if ($con=="niveau")$niveau=$vol;
            if ($con=="titre")$titre=$vol;
            if ($con=="contenu")$contenu=$vol;
            
        }
        
        $gener.= element($titre, $contenu, $niveau);
            }
    
    return $gener;
}
    
function createHtmlTable($lignes,$colonnes){

    if(!empty($_GET)) {

        $table= '<table border="2"><tbody>';

        for($l=0;$l<$lignes;$l++){ // lignes en boucles

            $table.= ($l%2==0) ? '<tr>' : '<tr style="font-weight:bold">'; //Une ligne sur 2 sera en gras

            for($c=0;$c<$colonnes;$c++){

                $table.= ($c%2==0) ? '<td>'.$l.'-'.$c.'</td>' : '<td style="background-color:#FF0000">'.$l.'-'.$c.'</td>'; // Une colonne sur 2 sera de couleur rouge

            }

            $table.='<tr>';
        }

        $table.='</tbody></table>';
        return $table;

    } 
    return null;

}

    

?>
