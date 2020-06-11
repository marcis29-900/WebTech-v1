@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tape section</title>
  </head>
  <body>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-tapes">
                    @lang('tapes.tape_head')
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <script>
                    function showDesc() {
                      document.getElementById("demo").innerHTML = "All users who have this tape have been notified!";
                    }
                    </script>
                    <script>
                    function showDesc2() {
                      document.getElementById("demo2").innerHTML = "All users who have this tape have been notified!";
                    }
                    </script>

                    <div style="margin-bottom: 200px; text-align: center;" class="row">
                            <div class="col-md-4">AWGE DVD VOL.1
                              <p></p>
                              <img src="img/awge1.png" alt="AWGE DVD VOL. 1" width="250px" height="250px">
                              <p></p>
                              <button type="button" class="btn btn-outline-danger btn-lg" onclick="showDesc()">@lang('tapes.order_menu')</button>
                              <p style="font-size: 80%; color: red;" id="demo"></p>
                            </div>
                            <div class="col-md-4">AWGE DVD VOL.2
                              <p></p>
                                <img src="img/awge2.png" alt="AWGE DVD VOL. 1" width="250px" height="250px">
                                <p></p>
                                <button type="button" class="btn btn-outline-danger btn-lg" onclick="showDesc2()">@lang('tapes.order_menu')</button>
                                <p style="font-size: 80%; color: red;" id="demo2"></p>
                            </div>
                            <div class="col-md-4">AWGE DVD VOL.3
                                <p></p>
                                @lang('tapes.coming_soon')
                                <p></p>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
