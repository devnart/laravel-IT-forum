@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Responses</h2>
    <div class="row " style="gap:10px;">
        @foreach ($responses as $response)
        <div class="card col-4 p-0">
            <div class="card-header">
                {{$response->rsp}}
            </div>
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                {{$response->created_at}}

                <a href="/questions/{{$response->question_id}}" class="btn btn-primary">full question</a>

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection