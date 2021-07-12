@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @auth
                    @if(Auth::user()->role == 'admin')
                    <h5>Registred Users:</h5>
                    <ul>
                        @foreach ($users as $user)
                        <li class="row">{{$user->name}}
                            <form action="/users/{{$user->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="border-0 ml-2 badge badge-danger">Delete</button>
                            </form>
                        </li>
                        @endforeach

                    </ul>
                    @endif
                    @endauth

                    <h5><a href="/myquestions"> Your Questions -></a></h5>
                    <h5><a href="/myresponses"> Your Responses -></a></h5>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection