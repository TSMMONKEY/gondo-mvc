<?php
namespace App\Controller;

use Core\Helper;

class PageController
{
    public function index() {
        $viewHelper = new Helper();
        return $viewHelper->view('home');
    }
    
    public function about() {
        $viewHelper = new Helper();
        return $viewHelper->view('about');
    }
    
    public function contact() {
        $viewHelper = new Helper();
        return $viewHelper->view('contact');
    }
}