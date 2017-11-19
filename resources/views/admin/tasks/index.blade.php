<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
        @foreach($tasks as $task=>$val)
            <li>
                <a href="/tasks/{{ $val->id }}"> {{ $val->body }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>