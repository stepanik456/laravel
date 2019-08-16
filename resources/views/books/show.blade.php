@extends('layout')

@section('content')
    <h1>{{$book->name}}</h1>
    Description:
    {{$book->description}} <br>
    Pages:
    {{$book->pages}} <br>
    Price:
    {{$book->price}} <br>
    Author:
    {{$book->author->name}} {{$book->author->surname}} <br>

    <p>
        <a href="/books/{{$book->id}}/edit" class="btn btn-primary">Edit</a>
        <form method="POST" action="/books/{{$book->id}}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </p>
@endsection
