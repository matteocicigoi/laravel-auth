@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <ul>
                    @foreach ($projects as $element)
                        <li>{{ $element->name }}</li>
                    @endforeach
                </ul>
        </div>
    </div>
@endsection