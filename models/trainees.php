<?php

class Subjects
{


    private $name;
    private $time;
    private $note;
    const COEF = 2;

    public function __construct($name, $time, $note)
    {
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

    public function calc($note)
    {
        $temp = $note * self::COEF;
        return $temp;
    }
}
