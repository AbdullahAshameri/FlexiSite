<?php

namespace B;

// use A\person as personA;

const LARAVEL = 'laravel B';

function hello() {
    echo 'hello B';
}

class person    
{
    const MALE = 'm';
    const FEMALE = 'f';
    public $name;
    protected $gender;
    private $age;

    public static $country;
    // تسند دالة الى متغير عن طريق كونستراكت
    public function __construct()
    {
        echo __CLASS__;
    }
    public function setAge($age)
    {
        $this-> age->$age;
        return $this;
    }
    public function setGender($gender)
    {
        $this->gender=$gender;
    }
    public static function setCountry($country)
    {
        self::$country=$country;
    }
}