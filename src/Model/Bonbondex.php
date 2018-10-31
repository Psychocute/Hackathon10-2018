<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 30/10/18
 * Time: 21:08
 */

namespace Model;


class Bonbondex
{
    private $id;
    private $name;
    private $picture;

    /**
     * @return mixed
     */
    public function getId():int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id):void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name):Bonbondex
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPicture():string
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture):Bonbondex
    {
        $this->picture = $picture;
    }
}