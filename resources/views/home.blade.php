@extends('layouts.app')

@section('tab_title')
Home
@endsection

@section('content')

    <h1>Home Page</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif


    <form class="registrationForm" action="{{route('reg_form')}}" method="post">
        @csrf

        <label for="firstName">First Name</label>
        <input type="text" name="firstName" placeholder="First Name" required>

        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" placeholder="Last Name" required>

        <label for="birth">Date Of Birth</label>
        <input type="text" name="birth" placeholder="mm/dd/yyyy" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" title="Format is mm/dd/yyyy" required>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="exaimple@example.com" required>

        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" placeholder="(xxx) xxx-xxxx" pattern="^(\(?\d{3}\)?[\- ]?)?[\s\]?[0-9]{3}?[\d\- ]?[0-9]{4}$" title="Format is (xxx) xxx-xxxx" required>

        <input type="submit" value="Sign out">
    </form>
@endsection
