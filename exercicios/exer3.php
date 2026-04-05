<?php
$json = file_get_contents("produtos.json");
$produtos = json_decode($json, true);

$novoproduto = [
    "produto" => "placa de video",
    "preço" => 550,
    "estoque" => 45
];
$produtos[] = $novoproduto;
$jsonUpd = json_encode($produtos , JSON_PRETTY_PRINT);
file_put_contents("produtos.json", $jsonUpd);
?>