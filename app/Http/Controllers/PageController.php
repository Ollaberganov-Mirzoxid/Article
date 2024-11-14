<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Conference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //Asosiy sahifani ko'rsatish
    public function index()
    {
        // Eng so'nggi Anjumanni olish
        $latestConference = Conference::latest()->first();

        // So'nggi Anjumandan keyingi 4 ta Anjumanni olish
        $nextConference = Conference::latest()->skip(1)->take(4)->get();

        // Eng so'nggi 2ta maqolani olish
        $articles = Article::latest()->take(2)->get();

        return view('index')->with('articles', $articles)
                                ->with('latestConference', $latestConference)
                                ->with('nextConference', $nextConference);;
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
