@props(['comment'])
<article class="flex bg-gray-200 p-4 border border-gray-300 rounded-xl space-x-4">
    <div class="flex-shrink-0 " >
        <img src="https://i.pravatar.cc/100" alt=""  class="rounded-xl" width="60" height="60">
    </div>
    <div  class="p-3">
        <header class="mb-4">
            <strong>
                <h3 class="font-bold">  SAAS {{$comment->author->username}}</h3>
            </strong>
            <p class="text-xs">Posted <time>{{$comment->created_at}}</time></p>

        </header>
        <p>
            {{$comment->body}}
        </p>
    </div>
</article>
