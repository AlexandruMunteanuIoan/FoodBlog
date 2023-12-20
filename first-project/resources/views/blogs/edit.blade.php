@extends('welcome')
@section('content')
    <div class="create">
        <form action="{{route('update',$blog->id)}}" method="POST" enctype='multipart/form-data'>
            @method('PATCH')
            @csrf
            <input type="text" name = 'title' id="title" value="{{$blog->title}}">
            <textarea type="text" name = 'description' id="description">{{$blog->description}}</textarea>
            <input type="file" name="image">
            <button class="add-btn">Add</button>
        </form>
    </div>
@endsection
