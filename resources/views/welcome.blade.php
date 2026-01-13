<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Management</title>
</head>

<body style="
    margin:0;
    background:#F6EFE7;
    font-family:'Playfair Display', serif;
">

<!-- HEADER (WHITE BACKGROUND ONLY) -->
<div style="
    background:#ffffff;
    border-bottom:1px solid #e6ded7;
">
    <div style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:2.5rem 5rem;
    ">
        <div style="
            letter-spacing:0.18em;
            font-size:0.9rem;
            color:#5A1A1A;
            font-weight:600;
        ">
            TASK MANAGEMENT
        </div>

        <div style="display:flex; gap:1.2rem;">
            <a href="{{ route('login') }}"
               style="
                    padding:0.45rem 1.4rem;
                    border:1.5px solid #5A1A1A;
                    border-radius:999px;
                    color:#5A1A1A;
                    text-decoration:none;
                    font-size:0.75rem;
                    letter-spacing:0.12em;
                    text-transform:uppercase;
               ">
                Login
            </a>

            <a href="{{ route('register') }}"
               style="
                    padding:0.45rem 1.6rem;
                    background:#5A1A1A;
                    color:#fff;
                    border-radius:999px;
                    text-decoration:none;
                    font-size:0.75rem;
                    letter-spacing:0.12em;
                    text-transform:uppercase;
               ">
                Sign Up
            </a>
        </div>
    </div>
</div>

<!-- MAIN CONTENT (UNCHANGED) -->
<div style="
    display:grid;
    grid-template-columns: 1.3fr 1fr;
    gap:6rem;
    padding:7rem 6rem 8rem;
    align-items:flex-start;
">

    <!-- LEFT HERO -->
    <div>
        <h1 style="
            font-size:8.5rem;
            line-height:1;
            margin:0;
            color:#3A1A1A;
            font-weight:700;
        ">
            Organise.<br>
            Track.<br>
            Complete.
        </h1>

        <p style="
            margin-top:2.4rem;
            max-width:520px;
            font-size:2.0rem;
            line-height:1.45;
            color:#6B4A4A;
        ">
            This task management system helps users manage all their tasks
            in one place from planning to completion.
        </p>
    </div>

    <!-- RIGHT HERO CARD -->
    <div style="margin-top:8rem;">
        <div style="
            border:2px solid #5A1A1A;
            border-radius:20px;
            padding:4rem 4.2rem;
            max-width:520px;
            background:#F6EFE7;
        ">
            <h3 style="
                margin:0 0 1.2rem 0;
                letter-spacing:0.25em;
                font-size:1rem;
                color:#5A1A1A;
                text-transform:uppercase;
            ">
                Task Management
            </h3>

            <p style="
                font-size:1.15rem;
                color:#6B4A4A;
                margin-bottom:3rem;
                line-height:1.7;
            ">
                A centralized platform designed to manage, track, and
                complete all your tasks efficiently.
            </p>

            <div style="display:flex; gap:1.6rem;">
                <a href="{{ route('login') }}"
                   style="
                        padding:0.7rem 2.6rem;
                        border:2px solid #5A1A1A;
                        border-radius:999px;
                        color:#5A1A1A;
                        text-decoration:none;
                        font-size:0.8rem;
                        letter-spacing:0.14em;
                        text-transform:uppercase;
                   ">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   style="
                        padding:0.7rem 2.8rem;
                        background:#5A1A1A;
                        color:#fff;
                        border-radius:999px;
                        text-decoration:none;
                        font-size:0.8rem;
                        letter-spacing:0.14em;
                        text-transform:uppercase;
                   ">
                    Sign Up
                </a>
            </div>
        </div>
    </div>

</div>

</body>
</html>
