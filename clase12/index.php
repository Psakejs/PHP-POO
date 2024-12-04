<?php 

class User 
{
    public $name;

    public function __construct()
    {
        $this->name = $name;
    }
    

    public function getName()
    {
        return $this->name;
    }
}

class Admin extends User
{

}

$admin=new Admin('admin');
echo $admin->getName();
