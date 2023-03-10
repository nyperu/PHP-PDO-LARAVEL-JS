@props(['comment'])
<x-panel>
<article class="flex bg-gray-200 p-4 space-x-4">
    <div class="flex-shrink-0 " >
        <img src="https://i.pravatar.cc/60?u{{$comment->user_id}}" alt=""  class="rounded-xl" width="60" height="60">
    </div>
    <div  class="p-3">
        <header class="mb-4">
            <strong>
                <h3 class="font-bold">{{$comment->author->username}}</h3>
            </strong>
            <p class="text-xs">Posted <time>{{$comment->created_at->format('F j, Y, g:i a')}}</time></p>

        </header>
        <p>
            {{$comment->body}}
        </p>
    </div>
</article>
</x-panel>
