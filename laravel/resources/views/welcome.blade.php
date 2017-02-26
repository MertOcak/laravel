<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
</head>
<body>
<ul>
@foreach ($tasks as $task)
	<li>{{ $task->body }}</li>
@endforeach
</ul>
{{-- 

@if

@endif

@while

@endwhile

 --}}
</body>
</html>