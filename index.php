<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Mahfuz | Full Stack Developer</title>

	<link rel="stylesheet" href="./assets/css/default.css" />
	<link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="./assets/font-awesome/css/all.min.css" />
</head>

<body>
	<?php
	$request = $_SERVER['REQUEST_URI'];

	switch ($request) {
		case '/':
			require_once __DIR__ . './pages/index.php';
			break;
		case '/about':
			require_once __DIR__ . './pages/about.php';
			break;
		case '/portfolio':
			header("Location: /#portfolio");
			break;
		case '/contact':
			require_once __DIR__ . './pages/contact.php';
			break;
		default:
			http_response_code(404);
			require_once __DIR__ . './pages/404.php';
			break;
	}
	?>
	<script src="./assets/js/default.js" type="module"></script>
</body>

</html>