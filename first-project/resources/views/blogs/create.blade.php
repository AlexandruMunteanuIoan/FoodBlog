@extends('welcome')
@section('content')
    <div class="create">
        <form action="{{route('store')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <input type="text" name = 'title' id="title">
            <textarea type="text" name = 'description' id="description"></textarea>
            <input type="file" name="image">
            <button class="add-btn">Add</button>
        </form>
    </div>
@endsection
