@extends('layouts.layout')
@section('title','| Company')
@section('contents')
    <div class="layout">
        <x-company-header />
        <x-company-sidenav />

        <!-- Page Container START -->
        <div class="page-container">


        <!-- Content Wrapper START -->
        <div class="main-content">
            <div class="container">
                @yield('main-content')
            </div>
        </div>
        <!-- Content Wrapper END -->

        <!-- Footer START -->
        <x-footer />
        <!-- Footer END -->

        </div>
        <!-- Page Container END -->
    </div>
@endsection
