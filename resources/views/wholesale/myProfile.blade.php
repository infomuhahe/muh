
@extends('wholesale.layouts.master2')
@section('content')

<div id="wrapper"><!-- #wrapper begin -->

    @include('wholesale.inc.sidebar')



        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                <h2>Hello myProfile Page</h2>
        @foreach($Profiles as $profile)

            <h4>{{ $profile->name }}</h4>
            <p>{{ $profile->email }}</p>
            <p>{{ $profile->phone }}</p>
            <p>{{ $profile->companyname }}</p>
            <p>{{ $profile->country }}</p>
            <p>{{ $profile->address }}</p>
        @endforeach
                <a href="/updateProfile">update profile</a>



            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->
@endsection


