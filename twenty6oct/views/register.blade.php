@extends('welcome')

@section('content')

<form action="/registerAccount" method="get">
<!-- name, email, password, phoneNumber, userTypeId -->
    <input placeholder="Name" type="text" name="name">
    <br />
    <br />
    
    <input placeholder="Email" type="email" name="email">
    <br />
    <br />
    
    <input placeholder="Password" type="password" name="password">
    <br />
    <br />
    
    <input type="submit" value="Submit">
</form>


@endsection