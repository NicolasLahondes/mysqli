<?php

class Trainees
{

    private $id;
    private $name;
    private $time;
    private $note;
    const COEF = 2;

    public function __construct($id = '', $name = '', $time = '', $note = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->time = $time;
        $this->note = $note;
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
     * Get the value of time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of time
     *
     * @return  self
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get the value of note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @return  self
     */
    public function setNote($note)
    {
        $this->note = $note;

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

    public function calc($note)
    {
        $temp = $note * self::COEF;
        return $temp;
    }


    public function listAllTrainees($bddConn)
    {
        $query = 'SELECT * FROM student';
        $results = $bddConn->prepare($query);
        $results->execute();
        $fetchedResults = $results->fetchAll();

        return $fetchedResults;
    }


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
