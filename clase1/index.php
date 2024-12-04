<?php 

class User
{
    public $type;
}

class Admin
{
    public function greet()
    {
        return "Hola administrador";
    }
}

$user= new User;
$user->type = new Admin;
echo $user->type->greet();