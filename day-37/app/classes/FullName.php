<?php


namespace App\classes;


class FullName
{
    public $firstName,$fullName , $lastName=[];

    public function __construct($data)
    {
        $this->firstName = $data["first_name"];
        $this->lastName = $data["last_name"];

    }

    public function getFullName()
    {
        $this->fullName= $this->firstName." ".$this->lastName;
        header('Location: route.php?page=formPage&message='.$this->fullName);
    }
}