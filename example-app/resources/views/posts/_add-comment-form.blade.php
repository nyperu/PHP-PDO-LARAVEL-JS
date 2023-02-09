@auth
    <x-panel>
        <form method="POST" action="/posts/{{$post->slug}}/comments" class="">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width="40" height="40"
                     class="rounded-full">
            </header>
            <div class="mt-6">
                                <textarea name="body" placeholder="Bir şeyler paylaş!"
                                          class="w-full text-sm focus:outline-none focus:ring"
                                          id="" cols="30" rows="5"
                                          required></textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>

            <div id="comment_footer" class="flex justify-end mt-5 border-gray-300 pt-6">
                <x-submit-button>YORUM YAP</x-submit-button>
            </div>
        </form>
    </x-panel>

@else
    <p class="text-center font-semibold">
        <a href="/login" class="hover:underline">YAPMAK İÇİN GİRİŞ YAPINIZ</a>
        yada
        <a href="/register" class="hover:underline"> BURAYA TIKLAYARAK KAYIT OLUNUZ</a>
    </p>
@endif
