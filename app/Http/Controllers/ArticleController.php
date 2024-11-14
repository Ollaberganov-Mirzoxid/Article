<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('pages.articles.articles')->with('articles', $articles);
    }

    public function show(Article $article)
    {
        return view('pages.articles.article_show')->with([
            'article' => $article,
            'recent_articles' => Article::latest()->get()->except($article->id)->take(5)
            /* 
            1.recent_articles - bu oxirgi maqolalarni ko'rsatish uchun o'zgaruvchi
            2.Article - bu Model
            3.latest - bu eng oxirgilari bo'yicha saralash
            4.get - bazadan ma'lumotlarni olib kel
            5.except - dan tashqari ya'ni ($article->id) shu idli maqolani olma
            6.take(5) - 5 tasini olmoq 
            */
        ]);
    }

    public function create_articles()
    {
        return view('pages.articles.create_articles');
    }

    public function store(Request $request)
    {
        $article = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $request->photo ?? 'default_photo.jpg',
            'file' => $request->file ?? 'default_photo.jpg',
        ]);

        return redirect()->route('articles');
    }
}
