<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {


        return Inertia('Home');
    }
    public function About()
    {
        // $data = [
        //     'name' => 'veasna',
        //     'age' => 20,
        //     'role' => 'student',
        // ];
        return Inertia('About');
    }
}
