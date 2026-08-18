<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            echo "Access Denied: You must be a verified student to view this profile. (Alex Ethan Hernandez's custom access rule)";
            exit();
        }

        return $next();
    }
}