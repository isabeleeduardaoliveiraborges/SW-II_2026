<?php
   //cria o  array associativo
   $idades = array( "jason"=>38, "Ada"=>35, "delphino"=>26);

    //corverte o conteudo do array associativo para uma string JSON
   $json_str = json_encode($idades);

   //imprime a string JSON
   echo "$json_str";




?>