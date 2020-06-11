@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-tapes">
                    user created download requests sorted by newest first
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($posts) > 0)
                    @foreach ($posts as $post)
                                <div class="card p-2 mt-2 mb-2">
                                    <h3 style="color: #ff1a1a;"><a href="/posts/{{$post->id}}">{{$post->main_title}}</a></h3>
                                    <p style="font-size: 80%;"> <span style="color: #990000;" >type</span>: {{$post->type}} & <span style="color: #990000;" >preferred upload site</span>: {{$post->folder_path}}</p>

                                    <p style="font-size: 65%;">{{$post->created_at}}</p>

                                </div>
                    @endforeach
                    @else
                        <p>no entries found ;(</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
