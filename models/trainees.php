<?php

class Trainees
{

    private $id;
    private $name;
    private $firstname;
    private $birthdate;

    public function __construct($id = '', $name = '', $firstname = '', $birthdate = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
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


    public function listAllTrainees($bddConn)
    {
        $query = 'SELECT * FROM student';
        $results = $bddConn->prepare($query);
        $results->execute();
        $fetchedResults = $results->fetchAll();
        $arrayResult = array();

        foreach ($fetchedResults as $trainee) {
            array_push($arrayResult, new Trainees($trainee['id'], $trainee['name'], $trainee['firstname'], $trainee['birthdate']));

        }
        return $arrayResult;
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
    public function takeOneElement($bddConn, $id)
    {

        $query = 'SELECT * FROM student WHERE id = :id';
        $objRes = $bddConn->prepare($query);
        $objRes->bindParam(':id', $id);
        $objRes->execute();
        $fetchedResults = $objRes->fetch(PDO::FETCH_ASSOC);

        $this->id = $fetchedResults['id'];
        $this->name = $fetchedResults['name'];
        $this->firstname = $fetchedResults['firstname'];
        $this->birthdate = $fetchedResults['birthdate'];
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
    public function modify($bddConn, $nameEnt, $firstNameEnt, $birthDateEnt, $idToModify)
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
}
