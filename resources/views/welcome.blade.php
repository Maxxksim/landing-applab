<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'AppLab') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-[16px]">
@include('components.icons')
<x-sections.header/>
<x-sections.hero/>
</body>
</html>
