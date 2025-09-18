<?php

$rota = $_SERVER;
$endpoint = $_SERVER["REQUEST_METHOD"] . "" . $_SERVER["REQUEST_URI"];
echo "rotasPHP";
echo "<pre>";
print_r($rota); 
print_r($endpoint);
echo "<pre>";  