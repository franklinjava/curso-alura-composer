<?php

require 'vendor\autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$url= "/cursos-online-programacao/php";
$client = new Client(['base_uri' => 'https://www.alura.com.br/']);

$crawler = new Crawler();

$buscador = new Buscador($client,$crawler);

$cursos = $buscador->buscar($url);


foreach ($cursos as $curso) {
    echo exibirMensagem($curso);
 }