<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login – Task Management</title>
</head>

<body style="
    margin:0;
    background:#F6EFE7;
    font-family:'Playfair Display', serif;
">

<!-- HEADER (WHITE – SAME AS WELCOME) -->
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

<!-- CENTER LOGIN -->
<div style="
    min-height:calc(100vh - 120px);
    display:flex;
    align-items:center;
    justify-content:center;
">

    <div style="
        border:2px solid #5A1A1A;
        border-radius:20px;
        padding:4rem 4.5rem;
        width:420px;
        background:#F6EFE7;
    ">

        <h2 style="
            margin:0 0 0.8rem 0;
            letter-spacing:0.25em;
            font-size:1.1rem;
            color:#5A1A1A;
            text-transform:uppercase;
            text-align:center;
        ">
            Login
        </h2>

        <p style="
            text-align:center;
            font-size:0.95rem;
            color:#6B4A4A;
            margin-bottom:2.5rem;
        ">
            Sign in to manage your tasks
        </p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- EMAIL -->
            <div style="margin-bottom:1.6rem;">
                <label style="font-size:0.75rem; color:#5A1A1A;">Email</label>
                <input type="email" name="email" required
                       style="
                            width:100%;
                            padding:0.8rem;
                            border:1.5px solid #5A1A1A;
                            border-radius:8px;
                            background:#F6EFE7;
                            font-size:0.9rem;
                       ">
            </div>

            <!-- PASSWORD -->
            <div style="margin-bottom:2.2rem;">
                <label style="font-size:0.75rem; color:#5A1A1A;">Password</label>
                <input type="password" name="password" required
                       style="
                            width:100%;
                            padding:0.8rem;
                            border:1.5px solid #5A1A1A;
                            border-radius:8px;
                            background:#F6EFE7;
                            font-size:0.9rem;
                       ">
            </div>

            <!-- LOGIN BUTTON -->
            <button type="submit"
                    style="
                        width:100%;
                        padding:0.9rem;
                        background:#5A1A1A;
                        color:#fff;
                        border:none;
                        border-radius:999px;
                        font-size:0.8rem;
                        letter-spacing:0.14em;
                        text-transform:uppercase;
                        cursor:pointer;
                    ">
                Login
            </button>
        </form>

        <p style="
            margin-top:2rem;
            text-align:center;
            font-size:0.75rem;
            color:#6B4A4A;
        ">
            Don’t have an account?
            <a href="{{ route('register') }}" style="color:#5A1A1A; font-weight:600;">
                Sign up
            </a>
        </p>

    </div>
</div>

</body>
</html>
