<?php
// dependencias
// "require" quebra se o arquivo n existir, "include" continua a execução
require_once 'vendor/autoload.php';

// endereço do site
const URL = "http://localhost";

// cria o roteador
$roteador = new CoffeeCode\Router\Router(URL);

// controlador: "cerébro do seu projeto". Gerencia o backend
// local do controlador
$roteador -> namespace("Etec\Marcio\Controller");

// rota principal
$roteador -> group(null);
$roteador -> get("/", "Principal:inicio");
$roteador -> get("/sobre", "Principal:sobre");
$roteador -> get("/login", "Principal:login");
$roteador -> post("/login", "Principal:autenticar");

// admin
$roteador -> group("admin");
$roteador -> get("/login", "admin:login");
$roteador -> get("/produtos", "admin:login");

$roteador -> dispatch();