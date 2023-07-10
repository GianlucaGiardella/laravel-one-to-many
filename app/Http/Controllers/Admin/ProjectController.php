<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    private $validations = [
        'title' => 'required|string|min:5|max:100',
        'type_id' => 'required|integer|exists:types,id',
        'url_image' => 'required|url|max:400',
        'content' => 'required|string',
    ];

    private $validationMessages = [
        'required' => 'Il campo :attribute è richiesto.',
        'exists' => 'Valore non valido',
        'url' => 'Il campo deve essere un url valido',
        'min' => 'Il campo :attribute deve avere almeno :min caratteri',
        'max' => 'Il campo :attribute non deve superare i :max caratteri.',
    ];

    public function index()
    {
        $projects = Project::paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $categories = Project::all();

        return view('admin.projects.create', compact('types'));
    }

    public function store(Request $request)
    {
        $request->validate($this->validations, $this->validationMessages);

        $data = $request->all();

        $newProject = new Project();
        $newProject->title = $data['title'];
        $newProject->type_id = $data['type_id'];
        $newProject->url_image = $data['url_image'];
        $newProject->content = $data['content'];
        $newProject->save();

        return to_route('admin.projects.show', ['project' => $newProject]);
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $categories = Type::all();

        return view('admin.projects.edit', compact('project', 'types'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate($this->validations, $this->validationMessages);

        $data = $request->all();

        $project->title = $data['title'];
        $project->type_id = $data['type_id'];
        $project->url_image = $data['url_image'];
        $project->content = $data['content'];
        $project->update();

        return to_route('admin.projects.show', ['project' => $project]);
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return to_route('admin.projects.index')->with('delete_success', $project);
    }
}