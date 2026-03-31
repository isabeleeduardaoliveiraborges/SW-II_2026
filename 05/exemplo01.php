<?php
  // string json conteudo os dados de um funcionario  
  $json_str = '{"nome":"angelo jones","idade":38,"sexo":"m"}';

  $obj = json_decode($json_str);

//echo $obj;
echo "<pre>";
var_dump($obj);
echo "</pre>";


echo "<hr>";

  //imprime o conteudo objeto
  echo "nome: $obj->nome<br>";
   echo "idade: $obj->idade<br>";
    echo "sexo: $obj->sexo<br>";
?>