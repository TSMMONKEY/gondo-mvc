<?php
namespace Core;

class Helper
{
    public function view($view, $data=[]) {
        extract($data);

        return require "../resources/view/{$view}.view.php";
    }
} 
