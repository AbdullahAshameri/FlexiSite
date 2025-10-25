<?php
// PSR-4
namespace A\B;

use info;
use \A\B\person as personA;
const LARAVEL = ' laravel A ';

function hello() {
    echo ' hello A ';
}

class person extends person
{

    use info;
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
       echo __FUNCTION__;
    }
    // public function setAge($age)
    // {
    //     $this->age->$age;
    //     return $this;
    // }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public static function setCountry($country)
    {
        self::$country = $country;
    }
    // public static $country;
}
