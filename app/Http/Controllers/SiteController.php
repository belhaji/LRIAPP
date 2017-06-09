<?php

namespace App\Http\Controllers;

use App\Domaine;
use App\Equipe;
use App\Event;
use App\InfoGen;
use App\InfoPerso;
use App\Member;
use App\Post;
use App\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $slides = Slider::all();

        $events = Event::where('published', 1)
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();
        $posts = Post::where('published', 1)
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();
        return view('site.home', [
            'events' => $events,
            'posts' => $posts,
            'slides' => $slides
        ]);
    }

    public function events()
    {
        $events = Event::where('published', 1)->get();
        return view('site.events', [
            'events' => $events
        ]);
    }

    public function posts()
    {
        $posts = Post::where('published', 1)->get();
        return view('site.posts', [
            'posts' => $posts
        ]);
    }

    public function presentation()
    {
        $equipes = Equipe::all();
        $info = InfoGen::first();
        return view('site.presentation', [
            'equipes' => $equipes,
            'info' => $info
        ]);
    }

    public function directeurs()
    {
        $resps = Member::where('role', 'responsable')->get();
        return view('site.responsable', ['responsables' => $resps]);
    }

    public function membres()
    {
        $membres = Member::where('role', 'responsable')->get();
        return view('site.membre', ['membres' => $membres]);
    }

    public function themes()
    {
        $domaine = Domaine::all();
        return view('site.theme', [
            'domaines' => $domaine
        ]);
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function recherche(Request $request)
    {
        $q = $request->input('q');
        $infos = InfoPerso::where('nom', 'like', "%$q%")
            ->orWhere('prenom', 'like', "%$q%")
            ->orWhere('bio', 'like', "%$q%")
            ->orWhere('adresse', 'like', "%$q%")
            ->get();
        $events = Event::where('titre', 'like', "%$q%")
            ->orWhere('description', 'like', "%$q%")
            ->get();
        $posts = Post::where('titre', 'like', "%$q%")
            ->orWhere('contenu', 'like', "%$q%")
            ->get();
        return view('site.recherche', [
            'members' => $infos,
            'events' => $events,
            'posts' => $posts
        ]);
    }


}
