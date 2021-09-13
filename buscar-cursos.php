#!/usr/bin/env php
<?php

use App\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

require 'vendor/autoload.php';


$client = new Client(['verify' => false]);

$crawler = new Crawler();
$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('https://www.alura.com.br/cursos-online-programacao/php');
array_map(function ($curso) {
  echo $curso . PHP_EOL;
}, $cursos);
