<html>
<body>
<h2>Author List</h2>
<ol>
@foreach($authors as $author)
    <li>{{$author->name}}</li>
@endforeach
</ol>
</body>
</html>