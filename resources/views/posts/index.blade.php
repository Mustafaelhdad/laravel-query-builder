<h1>All Posts</h1>

<s href="{{route('posts.delete')}}">Delete All Posts</s>

<s href="{{route('posts.delete.all.truncate')}}">Delete All Posts with truncate</s>

@foreach ($posts as $post)
    <h3>{{$post->title}}</h3>
    <p>{{$post->body}}</p>
    <a href="{{route('post.edit', $post->id)}}">Edit</a>
    <a href="{{route('post.delete', $post->id)}}">Delete</a>
@endforeach
