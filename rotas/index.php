<?php

$rota = $_SERVER;
$endpoint = $_SERVER["REQUEST_METHOD"] . "" . $_SERVER["REQUEST_URI"];

if(!strpos($_SERVER["REQUEST_URI"], "caixa")) {
    echo "Rota inválida";
    return;
};
echo "rotasPHP";
echo "<pre>";
print_r($rota); 
print_r($endpoint);
echo "<pre>";  


// rotas/index.php/talrota