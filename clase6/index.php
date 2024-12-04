<?php

require_once('./Person.php');
require_once('./User.php');
require_once('./Admin.php');


$user= new User;
$user->type = new Admin;
echo $user->type->greet();