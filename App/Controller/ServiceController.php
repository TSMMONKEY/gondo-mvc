<?php
namespace App\Controller;

use Core\Helper;

class ServiceController
{
    public function onsite() {
        // echo 'awe';
        $helper = new Helper();
        return $helper->servicesView('onsite');
    }
    
    public function CIT() {
        $servicesView = new Helper();
        return $servicesView->servicesView('cit');
    }
    
    public function SatelliteTracking() {
        $servicesView = new Helper();
        return $servicesView->servicesView('satellite');
    }
    
    public function EventSecurity() {
        $servicesView = new Helper();
        return $servicesView->servicesView('event');
    }
}