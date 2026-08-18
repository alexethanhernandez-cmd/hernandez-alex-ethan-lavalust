<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['student_access'] = true;

        $data['page_title'] = 'Alex Ethan\'s Student Portal';
        $data['name'] = 'Alex Ethan Hernandez';
        $this->call->view('student/home', $data);
    }

    public function profile()
    {

            $student = [
                // Identity / header
                'student_id'    => '2024-00001',
                'name'          => 'Alex Ethan Hernandez',
                'first_name'    => 'Alex Ethan',
                'last_name'     => 'Hernandez',

                // Academic Information
                'program'       => 'BSIT',
                'course'        => 'BS Information Technology',
                'year'          => '3rd Year',
                'section'       => 'F5',
                'school'        => 'Mindoro State University',
                'campus'        => 'Calapan City Campus',
                'college'       => 'College of Computer Studies',
                'academic_year' => '2026-2027',
                'semester'      => '1st Semester',
                'status'        => 'Regular Student',

                'contact_number'=> '0917-123-4567',
                'address'       => 'Zone 4, Socorro',
                'email'         => 'alexethanhernandez@gmail.com',
                'hobbies'       => 'Playing Instruments, Basketball, Gaming, RoadTrip'
            ];

            $this->call->view('student/profile', $student);
        
    }
}