<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@php
		//dd(App::getLocale());
	@endphp
	@php
		if (App::isLocale('vn')) {
    		echo 'Việt Nam';
		}else {
			echo 'EngList';
		}
	@endphp

	
</body>
</html>