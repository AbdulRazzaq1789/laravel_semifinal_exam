<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Course App')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <style>

    </style>
</head>

<body>

    <aside class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-icon">A</div>
            <span>Acadmia</span>
        </div>
        <nav class="sidebar-nav">
            <div class="sidebar-section-label">Main</div>
            @auth
                <a href="{{ route('students.index') }}" class="active">Dashboard</a>
                <a href="{{ route('students.index') }}">Students</a>
                <a href="{{ route('courses.index') }}">Courses</a>
                <a href="{{ route('enrollments.index') }}">Enrollments</a>
                <a href="{{ route('assignments.index') }}">Assignments</a>

                <div class="sidebar-section-label">Account</div>
                <a href="{{ route('register') }}">Register User</a>
                <a href="{{ route('password.edit') }}">Change Password</a>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="active">Login</a>
            @endguest

        </nav>
        <div class="sidebar-footer">
            @auth
                <div class="avatar-sm">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</div>
                <span>{{ auth()->user()->name }}</span>
            @endauth

            @guest
                <div class="avatar-sm">A</div>
                <span>Guest</span>
            @endguest
        </div>
    </aside>

    <!-- MAIN AREA -->
    <div class="main-area">
        <!-- NAVBAR -->
        <header class="navbar">
            <div class="navbar-left">
                <span class="page-title">@yield('title', 'Student Course App')</span>
            </div>
            <div class="navbar-right">
                @yield('actions')

                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-delete">Logout</button>
                    </form>
                @endauth
            </div>
        </header>

        <!-- CONTENT -->
        <div class="content">
            {{-- Flash notifications --}}
            @if (session('success'))
                <div class="notification success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('info'))
                <div class="notification info">
                    {{ session('info') }}
                </div>
            @endif

            @if (session('warning'))
                <div class="notification warning">
                    {{ session('warning') }}
                </div>
            @endif

            @if (session('error'))
                <div class="notification error">
                    {{ session('error') }}
                </div>
            @endif
            @yield('content')

        </div>
    </div>
</body>

</html>
