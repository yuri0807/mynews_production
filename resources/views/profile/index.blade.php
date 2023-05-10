@extends('layouts.front')
@section('title', 'プロフィール')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                    
        <hr color="#c0c0c0">
        <div class="row">
            <div class="profiles col-md-8 mx-auto mt-3">
                @foreach($profiles as $profile)
                    <div class="profile">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="name">
                                    {{ Str::limit($profile->name, 150) }}
                                </div>
                                <div class="gender">
                                    {{ Str::limit($profile->gender, 150) }}
                                </div>
                                <div class="hobby">
                                    {{ Str::limit($profile->hobby, 500) }}
                                </div>
                                <div class="introduction">
                                    {{ Str::limit($profile->introduction, 500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection