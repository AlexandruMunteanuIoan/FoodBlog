@extends('welcome')
@section('content')
    <div class="cards">
        @foreach ($blogs as $blog)
            <div class="card">
                <img src="{{asset('img/'.$blog->images)}}" alt="Card Image">
                <h2>{{$blog->title}}</h2>
                <p>{{$blog->description}}</p>
                <div class="btn-container">
                    <a href="#" class="btn read-btn">Read</a>
                    <a href="{{route('edit',$blog->id)}}"" class="btn edit-btn">Edit</a>
                    <a href="#" class="btn delete-btn">Delete</a>
                  </div>
            </div>
        @endforeach
    </div>
@endsection
