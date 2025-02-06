<h1>List of all posts</h1>
<div>
    <ul>
    @foreach($posts as $post)
        <li>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </li>
    @endforeach
    </ul>
</div>