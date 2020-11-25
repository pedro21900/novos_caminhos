<?php

namespace classes;

class User
{
    private $job;
    private $firsName;
    private $lastName;


    public function __construct($job,$firsName,$lastName)
    {
        $this->job=$job;
        $this->firsName=$firsName;
        $this->lastName=$lastName;
    }


    /**
     * Get the value of job
     */ 
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set the value of job
     *
     * @return  self
     */ 
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get the value of firsName
     */ 
    public function getFirstName()
    {
        return $this->firsName;
    }

    /**
     * Set the value of firsName
     *
     * @return  self
     */ 
    public function setFirsName($firsName)
    {
        $this->firsName = $firsName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }
}    