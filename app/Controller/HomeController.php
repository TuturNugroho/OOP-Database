<?php

namespace Staditek\App\Controller;

use Staditek\App\Core\Akun;

class HomeController
{
    public $akun;

    public function __construct()
    {
        $this->akun = new Akun();
    }
    public function index()
    {
        echo 'Hello World';
    }
    public function view()
    {
        // echo 'Hello Turn';
        $b= $this->akun->all();
        require_once('/xampp/htdocs/mini-framework/app/View/template/View.php');
    }
}
