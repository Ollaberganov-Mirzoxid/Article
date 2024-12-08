<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // Admin paneli uchun asosiy sahifa
    }

    public function pendingArticles()
    {
        $articles = Article::where('is_approved', false)->get(); // Faqat tasdiqlanmagan maqolalarni oladi
        return view('admin.pending-articles', compact('articles'));
    }
    // app/Http/Controllers/AdminController.php

    public function approveArticle($id)
    {
        $article = Article::findOrFail($id);
        $article->is_approved = true;
        $article->save();

        return redirect()->route('admin.pendingArticles')->with('success', 'Maqola tasdiqlandi');
    }
}
