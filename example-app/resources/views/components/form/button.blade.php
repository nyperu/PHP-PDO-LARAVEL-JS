@props(['text','type'])
<button type="{{$type}}"
        class="bg-blue-500 text-white
         uppercase font-semibold text-xs py-2
         px-10 rounded-2xl"
        id="{{$text}}" >{{ $text }}
</button>
