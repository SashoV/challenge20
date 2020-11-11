<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $title = "Home";
        $small = "A Blog Theme By Start Bootstrap";
        $backgroundPhoto = "/img/home-bg.jpg";
        return view('index', compact('title', 'small', 'backgroundPhoto'));
    }

    public function about()
    {
        $title = "About Me";
        $small = "This is what i do";
        $backgroundPhoto = "/img/about-bg.jpg";
        return view('aboutme', compact('title', 'small', 'backgroundPhoto'));
    }

    public function sample()
    {
        $title = "Man must explore, and this is exploration at it's greatest";
        $subtitle = "Problems look mighty small from 150 miles up";
        $small = "Posted by Start Bootstrap on August 24, 2018";
        $backgroundPhoto = "/img/post-sample-image.jpg";
        return view('sample', compact('title', 'subtitle', 'small', 'backgroundPhoto'));
    }

    public function contact()
    {
        $title = "Contact Us";
        $small = "Have questions? I have answers!";
        $backgroundPhoto = "/img/contact-bg.jpg";
        return view('contact', compact('title', 'small', 'backgroundPhoto'));
    }
}
