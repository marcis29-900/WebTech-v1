@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>{{$post->main_title}}</h1>
                    <h3>INFO:</h3>
                    <br>
                    <p>{{$post->type}}</p>
                    <p>{{$post->folder_path}}</p>
                    <p>{{$post->created_at}}</p>

                    @if (Auth::user()->permissions == 1)
                        <a style="font-size: 70%;" href="/posts/{{$post->id}}/edit" class="btn btn-light">edit</a>
                        {!! Form::open(['action' => ['FileController@destroy', $post->id], 'method' => 'POST']) !!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('delete', ['class' => 'btn btn-light'])}}
                        {!! Form::close()!!}
                    @else
                    @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
