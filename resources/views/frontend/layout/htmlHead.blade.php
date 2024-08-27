<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'ই-লার্নিং::') }} @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Concern of TR Group" name="keywords" />
    <meta content="Concern of TR Group" name="description" />
    
    <!-- Favicon -->
    <link href="{{asset('frontend/img/favicon.ico')}}" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet"/>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"/>
    <!-- Flaticon Font -->
    <link href="{{asset('frontend/lib/flaticon/font/flaticon.css')}}" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
    <style>
        .vl {
            border-left: 1px solid green;
            height: 580px;
        }
    </style>
    
</head>
<body>