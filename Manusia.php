<?php


class Manusia
{
    protected $name;
    protected $address;
    protected $birthPlace;
    protected $birthDate;
    protected $sex;

    public function __construct($name, $address, $birthPlace, $birthDate, $sex) {
        $this->name = $name;
        $this->address = $address;
        $this->birthPlace = $birthPlace;
        $this->birthDate = $birthDate;
        $this->sex = $sex;
    }

}