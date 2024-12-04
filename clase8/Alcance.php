<?php

class User
{
    public const PAGINATE = 25;//tipo de alcance
    public $username;
    //     private $username;//tipo de alcance
//     protected $username;//tipo de alcance

    public function getUsername()
    {
        return $this->username;
    }
}