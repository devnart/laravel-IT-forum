@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        @foreach ($questions as $question)

        <div class="card col-4 p-0">
            <a href="/questions/{{$question->id}}">
                <div class="card-header">
                    {{$question->title}}
                </div>
            </a>

            <div class="card-body">
                <p class="card-text">{{$question->qsn}}</p>
            </div>
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                {{$question->created_at}}
                @auth
                @if(Auth::user()->role == 'admin')
                <form action="/questions/{{$question->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
                @endif
                @endauth
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection