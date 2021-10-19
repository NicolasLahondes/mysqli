<?php

class Connexion extends PDO
{

    private $dbAdress;
    private $dbName;
    private $dbUser;
    private $dbPassword;

    public function __construct($dbAdress, $dbName, $dbUser, $dbPassword)
    {
        $this->dbAdress = $dbAdress;
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPassword = $dbPassword;
        parent::__construct('mysql:host=' . $dbAdress . ';dbname=' . $dbName, $dbUser, $dbPassword);
    }

    /**
     * Get the value of dbAdress
     */
    public function getDbAdress()
    {
        return $this->dbAdress;
    }

    /**
     * Set the value of dbAdress
     *
     * @return  self
     */
    public function setDbAdress($dbAdress)
    {
        $this->dbAdress = $dbAdress;

        return $this;
    }

    /**
     * Get the value of dbName
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /**
     * Set the value of dbName
     *
     * @return  self
     */
    public function setDbName($dbName)
    {
        $this->dbName = $dbName;

        return $this;
    }

    /**
     * Get the value of dbUser
     */
    public function getDbUser()
    {
        return $this->dbUser;
    }

    /**
     * Set the value of dbUser
     *
     * @return  self
     */
    public function setDbUser($dbUser)
    {
        $this->dbUser = $dbUser;

        return $this;
    }

    /**
     * Get the value of dbPassword
     */
    public function getDbPassword()
    {
        return $this->dbPassword;
    }

    /**
     * Set the value of dbPassword
     *
     * @return  self
     */
    public function setDbPassword($dbPassword)
    {
        $this->dbPassword = $dbPassword;

        return $this;
    }


    // public function dbConnect()
    // {
    //     try {
    //         //Setting bdd connexion
    //         $bddConn = new PDO('mysql:host=' . $this->dbAdress . ';dbname=' . $this->dbName, $this->dbUser, $this->dbPassword);
    //         // If error generate exception
    //         $bddConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     } catch (PDOException $e) {
    //         // Get the idea of error
    //         echo $e->getCode();
    //         // Display entire error msg
    //         die('Erreur :' . $e->getMessage());
    //     }
    // }

    /**
     * listAllTrainees
     *
     * @param  mixed $bddConn
     * @param  mixed $tableName
     * @param  mixed $limit
     * @param  mixed $className
     * @param  mixed $where
     * @param  mixed $what
     * @param  mixed $order
     * @param  mixed $by
     * @return $fetchedresults
     */
    public static function listAllTrainees($bddConn, $tableName, $limit = 0, $className, $where, $what, $order, $by)
    {
        $query = 'SELECT * FROM ' . $tableName . '';
        if ($where) :
            $query = $query . ' WHERE ' . $where . ' LIKE ' . '' . '\'%' . $what . '%\'' . '';
        endif;
        if ($order) :
            $query = $query . ' ORDER BY ' .  $order  . ' ' . $by;
        endif;
        if ($limit > 0) :
            $query =  $query . '  LIMIT ' . $limit . '';
        endif;
        echo strtoupper("query actuelle: ") . $query;
        $results = $bddConn->prepare($query);
        $results->execute();
        $fetchedResults = $results->fetchAll(PDO::FETCH_CLASS, $className);
        return $fetchedResults;
    }


    /**
     * addTrainee
     *
     * @param  mixed $bddConn
     * @param  mixed $name
     * @param  mixed $firstname
     * @param  mixed $birthdate
     * @param  mixed $tableName
     * @return void
     */
    public static function addTrainee($bddConn, $tableName, $bindParam)
    {
        $query = 'INSERT INTO ' . $tableName . ' (`name`, firstname, birthdate) VALUES (:name, :firstname, :birthdate)';

        $results = $bddConn->prepare($query);
        foreach ($bindParam as $key => $value) :
            echo $value;
            $results->bindValue(':' . $key, $value);
        endforeach;
        $results->execute();
        return $results;
    }

    
    /**
     * modify
     *
     * @param  mixed $bddConn
     * @param  mixed $bindParam
     * @return void
     */
    public static function modify($bddConn, $bindParam)
    {
        $idQuery = 'UPDATE student SET `name`= :nameEnt, firstname= :firstNameEnt, birthdate= :birthdate WHERE id = :id';
        $results = $bddConn->prepare($idQuery);
        foreach ($bindParam as $key => $value) :
            $results->bindValue(':' . $key, $value);
        endforeach;
        $results->execute();
        return;
    }

    
    /**
     * deleteTrainee
     *
     * @param  mixed $bddConn
     * @param  mixed $id
     * @param  mixed $tableName
     * @return void
     */
    public static function deleteTrainee($bddConn, $id, $tableName)
    {
        $query = 'DELETE FROM ' . $tableName . ' WHERE `' . $tableName . '`.`id` = :id';
        $results = $bddConn->prepare($query);
        $results->bindParam(':id', $id);
        $results->execute();

        return $results;
    }
}
