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
$roteador -> group("adm");
$roteador -> get("/lista", "adm:listarUsuarios");
$roteador -> get("/login", "adm:login");
$roteador -> post("/login", "adm:autenticar");
$roteador -> get("/produtos", "adm:login");

$roteador -> dispatch();