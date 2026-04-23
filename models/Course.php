<?php

class Course
{
    public function getCourses()
    {
        return [
            [
                'title' => 'Wheel Basics',
                'duration' => '2 Days',
                'price' => 1500
            ],
            [
                'title' => 'Glazing Techniques',
                'duration' => '3 Days',
                'price' => 2000
            ],
            [
                'title' => 'Clay Sculpting',
                'duration' => '1 Day',
                'price' => 1000
            ]
        ];
    }
}