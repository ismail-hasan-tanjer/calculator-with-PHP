<?php
namespace App\classes;

class HelloWorld

{
    public $menu = [];

    public function __construct (){
        // echo "Hello  I am on";
    }

    public function index ()
    {
        header('Location: action.php?page=home');
    }
    public function menu(){
        $this->menuData = [
            0 => ['Home'],
            1 => ['About Us'],
            2 => ['Contact Us'],
            3 => ['Service']
        ];
           
        return $this->menuData;
    }
}