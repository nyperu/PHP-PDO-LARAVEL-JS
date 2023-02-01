TÜM POSTLAR BURDA GÖRÜNÜYOR.
@foreach($posts as $post)

    <article>
        <h1>
            <a href="/posts/{{$post->slug}}">
                {{$post->title}}
            </a>
        </h1>
<p>
    <a href="/categories/{{$post->category->slug }}">{{$post->category->name}}</a>
</p>
        <div>{{$post->excerpt}}</div>

    </article>
<HR>
@endforeach
//25.bölüm https://laracasts.com/series/laravel-8-from-scratch/episodes/25
