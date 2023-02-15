<x-layout>
    <x-panel>
        <section class="py-8 max-w-md mx-auto py-8">
            <h1 class="text-lg font-bold mb-4">
                YENİ POST PAYLAŞIMI
            </h1>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
                <x-form.input  name="title"/>
                <x-form.input  name="slug"/>
                <x-form.input  name="thumbnail" type="file"/>
                <x-form.textarea name="excerpt" rows="" />
                <x-form.textarea name="body" rows="" />

               <x-form.field>
                   <x -form.label name="category"/>
                        <select name="category_id" id="category_id">
                            @foreach(\App\Models\category::all() as $category)
                                <option value="{{$category->id}}"
                                    {{old('category_id'==$category->id ? 'selected' : '')}}
                                >
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    <x-form.error name="category"/>
                </x-form.field>
                <div class="flex justify-end">
                  <x-form.button text="GÖNDER" type="submit"/>
                </div>
            </form>
        </section>
    </x-panel>
</x-layout>
