@extends('layout')

@section('content')
<h1 class="row justify-content-center align-self-center">{{$author->name}} {{$author->surname}} books</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Pages</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($author->books as $book)
            <tr>
                <td>{{$book->name}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->pages}}</td>
                <td>{{$book->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
