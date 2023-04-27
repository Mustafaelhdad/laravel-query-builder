{{-- @extends('layout')

@section('content')
    <h1>Create a new post</h1>

    @include('create-post-form')
@endsection --}}


<h1>Edit post</h1>

<form action="{{route('post.insert')}}" method="post">

    @csrf
    <input type="text" name="title" placeholder="{{$post->title}}">
    <input type="text" name="body" placeholder="{{$post->body}}">
    <button type="submit">Submit</button>
</form>
