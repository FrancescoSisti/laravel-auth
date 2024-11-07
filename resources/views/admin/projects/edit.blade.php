@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ __('Edit Project') }}</span>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary btn-sm">Back to Projects</a>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $project->description) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="url" class="form-label">Project URL</label>
                            <input type="url" class="form-control" id="url" name="url" value="{{ old('url', $project->url) }}">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Project Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if($project->image_path)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $project->image_path) }}" alt="Current project image" class="img-thumbnail" style="max-height: 100px">
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="github_url" class="form-label">GitHub URL</label>
                            <input type="url" class="form-control" id="github_url" name="github_url" value="{{ old('github_url', $project->github_url) }}">
                        </div>

                        <div class="mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $project->start_date) }}">
                        </div>

                        <div class="mb-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $project->end_date) }}">
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="draft" {{ old('status', $project->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="in_progress" {{ old('status', $project->status) == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="completed" {{ old('status', $project->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $project->category) }}">
                        </div>

                        <div class="mb-3">
                            <label for="technologies" class="form-label">Technologies</label>
                            <input type="text" class="form-control" id="technologies" name="technologies" value="{{ old('technologies', is_array($project->technologies) ? implode(', ', $project->technologies) : $project->technologies) }}">
                            <small class="form-text text-muted">Separate multiple technologies with commas</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
