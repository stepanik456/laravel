@extends('layout')

@section('content')

<body>
    <h1 class="row justify-content-center align-self-center">Create new book</h1>

    <form method="POST" action="/books">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Book name" class="form-control {{$errors->has('name') ? ("is-invalid") : ''}}" value="{{old('name')}}">
        </div>
        <div>
            <textarea name="description" placeholder="Book description" class="form-control {{$errors->has('description') ? ("is-invalid") : ''}}">{{old('description')}}</textarea>
        </div>
        <div>
            <input type="number" name="pages" placeholder="Pages" class="form-control {{$errors->has('pages') ? ("is-invalid") : ''}}" value="{{old('pages')}}">
        </div>
        <div>
            <input type="number" name="price" placeholder="Price" class="form-control {{$errors->has('price') ? ("is-invalid") : ''}}" value="{{old('price')}}">
        </div>
        <div>
            <select name="author_id" class="form-control">
                @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary float-right">Create book</button>
        </div>
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
</body>

@endsection

