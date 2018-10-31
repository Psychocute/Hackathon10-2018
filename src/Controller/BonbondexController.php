<?php
/**
 * Created by PhpStorm.
 * User: amelie
 * Date: 30/10/18
 * Time: 15:29
 */

namespace Controller;
use Model\Bonbondex;
use Model\BonbondexManager;
use GuzzleHttp\Client;

class BonbondexController extends AbstractController
{   private $uri = 'https://fr.openfoodfacts.org/cgi/search.pl';
    private $search = 'bonbons';

    public function index()
    {


        $client = new Client();
        $res = $client->request('GET', 'https://fr-en.openfoodfacts.org/category/sweet/1.json');
        //echo json_decode($res->getBody()); die();

        $reponse = json_decode ($res->getBody(), true);

        echo $reponse['count']."<br/><br/>";
        $liste = $reponse['products'];
        //echo json_decode($liste[0]);


        //foreach($liste as $product){
           // echo $product['product_name']."<br/>";
           // echo $product['image_url']."<br/><br/>";
        //}

        return $this->twig->render('Bonbondex/index.html.twig',['liste' => $liste]);
    }
}

