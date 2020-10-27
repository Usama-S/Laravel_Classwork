@extends('welcome')

@section('content')

<form action="/login" method="get">
    <input placeholder="Name" type="text" name="name">
    <br />
    <br />
    <input type="submit" value="Submit">
</form>

@if(isset($msg))
    <span style="color: red">{{$msg}}</span>
@endif

@endsection