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
        return $this->pdo->query('SELECT address FROM ' . $this->table, \PDO::FETCH_ASSOC)->fetchAll();
    }

}