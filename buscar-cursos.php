<?php

require 'vendor/autoload.php';


use Alura\BuscadorDeCursos\Buscador;
//use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new GuzzleHttp\Client(['verify' => false ]);
//$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('https://www.alura.com.br/cursos-online-programacao/php');


foreach ($cursos as $curso) {
    echo exibeMensagem ($curso);
}