<?php 
require_once 'Base.php';
require_once 'User.php'; 
require_once 'Guest.php';
require_once 'Admin.php';



$guest=new Guest(); 
echo $guest->login();
$user=new User('Juan');
echo $user->login();
$admin=new Admin('Pedro'); 
echo $admin->login();

