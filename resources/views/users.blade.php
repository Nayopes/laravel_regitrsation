@extends('layouts.app')

@section('tab_title')
Users
@endsection

@section('content')
    <h1>Users Page</h1>

    <p>
        @include('includes.messages')
    </p>
    <div>
        @foreach($data as $item)
            <div>
                <p> First Name: {{$item->firstName}}</p>
                <p> Last Name: {{$item->lastName}}</p>
                <p> Date Of Birth: {{$item->birthDate}}</p>
                <p> Email: {{$item->email}}</p>
                <p> Phone Number: {{$item->phone}}</p>
            </div>
        @endforeach
    </div>

@endsection
