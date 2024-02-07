@extends('layouts.admin')

@section('content')
<a class="btn btn-outline-success mt-3" href="{{ route('admin.projects.create') }}" role="button">Add Project</a>
    <div class="container mt-5">
        <table class="table table-striped w-50">
            <thead>
                <tr>
                    <th scope="col" class="w-75">Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}" role="button" class="btn btn-outline-primary btn-sm"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.projects.edit', $project) }}" role="button" class="btn btn-outline-success btn-sm"><i
                                    class="fa-solid fa-pencil"></i></a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                            <button type="submit" role="button" class="btn btn-outline-danger btn-sm"><i
                                    class="fa-solid fa-trash"></i></button>
                                    </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
