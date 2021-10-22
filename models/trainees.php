<?php

class Trainees extends Connexion
{

    private $id;
    private $name;
    private $firstname;
    private $birthdate;

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
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of birthdate
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    // **********************************************************************************************************************************************
    // ************************************************************** ALL METHODS HERE **************************************************************
    // **********************************************************************************************************************************************

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
     * @return void
     */
    public static function listAllTrainees($bddConn, $tableName, $limit, $className, $where, $what, $order, $by)
    {
        $fetchedResults = $bddConn->list($bddConn, $tableName, $limit, $className, $where, $what, $order, $by);
        return $fetchedResults;
    }

    /**
     * takeOneTrainee
     *
     * @param  mixed $bddConn
     * @param  mixed $id
     * @return void
     */
    public static function takeOneTrainee($bddConn, $id)
    {
        $fetchedResults = $bddConn->takeOneElement($bddConn, $_GET['id']);
        return $fetchedResults;
    }

    /**
     * modifyTrainee
     *
     * @param  mixed $bddConn
     * @param  mixed $bindParam
     * @return void
     */
    public static function modifyTrainee($bddConn, $bindParam)
    {
        $results = $bddConn->modify($bddConn, $bindParam);
        return $results;
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
        $results = $bddConn->delete($bddConn, $id, $tableName);
        return $results;
    }

    /**
     * addTrainee
     *
     * @param  mixed $bddConn
     * @param  mixed $tableName
     * @param  mixed $bindParam
     * @return void
     */
    public static function addTrainee($bddConn, $tableName, $bindParam)
    {
        $results = $bddConn->add($bddConn, $tableName, $bindParam);
        return $results;
    }

    /**
     * calcAge
     *
     * @return void
     */
    public function calcAge()
    {
        $age = date("Y") - date("Y", strtotime($this->birthdate));
        return $age;
    }

    /**
     * seniorJunior
     *
     * @param  mixed $age
     * @return void
     */
    public function seniorJunior($age)
    {
        if (($age > 30) && ($age < 60)) :
            $type = "Senior";
        elseif ($age > 200) :
            $type = "Ultra-senior";
        else :
            $type = "Junior";
        endif;
        return $type;
    }
}
