@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-tapes">
                    @lang('snippets.snippets_head')
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="margin-bottom: 80px; text-align: center; justify-content: center;" class="row">
                        <iframe width="80%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/581422593&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/downtime" title="downtime" target="_blank" style="color: #cccccc; text-decoration: none;"></a> · <a href="https://soundcloud.com/downtime/absence" title="absence" target="_blank" style="color: #cccccc; text-decoration: none;"></a></div>
                    </div>
                    <div style="margin-bottom: 80px; text-align: center; justify-content: center;" class="row">
                        <iframe width="80%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/561089520&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/downtime" title="downtime" target="_blank" style="color: #cccccc; text-decoration: none;"></a> · <a href="https://soundcloud.com/downtime/blossom" title="blossom (w/ nitrous)" target="_blank" style="color: #cccccc; text-decoration: none;"></a></div>
                    </div>
                    <div style="margin-bottom: 80px; text-align: center; justify-content: center;" class="row">
                        <iframe width="80%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/736858987&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/downtime" title="downtime" target="_blank" style="color: #cccccc; text-decoration: none;"></a> · <a href="https://soundcloud.com/downtime/2020rot" title="2020!" target="_blank" style="color: #cccccc; text-decoration: none;"></a></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
