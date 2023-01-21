@extends('layouts.app')

@section('title')
Artistes
@endsection

@section('content')
<h2>Liste des artistes</h2>

<ul>
@foreach($artists as $artist)
    <li>{{ $artist->firstname }} {{ $artist->lastname }}</li>
@endforeach
</ul>
@endsection