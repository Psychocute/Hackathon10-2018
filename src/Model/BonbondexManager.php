<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 30/10/18
 * Time: 21:12
 */

namespace Model;


class BonbondexManager extends AbstractManager
{
    const TABLE = 'candy';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }


    /**
     * @param Bonbondex $bonbondex
     * @return int
     */
    public function insert(Bonbondex $bonbondex): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table (`name`, `picture`) VALUES (:name, :picture)");
        $statement->bindValue('name', $bonbondex->getName(), \PDO::PARAM_STR);


        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}