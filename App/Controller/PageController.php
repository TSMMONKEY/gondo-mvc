<?php
namespace App\Controller;

use Core\Helper;
use Core\DbConnect;
use PDO;

class PageController {
    public function index() {
        $viewHelper = new Helper();
        return $viewHelper->view( 'home' );
    }

    public function about() {
        $viewHelper = new Helper();
        return $viewHelper->view( 'about' );
    }

    public function contact() {
        $viewHelper = new Helper();
        return $viewHelper->view( 'contact' );
    }

    public function store() {
        $connection = new DbConnect();
        $helper = new Helper();
        $conn = $connection->connect(); // Establish the database connection

        // form input data
        $name = $_POST['first-name'];
        $last_name = $_POST['last-name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        

        
        $sql = "INSERT INTO contact (name, last_name, email, message) VALUES ('$name', '$last_name', '$email','$message')";
        
        try {
            // use exec() because no results are returned
            $conn->exec($sql);
            echo 'New record created successfully';
        } catch (PDOException $e) {
            echo 'Error inserting record: ' . $e->getMessage();
        }

        return $helper->redirect('/thank-you');
    }

    public function thank_you() {
        $viewHelper = new Helper();
        return $viewHelper->view( 'thankyou' );
    }
}