<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('pages.main');
    }

    public function people(){
        return view('pages.people');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function ongoing(){
        return view('pages.ongoing');
    }

    public function complete(){
        return view('pages.complete');
    }

    public function journals(){
        return view('pages.journals');
    }

    public function conferences(){
        return view('pages.conferences');
    }

    public function awards(){
        return view('pages.awards');
    }

    public function intellectual(){
        return view('pages.intellectual');
    }

    public function commerce(){
        return view('pages.commerce');
    }

    public function director(){
        return view('pages.director');
    }

    public function phd(){
        return view('pages.phd');
    }

    public function interns(){
        return view('pages.interns');
    }

    public function alumni(){
        return view('pages.alumni');
    }

    public function news(){
        return view('pages.news');
    }

    public function archive(){
        return view('pages.archive');
    }

    public function researcher(){
        return view('pages.researcher');
    }

}
