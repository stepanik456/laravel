@extends('layout')

@section('content')
    <h1 class="row justify-content-center align-self-center">Edit project</h1>

<form method="POST" action="/books/{{$book->id}}">
        @method('PATCH')
        @csrf
        <div>
            <input type="text" name="name" value="{{$book->name}}" class="form-control {{$errors->has('name') ? ("is-invalid") : ''}}">
        </div>
        <div>
            <textarea name="description" class="form-control {{$errors->has('description') ? ("is-invalid") : ''}}">{{$book->description}}</textarea>
        </div>
        <div>
            <input type="number" name="pages" value="{{$book->pages}}" class="form-control {{$errors->has('pages') ? ("is-invalid") : ''}}">
        </div>
        <div>
            <input type="number" name="price" value="{{$book->price}}" class="form-control {{$errors->has('price') ? ("is-invalid") : ''}}">
        </div>
        <div>
            <select name="author_id" class="form-control">
                @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary float-right">Edit book</button>
        </div>
</form>

<form method="POST" action="/books/{{$book->id}}">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger float-right">Delete book</button>
</form>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

@endsection
