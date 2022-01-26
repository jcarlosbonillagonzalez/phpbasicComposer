<?php
class User
{
    public $type;
}

class Admin
{
    public function saludar()
    {
        return "Hola Administrador";
    }
}   

$user = new User;
$user->type = new Admin;
echo $user->type->saludar();