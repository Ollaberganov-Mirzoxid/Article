<?php

namespace App\Http\Controllers;


use App\Models\Conference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConferenceController extends Controller
{
    public function index()
    {
        $conference = Conference::all();

        return view('pages.conferences.conferences')->with('conferences', $conference);
    }

    public function show(Conference $conference)
    {
        return view('pages.conferences.conference_show')->with([
            'conference' => $conference,
            'recent_conferences' => Conference::latest()->get()->except($conference->id)->take(5)
            /* 
            1.recent_conferences - bu oxirgi Anjumanlarni ko'rsatish uchun o'zgaruvchi
            2.Conference - bu Model
            3.latest - bu eng oxirgilari bo'yicha saralash
            4.get - bazadan ma'lumotlarni olib kel
            5.except - dan tashqari ya'ni ($conference->id) shu idli Anjumanni olma
            6.take(5) - 5 tasini olmoq 
            */
        ]);
    }

    public function create_conferences()
    {
        return view('pages.conferences.create_conferences');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('photo1')) {
            $name1 = $request->file('photo1')->getClientOriginalName();
            $path1 = $request->file('photo1')->storeAs('conference-images', $name1);
        }
        if ($request->hasFile('photo2')) {
            $name2 = $request->file('photo2')->getClientOriginalName();
            $path2 = $request->file('photo2')->storeAs('conference-images', $name2);
        }
        if ($request->hasFile('photo3')) {
            $name3 = $request->file('photo3')->getClientOriginalName();
            $path3 = $request->file('photo3')->storeAs('conference-images', $name3);
        }

        $conference = Conference::create([
            'title' => $request->title,
            'photo1' => $path1 ?? null,
            'description1' => $request->description1,
            'photo2' => $path2 ?? null,
            'description2' => $request->description2,
            'photo3' => $path3 ?? null,
            'description3' => $request->description3,
        ]);

        return redirect()->route('conferences');
    }
}
