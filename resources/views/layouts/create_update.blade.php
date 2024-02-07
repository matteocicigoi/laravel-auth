@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center m-5">@yield('title')</h1>
        @if ($errors->any())
            <div class="alert  alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="@yield('route')" method="POST">
            @csrf
            @yield('method')
            <div class="row g-3">
                <div class="col-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="@if (isset($project)) {{ old('name', $project->name) }}@else{{ old('name') }} @endif"
                        required>
                </div>
                <div class="col-6">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug"
                        value="@if (isset($project)) {{ old('slug', $project->slug) }}@else{{ old('slug') }} @endif">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
