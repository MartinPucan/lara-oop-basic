<?php
declare(strict_types=1);

class Human
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }


    public function getName()
    {
        echo 'name';
    }
}

$name = new Human('Admin', true) ;

$name->getName();
var_dump($name); 
// var_dump($name);


