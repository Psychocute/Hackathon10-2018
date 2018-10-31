<?php
/**
 * Created by PhpStorm.
 * User: amelie
 * Date: 30/10/18
 * Time: 22:16
 */

namespace Controller;


use GuzzleHttp\Client;
use Model\Home;
use Model\HomeManager;

class HomeController extends AbstractController
{
//    public function index()
//    {
//        return $this->twig->render('Home/index.html.twig');
//    }
    public function adresseMap()
    {
        if(!empty($_POST))
        {
            $client = new Client();

            $response = $client->request('GET', 'https://api-adresse.data.gouv.fr/search/?q='.$_POST['address']);
            $body = $response->getBody();
//            $adress =$body->getContents();
            $res = json_decode($body, true);
//            var_dump($res);
            $lat=$res['features'][0]['geometry']['coordinates'][0];
            $lon=$res['features'][0]['geometry']['coordinates'][1];
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $homeManager = new HomeManager($this->getPdo());
                $home = new Home();
                $home->setLatitude($lat);
                $home->setLongitude($lon);
                $id = $homeManager->insert($home);
                header('Location:/' );
            }

        }

        return $this->twig->render('Home/index.html.twig');
    }

}

