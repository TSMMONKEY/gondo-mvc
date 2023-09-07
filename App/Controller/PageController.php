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
    
    public function store() {
        echo 'awe';

        header('Location: /thank-you');
    }

    public function thank_you() {
        echo 'awe';
        $viewHelper = new Helper();
        return $viewHelper->view('thankyou');
    }
}