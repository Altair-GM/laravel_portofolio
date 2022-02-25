<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $about = About::first();
        $skills = Skill::first();
        $contact = Contact::first();
        $works = Work::all();
        return view("pages.home", compact('about', 'skills', 'works', 'contact'));
    }

}

