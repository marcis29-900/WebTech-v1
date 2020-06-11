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
                    <h2>submit a request:</h2>
                    <br>
                    <span>type: </span>
                    {!! Form::open(['action' => 'FileController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{ Form::select('type', array('drum kit' => 'drumkit', 'video asset' => 'video asset'), null,  ['class' => 'form-control'])}}
                        <br>
                        {{ Form::label('main title', 'main title')}}
                            {{Form::text('main_title','',['class' => 'form-control'])}}

                        {{ Form::label('preferred upload site', 'preferred upload site')}}
                            {{ Form::select('folder_path', array('gdrive' => 'gdrive', 'mediafire' => 'mediafire', 'zippyshare' => 'zippyshare'), null, ['placeholder' => ' - ', 'class' => 'form-control'])}}
                        <br>
                        {{Form::submit('submit request', ['class' => 'btn btn-outline-danger'])}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
