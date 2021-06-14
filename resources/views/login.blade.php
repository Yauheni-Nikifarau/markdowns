@extends('layouts.common')

@section('title') Main @endsection

@section('content')

    @include('layouts.header')

<main>

    @include('layouts.forMainPage')

</main>

    @include('layouts.footer')

    @include('layouts.loginModal')

@endsection