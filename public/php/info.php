<?php

trait info
{
       public function setAge($age)
    {
        $this->age->$age;
        return $this;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}