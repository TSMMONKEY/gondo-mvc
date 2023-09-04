<?php
namespace App\Controller\CoursesController;

use App\Models\Courses;

class CoursesController
{
    public function index()
    {
        $coursesMethod = new Courses();

        // You need to pass a valid argument to the 'AddCourseUser' method. 'hello' should be in quotes if it's a string.
        $coursesMethod->AddCourseUser('hello');
    }

    public function addCourse()
    {
        $coursesMethod = new Courses();

        // You need to pass a valid argument to the 'AddCourseUser' method. 'hello' should be in quotes if it's a string.
        $coursesMethod->AddCourseUser('hello');
    }
}