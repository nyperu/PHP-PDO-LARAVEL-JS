@props(['name','rows'])
<x-form.field>
    <x-form.label name="{{$name}}"/>

<textarea class="border border-gray-400 p-2 w-full"
          type="text"
          name="{{$name}}"
          id="{{$name}}"
          value="{{old($name)}}}"
          required
></textarea>
<x-form.error name="{{$name}}"/>
</x-form.field>
