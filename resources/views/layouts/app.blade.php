<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            .navbar {
                background-color: #343a40; /* Dark background */
            }

            .navbar-brand {
                color: #1c1c1c; /* White text for brand */
                font-weight: bold;
                font-size: 1.5rem;
            }

            .navbar-nav .nav-link {
                color: #ffffff; /* White text for nav links */
            }

            .navbar-nav .nav-link:hover {
                color: #1c1c1c; /* Light gray on hover */
            }

            .dropdown-menu {
                background-color: #343a40; /* Dark background for dropdown */
                border: none;
            }

            .dropdown-menu .dropdown-item {
                color: #ffffff; /* White text for dropdown items */
            }

            .dropdown-menu .dropdown-item:hover {
                background-color: #495057; /* Darker gray on hover */
            }

            .btn-primary {
                background-color: #007bff; /* Bootstrap primary color */
                border-color: #007bff;
            }

            .btn-primary:hover {
                background-color: #0056b3; /* Darker shade on hover */
                border-color: #0056b3;
            }

            .navbar-toggler {
                border-color: rgba(255, 255, 255, 0.1); /* Light border color */
            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); /* Light icon color */
            }

            .btn-primary, .btn-primary:hover {
                border-radius: 15px; /* Rounded buttons */
            }
        </style>
</head>

<body>

    @include('includes.navbar')

    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    

    @yield('scripts')
</body>

</html>
