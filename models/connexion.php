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


            public static function addTrainee($bddConn, $name, $firstname, $birthdate)
    {
        $query = 'INSERT INTO student (`name`, firstname, birthdate) VALUES (:name, :firstname, :birthdate)';
        $results = $bddConn->prepare($query);
        $results->bindParam(':name', $name);
        $results->bindParam(':firstname', $firstname);
        $results->bindParam(':birthdate', $birthdate);
        $results->execute();

        return $results;
    }
}
