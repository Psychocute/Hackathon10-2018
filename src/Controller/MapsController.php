<?php
/**
 * Created by PhpStorm.
 * User: amelie
 * Date: 30/10/18
 * Time: 15:29
 */

namespace Controller;


class MapsController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Maps/index.html.twig');
    }
}