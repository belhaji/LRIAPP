<?php

namespace App\Http\Controllers;

use App\Event;
use App\InfoGen;
use App\Member;
use App\Message;
use App\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addEvent(Request $request)
    {
        $title = $request->input('titre');
        $description = $request->input('description');
        $lieux = $request->input('lieux');
        $date = $request->input('date');
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $event = new Event([
            'titre' => $title,
            'description' => $description,
            'lieux' => $lieux,
            'date' => $date,
        ]);
        $event->member()->associate($user);
        $event->save();
        return redirect('/admin/evenement/list');
    }

    public function listEvents()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $events = $user->events()->get();
        return view('admin.event.list', ['events' => $events]);
    }

    public function validerEvents($id = 0)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        if ($id == 0) {
            $events = $user->events()->where('published', 0)->get();
            return view('admin.event.valider', ['events' => $events]);
        }
        $event = Event::find($id);
        if (!$event) {
            return redirect('/');
        }
        $event->published = 1;
        $event->save();
        return redirect('/admin/evenement/valider');
    }

    public function validerPosts($id = 0)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        if ($id == 0) {
            $posts = Post::where('published', 0)->get();
            return view('admin.post.valider', ['posts' => $posts]);
        }
        $post = Post::find($id);
        if (!$post) {
            return redirect('/');
        }
        $post->published = 1;
        $post->save();
        return redirect('/admin/post/valider');
    }


    public function deleteEvent($id)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $event = Event::find($id);
        if (!$event || $event->member_id != $user->id) {
            return redirect('/');
        }
        $event->delete();
        return redirect('/admin/evenement/list');
    }

    public function addPost(Request $request)
    {
        $title = $request->input('titre');
        $contenu = $request->input('contenu');
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $post = new Post([
            'titre' => $title,
            'contenu' => $contenu
        ]);
        $post->member()->associate($user);
        $post->save();
        return redirect('/admin/post/list');
    }

    public function listPosts()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $posts = $user->posts()->get();
        return view('admin.post.list', ['posts' => $posts]);
    }

    public function deletePost($id)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $post = Post::find($id);
        if (!$post || $post->member_id != $user->id) {
            return redirect('/');
        }
        $post->delete();
        return redirect('/admin/post/list');
    }

    public function validerMembreList()
    {
        $members = Member::where('active', 0)->get();
        return view('admin.member.list', ['members' => $members]);
    }

    public function membreList()
    {
        $members = Member::all();
        return view('admin.member.list2', ['members' => $members]);
    }

    public function validerMembre($id = 0)
    {
        if ($id) {
            $m = Member::find($id);
            if ($m) {
                $m->active = 1;
                $m->save();
            }
        }
        return redirect('/admin/membre/valider');
    }

    public function messages(Request $request)
    {
        if ($request->isMethod('POST')) {
            $msg = new Message($request->all());
            $msg->save();
            return redirect('/');
        }
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $msgs = Message::all();
        return view('admin.message.list', ['messages' => $msgs]);
    }


    public function changerPassword(Request $request)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }

        if ($request->isMethod('POST')) {
            $new = $request->input('password');
            $user->password = sha1($new);
            $user->save();
            session()->flash('success', 'a été changé avec succés');
        }
        return view('admin.member.password');

    }

    public function infosite(Request $request)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }

        $info = InfoGen::first();
        if (!$info){
            $info = new InfoGen();
        }
        if ($request->isMethod('POST')) {
            $info->fill($request->all());
            $info->save();
            session()->flash('success', 'les informations a été enregistré avec succés');
        }
        return view('admin.site.info', [
            'info' => $info
        ]);

    }
}
