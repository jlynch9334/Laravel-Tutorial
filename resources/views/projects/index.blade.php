@extends('layout')

@section('content')

<h1 class="title"> Projects </h1>
    
    <div class="control">
        <ul>
            @foreach ($projects as $project)
                <li>
                    <a href="/projects/{{ $project->id }}">
                        {{$project->title}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="control">
            <a href="/projects/create">
                <button type="submit" class="button is-link">Create a Project!</button>
            </a>
    </div>

@endsection