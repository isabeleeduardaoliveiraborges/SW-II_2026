<?php
if (isset($_GET["email"])) {
    $json = file_get_contents("usuarios.json");
    $usuarios = json_decode($json, true);

    foreach ($usuarios as $u) {
        if ($u["email"] == $_GET["email"]) {
            echo "Nome: " . $u["nome"] . "<br>";
            echo "Email: " . $u["email"];
            return;
        }
    }

    echo "Usuário não encontrado.";
}
?>