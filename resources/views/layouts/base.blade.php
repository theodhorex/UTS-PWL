<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS | 71230980 - @yield('title', 'Base')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid py-3">
        <!-- Header: LEFT HEADER & RIGHT HEADER -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-6 border border-dark p-3 text-center fw-bold">
                LEFT HEADER
            </div>
            <div class="col-lg-6 col-md-6 col-6 border border-dark p-3 text-center fw-bold">
                RIGHT HEADER
            </div>
        </div>

        <!-- Body: LEFT NAVIGATION, CONTENT, RIGHT NAVIGATION -->
        <div class="row" style="min-height: 400px;">
            <div class="col-lg-3 col-md-3 col-sm-12 border border-dark p-3">
                <div class="fw-bold text-center mb-3">LEFT NAVIGATION</div>
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                    <a class="nav-link {{ request()->is('courses') || request()->is('/') ? 'active bg-info text-white' : 'text-dark' }} rounded-0 p-2 border mb-1" href="/courses">Courses</a>
                    <a class="nav-link {{ request()->is('students') ? 'active bg-info text-white' : 'text-dark' }} rounded-0 p-2 border mb-1" href="/students">Students</a>
                    <a class="nav-link {{ request()->is('grades') ? 'active bg-info text-white' : 'text-dark' }} rounded-0 p-2 border mb-1" href="/grades">Grades</a>
                    <a class="nav-link {{ request()->is('assignments') ? 'active bg-info text-white' : 'text-dark' }} rounded-0 p-2 border mb-1" href="/assignments">Assignments</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 border border-dark p-3">
                <div class="fw-bold text-center mb-3">CONTENT</div>
                @yield('content')
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 border border-dark p-3 d-flex flex-column justify-content-center align-items-center">
                <div class="fw-bold text-center">RIGHT NAVIGATION</div>
            </div>
        </div>

        <!-- Footer: FOOTER -->
        <div class="row">
            <div class="col-lg-12 col-12 border border-dark p-3 text-center fw-bold">
                FOOTER
            </div>
        </div>
    </div>
</body>
</html>
