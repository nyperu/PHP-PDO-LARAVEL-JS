<article>
    <h1>
        <a href="/posts/{{$post->slug}}">
            {{$post->title}}
        </a>
    </h1>
    <a href="../authors/{{$post->author->username}}">{{$post->author->name}}</a> Tarafından <a
        href="/categories/{{$post->category->slug }}">{{$post->category->name}}</a> 'YE YAZILDI.
    <br>
    <br>

    <h2>{{$post->excerpt}}</h2>
    <p>{{$post->body}}</p>
</article>
<hr>asdasd

<h3><a href="/">ANA SAYFAYA DÖN</a></h3>

