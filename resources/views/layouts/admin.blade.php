@extends('layouts.layout')
@section('title','| Admin')
@section('contents')
<div class="layout">
    <!-- Header START -->
    <x-admin-header/>
    <!-- Header END -->

    <!-- Side Nav START -->
    <x-admin-sidenav/>
    <!-- Side Nav END -->

    <!-- Page Container START -->
    <div class="page-container">


        <!-- Content Wrapper START -->
        <div class="main-content">
            @yield('main-content')
        </div>
        <!-- Content Wrapper END -->

        <!-- Footer START -->
        <x-footer />
        <!-- Footer END -->

    </div>
    <!-- Page Container END -->

</div>
@endsection
