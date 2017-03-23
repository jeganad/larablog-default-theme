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
	<nav class="nav">
		<div class="nav-center">
			<a href="{{ url('/') }}" class="nav-item is-brand">{{ config('larablog.title') }}</a>
		</div>
	</nav>

	@yield('content')

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <strong>Larablog</strong> by <a href="https://nms.digital">Naoray Kroaths</a>. The source code is licensed
                    <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
                </p>
                <p>
                    <a class="icon" href="https://github.com/naoray/larablog">
                        <i class="fa fa-github"></i>
                    </a>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>