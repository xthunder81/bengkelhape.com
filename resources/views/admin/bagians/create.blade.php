@extends('layouts.admin')

@section('titlePage')
Dashboard
@endsection

@section('content')
@if(Session::has('pesan'))
    <p class="alert alert-{{ Session::get('jenis') }}">
        {{ Session::get('pesan') }}</p>
@endif
<div class="container">

</div>
@endsection
