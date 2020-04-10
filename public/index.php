<?php

require "../vendor/autoload.php";

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];
/*
 * Vu dans la doc mais ne semble pas requis?
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
*/
$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', ['products' => $products]);
