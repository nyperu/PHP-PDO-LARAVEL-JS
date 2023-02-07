@props(['posts'])

    <x-post-featured-card :post="$posts[0]"/>



    @if($posts->count()>1)
        <div class="lg:grid lg:grid-cols-2">


            @foreach($posts->skip(1)->take(2) as $post)
                <x-post-card :post="$post"/>

            @endforeach
        </div>
    @endif
    @if($posts->count()>3)
        <div class="lg:grid lg:grid-cols-3">
            @foreach($posts->skip(3) as $post)
                <x-post-card :post="$post"/>

            @endforeach

        </div>
    @endif

