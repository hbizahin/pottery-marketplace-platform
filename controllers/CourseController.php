<?php

require_once 'models/Course.php';

class CourseController
{
    public function index()
    {
        $model = new Course();
        $courses = $model->getCourses();

        include 'views/programs.php';
    }
}