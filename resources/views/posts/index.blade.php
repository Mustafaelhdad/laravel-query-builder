<h1>All Posts</h1>

@foreach ($posts as $post)
    <h3>{{$post->title}}</h3>
    <p>{{$post->body}}</p>
    <a href="{{route('post.edit', $post->id)}}">Edit</a>
    <a>Delete</a>
@endforeach
