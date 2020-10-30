@extends('welcome')

@section('content')

<form action="/login" method="get">
    <input placeholder="email" type="email" name="email">
    <br />
    <br />
    <input placeholder="password" type="password" name="password">
    <br />
    <br />
    <input type="submit" value="Submit">
</form>

@if(isset($msg))
    <span style="color: red">{{$msg}}</span>
@endif

@endsection