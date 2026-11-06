<?php

namespace Matomas\Proyecto1\Class;

class DB extends \PDO
{

    public function __construct(?string $dsn=null, ?string $username=null, ?string $password = null, ?array $options = null)
    {
        $dsn=$dsn??"mysql:host=mariadb;dbname=".$_ENV['MARIADB_DBNAME'];
        $username=$username??$_ENV['MARIADB_USER'];
        $password=$password??$_ENV['MARIADB_PASSWORD'];

        parent::__construct($dsn, $username, $password, $options);

        $this->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

    }

}