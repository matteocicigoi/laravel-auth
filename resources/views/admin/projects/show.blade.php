@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <ul>
            <li>Nome: {{ $project->name }}</li>
            <li>Slug: {{ $project->slug }}</li>
        </ul>
    </div>
@endsection
