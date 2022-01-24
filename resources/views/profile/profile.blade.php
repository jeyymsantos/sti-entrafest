@extends('layouts.master')

@section('style')
    <link rel="stylesheet" href="css/profile.css">
@endsection


@section('content')

<div class="header-content">
    <div class="header-content-inner">
    </div>
</div>

<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <img src="pics/{{ !is_null($student) ? $student->profile : 'jm.jpg' }}" class="img-responsive center" alt="">
                </div>

                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="profile-usertitle-job">
                        Student
                    </div>
                </div>

                <div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                <b style="color: black; font-size: 2.3rem">Basic Information</b>
                <div class="card">
                    {{-- <img class="card-img-top" src="background.png" alt="Card image cap"> --}}
                    <div class="card-body">
                        <p style="display: inline">BIRTHPLACE</p>
                        <p style="display: inline; margin-right:100px; float:right"> 
                        
                            {{ !is_null($student) ? $student->birthplace : '-' }}
                            
                        </p>
                        <hr>

                        <p style="display: inline">CIVIL STATUS</p>
                        <p style="display: inline; margin-right:100px; float:right">
                        
                            {{ !is_null($student) ? $student->status : '-' }}
                        
                        </p>
                        <hr>

                        <p style="display: inline">NATIONALITY</p>
                        <p style="display: inline; margin-right:100px; float:right">
                        
                            {{ !is_null($student) ? $student->nationality : '-' }}
                        
                        </p>
                        <hr>

                        <p style="display: inline">RELIGION</p>
                        <p style="display: inline; margin-right:100px; float:right">
                        
                            {{ !is_null($student) ? $student->religion : '-' }}

                        </p>
                        <hr>

                        <a href="edit-profile" class="btn btn-primary btn-lg">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
