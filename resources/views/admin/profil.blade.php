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
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">Admin</h5>
                        <h4 class="card-text">ryan.nugroho@students.amikom.ac.id</h4>
                        <p4 class="card-text">S1 - INFORMATIKA</p4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection