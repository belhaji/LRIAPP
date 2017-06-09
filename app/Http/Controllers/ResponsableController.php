<?php

namespace App\Http\Controllers;

use App\Domaine;
use App\Equipe;
use App\Event;
use App\Experience;
use App\Formation;
use App\InfoPerso;
use App\Member;
use App\Post;
use App\Project;
use App\Publication;
use App\SousDomaine;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{

    public function home(){
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }

        return view('resp.home', [
            'user' => $user
        ]);
    }

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
        return redirect('/resp/evenement/list');
    }

    public function listEvents()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $events = $user->events()->get();
        return view('resp.event.list', ['events' => $events]);
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
        return redirect('/resp/evenement/list');
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
        return redirect('/resp/post/list');
    }

    public function listPosts()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $posts = $user->posts()->get();
        return view('resp.post.list', ['posts' => $posts]);
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
        return redirect('/resp/post/list');
    }

    public function membreList()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $membres = Member::all();
        return view('resp.member.list', ['membres' => $membres]);
    }

    public function infoPerso()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        return view('resp.info.show', ['user' => $user]);
    }

    public function infoPersoEditer(Request $request)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        if ($request->isMethod('GET')) {
            return view('resp.info.edit', ['user' => $user]);
        } else {
            $info = $user->infoPerso()->first();
            if (!$info) {
                $info = new InfoPerso($request->all());
            } else {
                $info->fill($request->all());
            }
            $info->member()->associate($user);
            $info->save();

            return redirect('/resp/info');
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
        return view('resp.formation.show', ['formations' => $formations]);

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
        return redirect('/resp/formation');
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
        return view('resp.experience.show', ['experiences' => $experiences]);

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
        return redirect('/resp/experience');
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
        return view('resp.pub.show', ['publications' => $publications]);

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
        return redirect('/resp/pub');
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
                $sdomaine->domaine()->associate($domaine);
                $sdomaine->save();
            } else {
                $sdomaine = SousDomaine::find($sdomaine);
            }
            $projet->member()->associate($user);
            $projet->sous_domaine()->associate($sdomaine);
            $projet->save();

        }
        $projets = $user->projects()->get();
        return view('resp.projet.show',
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
        return redirect('/resp/projet');
    }


    public function validerMembreList()
    {
        $members = Member::where('active', 0)->get();
        return view('resp.member.valider', ['members' => $members]);
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
        return redirect('/resp/membres/valider');
    }

    public function cv()
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $member = Member::find($user->id);
        return view('resp.cv', ['user' => $member]);
    }


    public function equipe(Request $request)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        if ($request->isMethod('POST')) {
            $equipe = new Equipe($request->all());
            $equipe->responsable()->associate($user);
            $equipe->save();
        }
        $equipes = $user->equipes()->get();
        return view('resp.equipe.list', ['equipes' => $equipes]);
    }

    public function deleteEquipe($id = 0)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $equipe = Equipe::find($id);
        if ($equipe) {
            $equipe->delete();
        }
        return redirect('/resp/equipe');
    }

    public function voirEquipe($id = 0)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $equipe = Equipe::find($id);
        if (!$equipe) {
            return redirect('/resp');
        }
        return view('resp.equipe.show', ['equipe' => $equipe]);
    }

    public function addToEquipe($id = 0)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $equipe = Equipe::find($id);
        if (!$equipe) {
            return redirect('/resp');
        }
        return view('resp.equipe.add', ['equipe' => $equipe, 'members' => Member::where('role','doctorant')->get()]);
    }

    public function addMemberEquipe($id = 0, $memberId = 0)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $equipe = Equipe::find($id);
        $member = Member::find($memberId);
        if (!$equipe || !$member) {
            return redirect('/resp');
        }
        $member->equipe()->associate($equipe);
        $member->save();
        return redirect('/resp/equipe/' . $id);
    }

    public function deleteMemberEquipe($id = 0, $memberId = 0)
    {
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        $equipe = Equipe::find($id);
        $member = Member::find($memberId);
        if (!$equipe || !$member) {
            return redirect('/resp');
        }
        $member->equipe()->dissociate($equipe);
        $member->save();
        return redirect('/resp/equipe/' . $id);
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
        return view('resp.member.password');

    }


}
