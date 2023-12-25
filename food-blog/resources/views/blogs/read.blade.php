@extends('welcome')
@section('content')
    <div class="read-pag">
        <h1>{{$blog->title}}</h1>
        <div class="content">
            <img src="{{asset('img/'.$blog->images)}}" alt="Image">
            <p>&nbsp;{{$blog->description}}</p>
        </div>
        <a href="{{route('blog')}}"class="btn back-btn">Back</a>
    </div>
@endsection
