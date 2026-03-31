<?php
       // string json conteudo os dados de um funcionario  
  $json_str = '
  {"empregados": 
  [
    {"nome":"angelo jones","idade":38,"sexo":"f"},
    {"nome":"isabele aguiar","idade":40,"sexo":"bi"},
    {"nome":"anna young","idade":32,"sexo":"labirinto"},
    ]
   }';

             //faz o parsing da string, criando o array "empregados"
             $jsonObj = json_decode($json_str);

             $empregados = $jsonObj -> empregados;

         echo "<pre>";
            var_dump($empregados);
         echo "</pre>";

             //navega pelo elemntos do array ,imprimindo cada empregado
             foreach ( $empregados as $e){
                echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo <br>";
             }
?>