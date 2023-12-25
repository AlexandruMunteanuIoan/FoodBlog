@extends('welcome')
@section('content')
    <div class="cards">
        @foreach ($blogs as $blog)
            <div class="card">
                <img src="{{asset('img/'.$blog->images)}}" alt="Card Image">
                <h2>{{$blog->title}}</h2>
                <p>{{$blog->description}}</p>
                <div class="btn-container">
                    <a href="{{route('read',$blog->id)}}" class="btn read-btn">Read</a>
                    <a href="{{route('edit',$blog->id)}}" class="btn edit-btn">Edit</a>
                    <form action="{{ route('delete', $blog->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn delete-btn">Delete</button>
                    </form>
                  </div>
            </div>
        @endforeach
    </div>
@endsection
