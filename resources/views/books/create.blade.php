<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>New book</h1>
 
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="title goes here">
        <input type="text" name="author" placeholder="author goes here">
        <input type="date" name="released_at" placeholder="date goes here">
        <input type="submit" value="Create">
    </form>
</body>

</html>