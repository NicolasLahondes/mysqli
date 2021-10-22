<?php

class Teachers extends Connexion
{

    private $name;
    private $firstname;
    private $id;


    public function __construct()
    {
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public static function listTeachers($bddConn, $tableName, $limit, $className, $where, $what, $order, $by)
    {
        $fetchedResults = Connexion::list($bddConn, $tableName, $limit, $className, $where, $what, $order, $by);
        return $fetchedResults;
    }

    public static function addTeacher($bddConn, $tableName, $bindParam)
    {
        $results = $bddConn->add($bddConn, $tableName, $bindParam);
        return $results;
    }
}
