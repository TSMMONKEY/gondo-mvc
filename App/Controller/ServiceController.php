<?php
namespace App\Controller;

use Core\Helper;

class ServiceController
{
    public function OneSite() {
        $viewHelper = new Helper();
        return $viewHelper->view('services/onsite');
    }
    
    public function CIT() {
        $viewHelper = new Helper();
        return $viewHelper->view('cit');
    }
    
    public function SatelliteTracking() {
        $viewHelper = new Helper();
        return $viewHelper->view('satelite');
    }
    
    public function EventSecurity() {
        $viewHelper = new Helper();
        return $viewHelper->view('event');
    }
}