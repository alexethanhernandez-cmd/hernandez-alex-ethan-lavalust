<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->call->view('student/home');
    }

    public function profile()
    {
        $student = [
            'student_id' => '2026-0001',
            'name'       => 'Alex Ethan Hernandez',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F5',
            'email'      => 'alexethanhernandez@gmail.com',
             'hobbies'      => 'PLaying Guitar, Basketball',
        ];

        $this->call->view('student/profile', $student);
    }
}