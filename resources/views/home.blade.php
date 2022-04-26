@extends('layouts.app')

@section('tab_title')
Home
@endsection

@section('content')

    <h1>Home Page</h1>

    <form class="registrationForm" action="/user/register" method="post">
        @csrf
        <input type="text" name="name" placeholder="First Name">
        <input type="text" name="name" placeholder="Last Name">
        <input type="number" name="birth" placeholder="Date Of Birth">
        <input type="email" name="email" placeholder="Email">
        <input type="tel" name="phone" placeholder="Phone Number">
        <input type="submit" value="Sign out">
    </form>
@endsection
