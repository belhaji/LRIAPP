<?php

namespace App\Http\Controllers;

use App\Domaine;
use App\Experience;
use App\Formation;
use App\InfoPerso;
use App\Member;
use App\Post;
use App\Project;
use App\Publication;
use App\SousDomaine;
use Illuminate\Http\Request;

class DoctorantController extends Controller
{
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
        return redirect('/doct/post/list');
    }

    public function listPosts()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $posts = $user->posts()->get();
        return view('doct.post.list', ['posts' => $posts]);
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
        return redirect('/doct/post/list');
    }

    public function membreList()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $membres = Member::all();
        return view('doct.membre.list', ['membres' => $membres]);
    }

    public function infoPerso()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        return view('doct.info.show', ['user' => $user]);
    }

    public function infoPersoEditer(Request $request)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        if ($request->isMethod('GET')) {
            return view('doct.info.edit', ['user' => $user]);
        } else {
            $info = $user->infoPerso()->first();
            if (!$info) {
                $info = new InfoPerso($request->all());
            } else {
                $info->fill($request->all());
            }
            $info->member()->associate($user);
            $info->save();

            return redirect('/doct/info');
        }

    }

    public function formation(Request $request)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        if ($request->isMethod('POST')) {
            $formation = new Formation($request->all());
            $formation->member()->associate($user);
            $formation->save();
        }
        $formations = $user->formations()->get();
        return view('doct.formation.show', ['formations' => $formations]);

    }

    public function formationDelete($id)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $formation = Formation::find($id);
        if ($formation) {
            $formation->delete();
        }
        return redirect('/doct/formation');
    }


    public function experience(Request $request)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        if ($request->isMethod('POST')) {
            $experience = new Experience($request->all());
            $experience->member()->associate($user);
            $experience->save();
        }
        $experiences = $user->experiences()->get();
        return view('doct.experience.show', ['experiences' => $experiences]);

    }

    public function experienceDelete($id)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $exp = Experience::find($id);
        if ($exp) {
            $exp->delete();
        }
        return redirect('/doct/experience');
    }


    public function publication(Request $request)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        if ($request->isMethod('POST')) {
            $publication = new Publication($request->all());
            $publication->member()->associate($user);
            $publication->save();
        }
        $publications = $user->publications()->get();
        return view('doct.pub.show', ['publications' => $publications]);

    }

    public function publicationDelete($id)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $publication = Publication::find($id);
        if ($publication) {
            $publication->delete();
        }
        return redirect('/doct/pub');
    }

    public function projet(Request $request)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        if ($request->isMethod('POST')) {
            $projet = new Project([
                'titre' => $request->input('titre'),
                'date_debut' => $request->input('date_debut'),
                'date_fin' => $request->input('date_fin')
            ]);
            $domaine = $request->input('domaine');
            if (!$domaine) {
                $domaine = new Domaine([
                    'titre' => $request->input('domaine_text')
                ]);
                $domaine->save();
            } else {
                $domaine = Domaine::find($domaine);
            }

            $sdomaine = $request->input('sous_domain');
            if (!$sdomaine) {
                $sdomaine = new SousDomaine([
                    'titre' => $request->input('sdomaine'),
                    'sous_domaine_id' => $domaine->id
                ]);
                $sdomaine->save();
            } else {
                $sdomaine = SousDomaine::find($sdomaine);
            }
            $projet->member()->associate($user);
            $projet->sous_domaine()->associate($sdomaine);
            $projet->save();

        }
        $projets = $user->projects()->get();
        return view('doct.projet.show',
            [
                'projets' => $projets,
                'domaines' => Domaine::all(),
                'sdomaines' => SousDomaine::all()
            ]
        );

    }

    public function projetDelete($id)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $projet = Project::find($id);
        if ($projet) {
            $projet->delete();
        }
        return redirect('/doct/projet');
    }


    public function cv()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $member = Member::find($user->id);
        return view('doct.cv', ['user' => $member]);
    }


}
