<?php
  $produtos = [
    ["produto" => "Teclado",
    "preço" => 150,
    "estoque" => 20,],
    ["produto" => "Mouse",
    "preço" => 50,
    "estoque" => 50,],
    ["produto" => "Monitor",
    "preço" => 1000,
    "estoque" => 10,],

  ];

  $json = json_encode($produtos , JSON_PRETTY_PRINT);
  file_put_contents("produtos.json", $json);
?>
