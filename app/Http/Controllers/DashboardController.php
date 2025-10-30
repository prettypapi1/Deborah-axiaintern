<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function superAdmin()
    {
        return view('roles.super-admin');
    }

    public function schoolAdmin()
    {
        return view('roles.school-admin');
    }

    public function teacher()
    {
        return view('roles.teacher');
    }

    public function student()
    {
        return view('roles.student');
    }

    public function parent()
    {
        return view('roles.parent');
    }

    public function bursar()
    {
        return view('roles.bursar');
    }

    public function systemSettings()
    {
        return view('super-admin.system-settings');
    }

    public function manageUsers()
    {
        return view('school-admin.manage-users');
    }

    public function manageClasses()
    {
        return view('teacher.manage-classes');
    }

    public function myGrades()
    {
        return view('student.my-grades');
    }

    public function childGrades()
    {
        return view('parent.child-grades');
    }

    public function managePayments()
    {
        return view('bursar.manage-payments');
    }
}