<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="{{ csrf_token() }}">
    <meta name="csrf-token" content="width=device-width initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    @yield('styles')

</head>

<body class="fixed-navbar">
