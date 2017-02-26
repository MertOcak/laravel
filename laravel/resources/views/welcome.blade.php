<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
</head>
<body>
	@if(isset($tasks))
	<ul>
		@foreach ($tasks as $task)
		<li>{{ $task->body }}</li>
		@endforeach
	</ul>
	@else
	<h1>Welcome</h1>
	<h3>Nothing Found To List</h3>
	@endif
{{-- 

@if

@endif

@while

@endwhile

--}}
</body>
</html>