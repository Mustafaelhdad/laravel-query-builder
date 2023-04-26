{{-- @extends('layout')

@section('content')
    <h1>Create a new post</h1>

    @include('create-post-form')
@endsection --}}


<h1>Create new post</h1>

<form action="">
    <input type="text" name="title" placeholder="Enter the title">
    <input type="text" name="body" placeholder="Content of the post">
    <button type="submit">Submit</button>
</form>
