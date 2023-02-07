<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())


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
            {{$posts->links()}}
        @else
            <script> alert("HİÇBİR POST YOK!");</script>
        @endif

    </main>

</x-layout>
