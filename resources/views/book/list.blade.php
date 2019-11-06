<html>
<body>
    <h1>Book List</h1>

    <ul>
        @foreach($books as $book)
            <li> {{ $book->title }} - {{ $book->pages }}, author: {{$book->author->name }}, editorial: {{$book->editorial->name}} </li>
        @endforeach
        
    </ul>

</body>
</html>