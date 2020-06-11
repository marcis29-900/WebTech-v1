@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-tapes">
                    @lang('about.about_head')
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="justify-content: center; text-align: center; font-size: 80%;">
                        <p>@lang('about.first')</p>
                        <p></p>
                        <p>@lang('about.second')</p>
                        <p></p>
                        <p>@lang('about.third')</p>
                        <p></p>
                        <h1>@lang('about.fourth')</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
