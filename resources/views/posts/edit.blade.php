{{-- @extends('layout')

@section('content')
    <h1>Create a new post</h1>

    @include('create-post-form')
@endsection --}}


<h1>Edit Post: {{$post->title}}</h1>

<form action="{{route('post.update', $post->id)}}" method="post">

    @csrf
    @method('put')
    <input type="text" name="title" placeholder="{{$post->title}}">
    <input type="text" name="body" placeholder="{{$post->body}}">
    <button type="submit">Submit</button>
</form>
