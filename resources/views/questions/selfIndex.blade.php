@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row " style="gap:10px;">
        @foreach ($questions as $question)
        <div class="card col-4 p-0">
            <div class="card-header">
                {{$question->title}}
            </div>
            <div class="card-body">
                <p class="card-text">{{$question->qsn}}</p>
            </div>
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                {{$question->created_at}}

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection