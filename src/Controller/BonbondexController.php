<?php
/**
 * Created by PhpStorm.
 * User: amelie
 * Date: 30/10/18
 * Time: 15:29
 */

namespace Controller;


class BonbondexController extends AbstractController
{
    public function index()
    {
          return $this->twig->render('Bonbondex/index.html.twig');
    }
}