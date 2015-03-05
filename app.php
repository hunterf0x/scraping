<?php
/**
 * Created by PhpStorm.
 * User: hunterfox
 * Date: 05-03-15
 * Time: 12:26
 */

require_once __DIR__.'/vendor/autoload.php';

use Goutte\Client;

$client = new Client();

// home
$crawler = $client->request('GET', 'http://www.falabella.com/falabella-cl/category/cat70043/Televisores');

$crawler->filter('.cajaLP4x')->each(function ($node) {
    $marca = $node->filter('.marca a');
    $precio = $node->filter('.precio1');

    print $marca->text()."=".$precio->text()."\n";

});