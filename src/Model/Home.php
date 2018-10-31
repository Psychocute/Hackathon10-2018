<?php
/**
 * Created by PhpStorm.
 * User: amelie
 * Date: 31/10/18
 * Time: 09:52
 */

namespace Model;


class Home
{
    private $longitude;
    private $latitude;

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

}
