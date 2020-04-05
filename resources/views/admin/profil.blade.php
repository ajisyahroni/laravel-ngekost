@extends('layouts.master')

@section('content')
<div id="content">
    <div class="container-fluid">
    <h2 class="h3 mb-0 text-gray-800">Profil Admin</h2>
    <br>
        <div class="card " style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="{{('/sbadmin/img/ryan_logo.jpg') }}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection