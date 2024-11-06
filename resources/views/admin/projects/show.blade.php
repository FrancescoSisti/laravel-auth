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
