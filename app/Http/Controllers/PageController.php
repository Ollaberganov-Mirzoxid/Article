<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Asosiy sahifani ko'rsatish
    public function index()
    {
        return view('index');
    }

        //Ilmiy-Amaliy Anjumanlar sahifasini ko'rsatish
    public function conferences()
    {
        return view('pages.conferences');
    }

    //Maqolalar sahifasini ko'rsatish
    public function articles()
    {
        return view('pages.articles');
    }

    //Maqolalar sahifasini ko'rsatish
    public function about()
    {
        return view('pages.about');
    }
}
