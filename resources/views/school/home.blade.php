@extends('layouts.master')

@section('content')

    <x-other.nav-bar></x-other.nav-bar>

    <div class="home_title">
        <x-home.home-title></x-home.home-title>
    </div>

    <div class="home_page">
        <div class="home_text_section">

            <div class="text_1">
                <x-home.home-text-1></x-home.home-text-1>
            </div>
        
            <div class="text_2">
                <x-home.home-text-2></x-home.home-text-2>
            </div>
        
            <div class="text_3">
                <x-home.home-text-3></x-home.home-text-3>
            </div>
        
            <div class="text_4">
                <x-home.home-text-4></x-home.home-text-4>
            </div>

        </div>

        <div class="images_section">

            <div class="image_1_container">
                <img src="images/home-page-logo.jpg" alt="" class="img_1">
            </div>

            <div class="image_2_container">
                <img src="images/home-img-1.jpg" alt="" class="img_2">
            </div>

            <div class="image_3_container">
                <img src="images/home-img-2.jpg" alt="" class="img_3">
            </div>

            <div class="image_4_container"> 
                <img src="images/home-img-3.jpg" alt="" class="img_4">
            </div>

        </div>
    </div>

@endsection