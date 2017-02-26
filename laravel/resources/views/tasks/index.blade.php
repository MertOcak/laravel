<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
</head>
<body>
	<ul>
		@foreach ($tasks as $task)
		<li>
			<a href="/tasks/{{ $task->id }}">

				{{ $task->body }}

			</a>
		</li>
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