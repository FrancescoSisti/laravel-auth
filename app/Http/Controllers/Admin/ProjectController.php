<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('layouts.admin', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:projects|max:150',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048'
        ]);

        $data['slug'] = Project::generateSlug($data['title']);

        if ($request->hasFile('image')) {
            $data['image'] = Storage::put('project_images', $request->image);
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('message', 'Progetto creato con successo!');
    }

    // Altri metodi del resource controller...
}