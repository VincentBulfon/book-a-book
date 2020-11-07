<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="#TODO" />
    <title>Book a book | @yield('page_title')</title>
</head>

<body>
    <header>
        <h1>@yield('title')</h1>
        @can('use-teacher-menu', $user ?? '' )
        <x-teacher-menu />
        @elsecan('use-student-menu', $user ?? '')
        <x-student-menu />
        @endcan
        @can('use-app-menu', $user ?? '')
        <x-app-menu />
        @endcan
    </header>

    <section>
        @yield('main_content')
    </section>
</body>

</html>
