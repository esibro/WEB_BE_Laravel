<!DOCTYPE html>
<html lang="de">
<head>
    <title>Go Student</title>
</head>
<body>
<h1>Go Student</h1>

<ul>
    @foreach ($courses as $course)
        <li>{{$course->subject}}</li>
    @endforeach
</ul>
</body>
</html>
