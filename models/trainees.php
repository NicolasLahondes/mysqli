<?php

class Trainees
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


    public static function listAllTrainees($bddConn)
    {
        $query = 'SELECT * FROM student';
        $results = $bddConn->prepare($query);
        $results->execute();
        $fetchedResults = $results->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $fetchedResults;
    }


    // $this->id = $key['id'];
    // $this->name = $key['name'];
    // $this->firstname = $key['firstname'];
    // $this->birthdate = $key['birthdate'];

    /**
     * takeOneElement
     *
     * @param  mixed $bddConn
     * @return void
     */
    public static function takeOneElement($bddConn, $id)
    {

        $query = 'SELECT * FROM student WHERE id = :id';
        $objRes = $bddConn->prepare($query);
        $objRes->bindParam(':id', $id);
        $objRes->execute();
        //  Le constructeur doit être vide pour utiliser la method ci dessous.  
        $fetchedResults = $objRes->fetchObject(__CLASS__);
        return $fetchedResults;
    }

    /**
     * modify
     *
     * @param  mixed $bddConn
     * @param  mixed $nameEnt
     * @param  mixed $firstNameEnt
     * @param  mixed $birthdate
     * @param  mixed $idToModify
     * @return void
     */
    public static function modify($bddConn, $nameEnt, $firstNameEnt, $birthDateEnt, $idToModify)
    {
        $idQuery = 'UPDATE student SET `name`= :nameEnt, firstname= :firstNameEnt, birthdate= :birthdate WHERE id = :idToModify';
        $results = $bddConn->prepare($idQuery);
        $results->bindParam(':nameEnt', $nameEnt);
        $results->bindParam(':firstNameEnt', $firstNameEnt);
        $results->bindParam(':birthdate', $birthDateEnt);
        $results->bindParam(':idToModify', $idToModify);
        $results->execute();

        return $results;
    }


    public static function deleteTrainee($bddConn, $id)
    {
        $query = 'DELETE FROM `student` WHERE `student`.`id` = :id';
        $results = $bddConn->prepare($query);
        $results->bindParam(':id', $id);
        $results->execute();

        return $results;
    }


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



    public function calcAge()
    {
        $age = date("Y") - date("Y", strtotime($this->birthdate));
        return $age;
    }

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
