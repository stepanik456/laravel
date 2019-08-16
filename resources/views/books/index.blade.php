@extends('layout')

@section('content')
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Pages</th>
            <th>Price</th>
            <th>Author</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
            <tr>
                <td><a href="/books/{{$book->id}}">{{$book->name}}</a></td>
                <td>{{$book->description}}</td>
                <td>{{$book->pages}}</td>
                <td>{{$book->price}}</td>
                <td><a href="/authors/{{$book->author->id}}"> {{$book->author->name}} {{$book->author->surname}}</a></td>
                <td>
                    <form method="GET" action="/books/{{$book->id}}/edit">
                        @csrf
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="/books/{{$book->id}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn-success float-right"  href="/books/create">Create book</a>
@endsection
