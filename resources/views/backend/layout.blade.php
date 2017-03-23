<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('larablog.title') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('vendor/larablog/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	<nav class="nav has-shadow">
        <div class="container">
            <div class="nav-left">
                <a class="nav-item">
                    {{ config('larablog.title') }} - Admin
                </a>
                <a href="{{ route('larablog.backend.posts.index') }}" class="nav-item is-tab is-hidden-mobile is-active">Posts</a>
                <a href="{{ config('larablog.routes.backend') }}" class="nav-item is-tab is-hidden-mobile">Admin</a>
            </div>
            <span class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </span>
            <div class="nav-right nav-menu">
                <a href="{{ route('larablog.backend.posts.index') }}" class="nav-item is-tab is-hidden-tablet is-active">Posts</a>
                <a href="{{ config('larablog.routes.backend') }}" class="nav-item is-tab is-hidden-tablet">Admin</a>
                <a class="nav-item is-tab">Log out</a>
            </div>
        </div>
    </nav>

	@yield('content')
</body>
</html>