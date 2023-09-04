<?php
namespace App\Controller;

use Core\Helper;

class PageController
{
    public function index() {
        $viewHelper = new Helper();
        return $viewHelper->view('home');
    }
}