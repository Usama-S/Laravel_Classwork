@extends('welcome')

@section('content')
    <h1>Hello {{ucfirst($user[0]['name'])}}, Welcome to our home page...!</h1>
@endsection