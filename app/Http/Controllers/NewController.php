<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    function index()
    {
        return view('new.index');
    }

    function about()
    {
        return view('new.about');
    }

    function blog()
    {
        return view('new.blog');
    }

    function booking()
    {
        return view('new.booking');
    }

    function contact()
    {
        return view('new.contact');
    }

    function destination()
    {
        return view('new.destination');
    }

    function gallery()
    {
        return view('new.gallery');
    }

    function guides()
    {
        return view('new.guides');
    }

    function packages()
    {
        return view('new.packages');
    }

    function services()
    {
        return view('new.services');
    }

    function testimonial()
    {
        return view('new.testimonial');
    }

    function tour()
    {
        return view('new.tour');
    }
}
