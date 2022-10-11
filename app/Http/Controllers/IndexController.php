<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    return view('index.index');
    }
    public function About()
    {
    return view('index.about');
    }
    public function blog()
    {
    return view('index.blog');
    }
    public function quiz()
    {
    return view('index.quiz');
    }
    public function courses()
    {
    return view('index.courses');
    }
    public function contact()
    {
    return view('index.contact');
    }
    public function login()
    {
    return view('auth.login');
    }
    public function register()
    {
    return view('auth.register');
    }
}
