<?php

$tabs = array (array ("Heure","10h","11h","14h"),
               array ("Titre du spectacle","Ballet aérien pour plumes et trompette", "Gentleman dans la ville", "Cigogne vole"),
               array ("Artiste","Dumbo and the renegade crowns","Les Branquignols", "Les Dindons"),
               array ("Image","<img src='http://goo.gl/Vhe6lD' height='100 px' width='100 px'  alt='elephant'>","<img src='http://4.bp.blogspot.com/-Aayg_8i4bAc/URe8IEvcyFI/AAAAAAAAACw/IRFMdV7FWfA/s1600/gentleman_large.png' height='100 px' width='100 px' alt='gentleman'>","<img src='http://chezminette87.c.h.pic.centerblog.net/8wh8ms7x.gif' height='100 px' width='100 px'  alt='cigogne'>"));



?>
<table>
<thead>
<tr>
    <?php
    foreach ($tabs as $clef => $valeur)
    {
        echo "<td>" . $valeur[0] . "</td>";
        
    }
    ?>
</tr>
<tr>
    <?php
    foreach ($tabs as $clef => $valeur)
    {
        echo '<td>' . $valeur[1] . '</td>';
       
    }
    ?>
</tr>   
<tr>
    <?php
    foreach ($tabs as $clef => $valeur)
    {
        echo '<td>' . $valeur[2] . '</td>';
        
    }
    ?>
</tr>
<tr>
    <?php
    foreach ($tabs as $clef => $valeur)
    {
        echo '<td>' . $valeur[3] . '</td>';
       
    }
    ?>
</tr>
</thead>
</table>