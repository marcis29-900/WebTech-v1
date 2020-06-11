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
                    <div class="downloads">
                      <p>Drumkit files:</p>
                        <a style="font-size: 90%;" href="https://drive.google.com/file/d/1F-y9Laluvg7Bs3sgi8eGJAA2cYXPDGVS/view" role="button" target="_blank" type="button" class="btn btn-outline-danger btn-block">Ronny J Drumkit</a>
                        <a style="font-size: 90%;" href="https://drive.google.com/file/d/16x5xNLJ9TSxcYgh52qN0JCX7u7eS1k0-/view" role="button" target="_blank" type="button" class="btn btn-outline-danger btn-block">Wondagurl & Eestbound Drumkit</a>
                        <a style="font-size: 90%;" href="https://drive.google.com/file/d/1PJu7HbcugGE3k2wrkmeATBwaVdW1lobD/view" role="button" target="_blank" type="button" class="btn btn-outline-danger btn-block">CashmoneyAP Drumkit</a>
                        <a style="font-size: 90%;" href="#" role="button" type="button" class="btn btn-danger btn-primary btn-block disabled">Nick Mira Drumkit [REMOVED DUE TO COPYRIGHT INFRINGEMENT]</a>
                      <p>Video editing files:</p>
                        <a style="font-size: 90%;" href="https://www.mediafire.com/file/xsq0fvca9nss516/Max_Novak_VHS_Overlay_Pack.zip/file" role="button" target="_blank" type="button" class="btn btn-outline-danger btn-block">Max Novak's VHS overlay pack</a>
                        <a style="font-size: 90%;" href="https://mega.nz/#!6Y9FXYxK!NWcqLhaHJWEkoVyU9uLGjlQnHv5SjJgD_7l4yx-XlC0" role="button" target="_blank" type="button" class="btn btn-outline-danger btn-block">Sapphire 11</a>
                        <a style="font-size: 90%;" href="https://mega.nz/file/TYcjnSJI#1TqE6mZuUspi-HK-eCN4VI5fRR8AD797vsjYhVrE5xk" role="button" target="_blank" type="button" class="btn btn-outline-danger btn-block">Pixel Sorter 2.0</a>
                        <a style="font-size: 90%;" href="https://mega.nz/#!iYh11Cjb!FDz3DPiLk_SFHxU6ZfwYR6_0X1l5h9GYBH46Fw1wKg0" role="button" target="_blank" type="button" class="btn btn-outline-danger btn-block">Datamosh 1.1.5</a>
                    </div>
                    <br>
                    <br>

                    <div class="container">
                      <div class="row">
                        <div class="col-sm">
                          <a style="font-size: 90%;" href="http://127.0.0.1:8000/link-submission" role="button" type="button" class="btn btn-outline-dark btn-sm">+ submit request</a>
                        </div>
                        <div class="col-sm">
                          <a style="font-size: 90%; float: right;" href="http://127.0.0.1:8000/posts" role="button" type="button" class="btn btn-outline-dark btn-sm">view submitted</a>
                        </div>
                      </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>


@endsection
