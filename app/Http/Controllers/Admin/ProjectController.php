<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        // Gestione dell'upload dell'immagine
        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('projects', 'public');
        }

        // Gestione delle technologies come JSON
        if (isset($data['technologies'])) {
            $data['technologies'] = json_encode(array_map('trim', explode(',', $data['technologies'])));
        }

        $project = Project::create($data);

        return redirect()->route('admin.projects.show', $project->id)
            ->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();

        // Gestione dell'upload dell'immagine
        if ($request->hasFile('image')) {
            // Elimina la vecchia immagine se esiste
            if ($project->image_path) {
                Storage::disk('public')->delete($project->image_path);
            }
            $data['image_path'] = $request->file('image')->store('projects', 'public');
        }

        // Gestione delle technologies come JSON
        if (isset($data['technologies'])) {
            $data['technologies'] = json_encode(array_map('trim', explode(',', $data['technologies'])));
        }

        $project->update($data);

        return redirect()->route('admin.projects.show', $project->id)
            ->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully');
    }
}
