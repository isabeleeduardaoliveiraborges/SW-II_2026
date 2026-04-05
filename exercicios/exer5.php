<?php
$json = file_get_contents("produtos.json");
$produtos = json_decode($json, true);

foreach ($produtos as $i => $p) {
    if ($p["produto"] == "placa de video") {
        unset($produtos[$i]);
    }
}

file_put_contents("produtos.json", json_encode(array_values($produtos), JSON_PRETTY_PRINT));
?>