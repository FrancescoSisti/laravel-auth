@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ __('Project Details') }}</span>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary btn-sm">Back to Projects</a>
                </div>

                <div class="card-body">
                    <h2>{{ $project->title }}</h2>

                    <div class="mt-4">
                        <h5>Description:</h5>
                        <p>{{ $project->description }}</p>
                    </div>

                    @if($project->url)
                    <div class="mt-4">
                        <h5>Project URL:</h5>
                        <a href="{{ $project->url }}" target="_blank">{{ $project->url }}</a>
                    </div>
                    @endif

                    @if($project->image_path)
                    <div class="mt-4">
                        <h5>Project Image:</h5>
                        <img src="{{ asset('storage/' . $project->image_path) }}" alt="{{ $project->title }}" class="img-fluid">
                    </div>
                    @endif

                    @if($project->github_url)
                    <div class="mt-4">
                        <h5>GitHub URL:</h5>
                        <a href="{{ $project->github_url }}" target="_blank">{{ $project->github_url }}</a>
                    </div>
                    @endif

                    @if($project->start_date)
                    <div class="mt-4">
                        <h5>Start Date:</h5>
                        <p>{{ \Carbon\Carbon::parse($project->start_date)->format('d/m/Y') }}</p>
                    </div>
                    @endif

                    @if($project->end_date)
                    <div class="mt-4">
                        <h5>End Date:</h5>
                        <p>{{ \Carbon\Carbon::parse($project->end_date)->format('d/m/Y') }}</p>
                    </div>
                    @endif

                    <div class="mt-4">
                        <h5>Status:</h5>
                        <p class="text-capitalize">{{ str_replace('_', ' ', $project->status) }}</p>
                    </div>

                    @if($project->category)
                    <div class="mt-4">
                        <h5>Category:</h5>
                        <p>{{ $project->category }}</p>
                    </div>
                    @endif

                    @if($project->technologies)
                    <div class="mt-4">
                        <h5>Technologies:</h5>
                        <p>{{ implode(', ', json_decode($project->technologies, true) ?? []) }}</p>
                    </div>
                    @endif

                    <div class="mt-4">
                        <h5>Created at:</h5>
                        <p>{{ $project->created_at->format('d/m/Y H:i') }}</p>
                    </div>

                    <div class="mt-4">
                        <h5>Last updated:</h5>
                        <p>{{ $project->updated_at->format('d/m/Y H:i') }}</p>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Edit Project</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this project?')">Delete Project</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
