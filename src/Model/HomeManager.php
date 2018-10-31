<?php
/**
 * Created by PhpStorm.
 * User: amelie
 * Date: 31/10/18
 * Time: 02:24
 */

namespace Model;


class HomeManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'address';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function selectAll(): array
    {
        return $this->pdo->query('SELECT latitude, longitude FROM ' . $this->table, \PDO::FETCH_ASSOC)->fetchAll();
    }

    public function insert(Home $home): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table (`latitude`, `longitude`) VALUES (:latitude, :longitude)");
        $statement->bindValue('latitude', $home->getLatitude(), \PDO::PARAM_STR);
        $statement->bindValue('longitude', $home->getLongitude(), \PDO::PARAM_STR);

        return $statement->execute();
    }

}