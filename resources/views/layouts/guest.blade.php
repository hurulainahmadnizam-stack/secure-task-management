<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Task Management') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background-color:#F6EFE7; font-family: 'Playfair Display', serif;">

    <!-- TOP BAR -->
    <div style="
        max-width:1200px;
        margin:0 auto;
        padding:2rem;
        display:flex;
        justify-content:space-between;
        align-items:center;
    ">
        <!-- LEFT -->
        <div style="font-weight:600; letter-spacing:0.15em; color:#5A1A1A;">
            TASK MANAGEMENT
        </div>

        <!-- RIGHT BUTTONS -->
        <div style="display:flex; gap:1rem;">
            <a href="{{ route('login') }}"
               style="
                padding:0.5rem 1.2rem;
                border:1px solid #5A1A1A;
                border-radius:999px;
                text-decoration:none;
                color:#5A1A1A;
                font-size:0.85rem;
               ">
                Login
            </a>

            <a href="{{ route('register') }}"
               style="
                padding:0.5rem 1.2rem;
                background-color:#5A1A1A;
                color:#fff;
                border-radius:999px;
                text-decoration:none;
                font-size:0.85rem;
               ">
                Sign Up
            </a>
        </div>
    </div>

    <!-- CONTENT -->
    <div style="
        max-width:1200px;
        margin:0 auto;
        padding:4rem 2rem;
        display:grid;
        grid-template-columns:1.2fr 1fr;
        gap:4rem;
        align-items:center;
    ">

        <!-- LEFT TEXT -->
        <div>
            <h1 style="
                font-size:3.2rem;
                line-height:1.1;
                color:#2E0F0F;
                margin-bottom:1.5rem;
            ">
                Organise.<br>
                Track.<br>
                Complete.
            </h1>

            <p style="
                font-size:1rem;
                color:#6B4A4A;
                max-width:420px;
            ">
                This task management system helps users manage all their tasks in one place — 
                from planning to completion.
            </p>
        </div>

        <!-- RIGHT FORM -->
        <div style="
            background-color:#F6EFE7;
            border:1px solid #5A1A1A;
            border-radius:10px;
            padding:2.5rem;
        ">
            {{ $slot }}
        </div>

    </div>

</body>
</html>
