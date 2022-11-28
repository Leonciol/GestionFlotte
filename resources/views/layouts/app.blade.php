<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Le titre de la page -->
	<title>@yield("title")</title>
    <link rel="stylesheet" href="{{ @asset('css/app.css') }}">
</head>
<body>

    <x-navbarComponent/>
	<!-- Le contenu -->
	@yield("content")

    <script></script>

</body>
</html>

