<?php
  $value = [
    "produto" => "Teclado",
    "preço" => 150,
    "estoque" => 20
  ];

  $json = json_encode($dados , JSON_PRETTY_PRINT);
  file_put_contens("usuarios.json", $json);
?>